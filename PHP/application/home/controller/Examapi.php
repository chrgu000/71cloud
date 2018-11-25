<?php

namespace app\home\controller;

use think\Controller;
use think\process\pipes\Unix;
use think\Request;

class Examapi extends Controller
{
    /**
     * 答题系统小程序使用
     * 答题小程序首页活动信息和关卡信息
     *
     * uid  用户id
     */
    public function index()
    {
        // 接收用户id
        $user_id = request()->param('uid');
        if (empty($user_id)) {
            return json(['code' => 0,'msg' => '参数错误', 'data' => '']);
        }
        // 1.通过用户id获取公司id
        $company_id = model('User')->find($user_id)->company_id;

        // 通过公司id获取对应的活动信息
        $activity=db('exam_activity')
            ->where(array('company_id'=>$company_id))
            ->field('id as activity_id,exam_activity_name,img_src')
            ->select();

        print_r($activity);die;
        //通过活动信息id获取对应关卡试题
        foreach ($activity as $k=>&$v)
        {
            $v['paper_info'] = db('exampaper')
                ->where(array('exam_activity_id'=>$v['activity_id'],'company_id'=>$company_id))
                ->field('id as paper_id,exampaper_name')
                ->select();

        }

        return json(['code'=>1,'data'=>$activity]);
    }



    // 通过用户uid，uid，关卡id(paper_id)，和company_id从考试记录表查询，如果存在分数记录就返回code 1，并附带分数记录，不存在就返回code为2，并返回对应此关卡的题目
    // 用户考试未通过还需要返回一个code值

    /**
     * 关卡考试状态  post
     * @param uid  用户的id
     * @param paper_id 关卡id
     *
     *
     */
    public function getScoreQuestions()
    {
        $data = request()->param();
        $user_id = $data['uid'];
        $paper_id= $data['paper_id'];
        $activity_id=$data['activity_id'];
        //查找当前用户对应的公司
        $company_id=db('user')->where(['id'=>$user_id])->field('company_id')->value('company_id');

        if (empty($user_id) || empty($paper_id)) {
            return json(['code' => 0, 'msg' => '参数错误', 'data' => '']);
        }
        // 通过用户id，关卡id,获取考试成绩分数,及活动id
        $result = db('exam_info')
            ->where(['user_id'=>$user_id,'company_id'=>$company_id,'exampaper_id'=>$paper_id,'exam_activity_id'=>$activity_id])
            ->field('result_score,use_time,right_num,is_pass,exam_activity_id')
            ->find();
        //查找对应题目的总数和满分以及通过分数
        $pass_score=db('exampaper')
            ->where(['id'=>$paper_id])
            ->field('exam_questions_num,score,pass_score')
            ->find();

        //查找下一关id
        $next_id=db('exampaper')
            ->where(['exam_activity_id'=>$activity_id,'id'=>array('gt',$paper_id)])
            ->limit('1')
            ->field('id')
            ->value('id');
        //查找下一关名称
        $exampaper_name=db('exampaper')->where(['id'=>$next_id,'exam_activity_id'=>$activity_id,'company_id'=>$company_id])->field('exampaper_name')->value('exampaper_name');

        //查找判断是否是最后一关
        $max_id=db('exampaper')
            ->where(['exam_activity_id'=>$activity_id])
            ->field('id')
            ->max('id');
        //定义一个ranking_type值，是下一关还是最后一关的判断值
        $ranking_type='';
        if($paper_id==$max_id){
            $ranking_type=1; //1代表最后一关
        }else{
            $ranking_type=0; //0代表下一关
        }

        //查找当前活动下当前关卡的第一关
        $first=db('exampaper')
            ->where(['exam_activity_id'=>$activity_id,'company_id'=>$company_id])
            ->field('id')
            ->min('id');

        //判断当前关是否通过
        if ($result['is_pass'] ==1){
            //通过返回成绩单
            $res = [
                'code'=>'1',
                'msg'=>'考试成绩获取成功！，继续下一关考试',
                'data'=>[
                    'exam_score'=>$pass_score['score'],    //满分
                    'pass_score'=>$pass_score['pass_score'],  //通过分数（及格分数）
                    'use_time'=>$result['use_time'],   //答题用时
                    'exam_questions_num'=>$pass_score['exam_questions_num'],   //题目总数
                    'right_num'=>$result['right_num'],   //答对题数
                    'result_score'=>$result['result_score'],   //答题得分
                    'is_pass'=>1,  //是否通过，0代表没通过,1通过 ,2代表上一关未通过
                    'next_id'=>$next_id,  //下一关id
                    'exampaper_name'=>$exampaper_name,  //下一关名称
                    'ranking_type'=>$ranking_type //0代表下一关，1代表最后一关,
                ]
            ];
            return json($res);
        }else{


            //判断当前是否是第一关
            if($paper_id==$first){
                //是第一关直接进入答题引导
                $res = [
                    'code'=>'1',
                    'msg'=>'',
                    'data'=>[
                        'is_pass'=>0,  //是否通过，0代表没通过，1通过 ,2代表上一关未通过
                        'exam_questions_num'=>$pass_score['exam_questions_num'],//题目总数
                        'exam_score'=>$pass_score['score'],//满分
                        'pass_score'=>$pass_score['pass_score'],//通过分数（及格分数）
                    ]
                ];
                return json($res);
            }else{
                //不是第一关就判断上一关是否通过
                //找上一关id
                $prev=db('exampaper')
                    ->where(['exam_activity_id'=>$activity_id,'company_id'=>$company_id,'id'=>$paper_id])
                    ->field('id')
                    ->value('id');
                $prev=$prev-1;

                //查找该用户是否有答题记录
                $current=db('exam_info')->where(['user_id'=>$user_id,'exam_activity_id'=>$activity_id,'exampaper_id'=>$prev])->select();


                //查找上一关的is_pass值
                $row=db('exam_info')->where(['exampaper_id'=>$prev,'user_id'=>$user_id,'exam_activity_id'=>$activity_id,'company_id'=>$company_id])->field('is_pass')->value('is_pass');


                //判断上一关是否通过
                    if($row==0 || empty($current)){
                        //上一关没通过就提示
                        $res = [
                            'code'=>'1',
                            'msg'=>'上一关还没通过，请先通过上一关',
                            'data'=>[
                                'exam_questions_num'=>$pass_score['exam_questions_num'],//题目总数
                                'exam_score'=>$pass_score['score'],//满分
                                'pass_score'=>$pass_score['pass_score'],//通过分数（及格分数）
                                'is_pass'=>2   //是否通过，0代表没通过，1通过 ,2代表上一关未通过
                            ]

                        ];
                        return json($res);
                    }else{
                        //通过就答当前关
                        $res = [
                            'code'=>'1',
                            'msg'=>'',
                            'data'=>[
                                'is_pass'=>0,  //是否通过，0代表没通过，1通过 ,2代表上一关未通过
                                'ranking_type'=>$ranking_type,  //0代表下一关，1代表最后一关,
                                'exam_questions_num'=>$pass_score['exam_questions_num'],//题目总数
                                'exam_score'=>$pass_score['score'],//满分
                                'pass_score'=>$pass_score['pass_score'],//通过分数（及格分数）
                            ]
                        ];
                        return json($res);
                    }
            }
        }

    }


    /**
     * 试卷数据  post
     * $param  company_id  公司id
     * $param  activity_id 关卡对应的活动id
     * $param  paper_id  关卡id
     *
     */
    public function questions(){
        $data = request()->param();
        $uid=$data['uid'];
        //通过用户id获取公司id
        $company_id = model('User')->find($uid)->company_id;
        $activity_id=$data['activity_id'];
        $paper_id=$data['paper_id'];
        if (empty($uid) || empty($activity_id) || empty($paper_id)) {
            return json(['code' => 0, 'msg' => '参数错误', 'data' => '']);
        }
        //根据公司id，活动id，关卡id找对应的试卷id
        $res=db('exampaper')
            ->where(['company_id'=>$company_id,'exam_activity_id'=>$activity_id,'id'=>$paper_id])
            ->field('questions_ids')
            ->find();

        //根据对应的试卷id找试卷
        $data=db('exam_questions')
            ->where(array('id'=>array('in',$res['questions_ids'])))
            ->field('id,content,opt1,opt2,opt3,opt4,answer_k,answer_v')
            ->select();

        //查找当前试卷考试时间及活动名称
        $rows=db('exampaper')->alias('a')
            ->join('c_exam_activity b','a.exam_activity_id=b.id')
            ->where(['a.company_id'=>$company_id,'a.exam_activity_id'=>$activity_id,'a.id'=>$paper_id])
            ->field('a.long_time,b.exam_activity_name')
            ->find();


        foreach($data as $k=>&$v){
            switch ($v['answer_k'])
            {
                case 'opt1':
                    $v['answer_k']='A';
                    break;
                case 'opt2':
                    $v['answer_k']='B';
                    break;
                case 'opt3':
                    $v['answer_k']='C';
                    break;
                case 'opt4':
                    $v['answer_k']='D';
            }

            $v['opt']=[
                [
                    'dir'=>'A',
                    'str'=>$v['opt1'],
                ],
                [
                    'dir'=>'B',
                    'str'=>$v['opt2'],
                ],
                [
                    'dir'=>'C',
                    'str'=>$v['opt3'],
                ],
                [
                    'dir'=>'D',
                    'str'=>$v['opt4'],
                ],
            ];
            //如果有选项不存在就删掉
            foreach ($v['opt'] as $k1=>$v1){
                if(empty($v1['str'])){
                    unset($v['opt'][$k1]);
                }
            }

            unset($v['opt1'],$v['opt2'],$v['opt3'],$v['opt4']);
        }

        $rows['text'] = $data;
        return json(['code'=>1,'data'=>$rows]);
    }


    /**
     * 答案判断录入成绩 返回成绩单  POST
     *  uid  用户id
     *  activity_id 关卡对应的活动id
     *  paper_id   关卡id
     *  use_time  答题用时
     *  arr   传过来的答案
     */
    public function transcript(){
        //接受传递的数据
        $param = json_decode(trim(file_get_contents('php://input')));
        $uid= htmlspecialchars_decode($param->uid);
        $activity_id=htmlspecialchars_decode($param->activity_id);
        $paper_id=htmlspecialchars_decode($param->paper_id);
        $use_time=htmlspecialchars_decode($param->use_time);
        $all=json_encode($param->arr);
        $arr=json_decode($all,true);

        if (empty($uid) || empty($activity_id) || empty($paper_id) || empty($use_time) || empty($arr)) {
            return json(['code' => 0, 'msg' => '参数错误', 'data' => '']);
        }
        //根据用户id找对应的公司id
        $company_id=db('user')->where(['id'=>$uid])->field('company_id')->value('company_id');

        //找该用户对应的活动下的关卡题目id
        $res=db('exampaper')
            ->where(['company_id'=>$company_id,'exam_activity_id'=>$activity_id,'id'=>$paper_id])
            ->field('questions_ids')
            ->find();

        //根据题目id找对应的题目答案
        $result=db('exam_questions')
            ->where(array('id'=>array('in',$res['questions_ids'])))
            ->field('id,content,opt1,opt2,opt3,opt4,answer_k')
            ->order('id asc')
            ->select();

        //查找当前试卷考试时间及活动名称,活动id,试卷题目数量,试卷满分,及格分数
        $rows=db('exampaper')->alias('a')
            ->join('c_exam_activity b','b.id=a.exam_activity_id')
            ->where(['a.company_id'=>$company_id,'a.exam_activity_id'=>$activity_id,'a.id'=>$paper_id])
            ->field('a.long_time,b.exam_activity_name,a.exam_activity_id as activity_id,a.exam_questions_num,a.score,a.pass_score')
            ->find();

        //找正确答案
        foreach($result as $k=>&$v){
            switch ($v['answer_k'])
            {
                case 'opt1':
                    $v['answer_k']='A';
                    break;
                case 'opt2':
                    $v['answer_k']='B';
                    break;
                case 'opt3':
                    $v['answer_k']='C';
                    break;
                case 'opt4':
                    $v['answer_k']='D';
            }

            unset($v['opt1'],$v['opt2'],$v['opt3'],$v['opt4']);
        }
        //放入一个数组里面
        $rows['text'] = $result;


        //判断传入的活动id和当前试卷所属的活动id是否一致
        if($rows['activity_id'] != $activity_id){
            return false;
        }


        //把数据库的答案转成一维数组
        $row=array_column($rows['text'],'answer_k','id');

        //把传过来的答题记录转成一维数组
        $arr=array_column($arr,'dir','str');

            //定义答对题数
            $num = 0;
            foreach ($row as $i =>$v){
                if($row[$i] == $arr[$i]){
                    //计算答对的题数
                    $num++;
                }
            }
        //计算考试分数
        $result_score=$rows['score']/$rows['exam_questions_num']*$num;
        $is_pass='';
        //判断考试成绩是否通过 0未通过,1通过
        if($result_score>=$rows['pass_score']){
            $is_pass=1;
        }else{
            $is_pass=0;
        }
        //答题记录
        $record =json_encode($arr);

        //查找当前is_pass为0未通过的数据
        $ispass_type=db('exam_info')
            ->where(['company_id'=>$company_id,'exam_activity_id'=>$activity_id,'exampaper_id'=>$paper_id,'user_id'=>$uid])
            ->find();

        //如果当前考试记录为空就插入数据库
        if(empty($ispass_type)){
            //答题结果插入数据库
            db('exam_info')->insert(
                [
                    'exam_activity_id'=>$rows['activity_id'],  //活动id
                    'exampaper_id'=>$paper_id,  //关卡id
                    'user_id'=>$uid,  //用户id
                    'result_score'=>$result_score,  //考试得分
                    'exam_score'=>$rows['score'], //试卷满分
                    'right_num'=>$num,  //答对题数
                    'exam_questions_num'=>$rows['exam_questions_num'], //总题目数量
                    'create_time'=>time(),  //创建时间
                    'use_time'=>$use_time,  //答题花费时间
                    'company_id'=>$company_id,  //公司id
                    'exam_record'=>$record,  //答题记录
                    'is_pass'=>$is_pass  //是否通过

                ]);
        }


        //判断如果之前未通过现在就是修改答题记录
        if($ispass_type['is_pass']==0){
            //更新数据库
            db('exam_info')
                ->where(['company_id'=>$company_id,'exam_activity_id'=>$activity_id,'exampaper_id'=>$paper_id,'user_id'=>$uid])
                ->update(
                [
                    'exam_activity_id'=>$rows['activity_id'],  //活动id
                    'exampaper_id'=>$paper_id,  //关卡id
                    'user_id'=>$uid,  //用户id
                    'result_score'=>$result_score,  //考试得分
                    'exam_score'=>$rows['score'], //试卷满分
                    'right_num'=>$num,  //答对题数
                    'exam_questions_num'=>$rows['exam_questions_num'], //总题目数量
                    'create_time'=>time(),  //创建时间
                    'use_time'=>$use_time,  //答题花费时间
                    'company_id'=>$company_id,  //公司id
                    'exam_record'=>$record,  //答题记录
                    'is_pass'=>$is_pass  //是否通过
                ]);
        }




        //查找当前活动下的试卷第一个关卡最大的id
        $exampaper_id=db('exampaper')
            ->where(['exam_activity_id'=>$activity_id])
            ->field('id')
            ->order('id asc')
            ->max('id');
        
        //查找下一关id
        $next_id=db('exampaper')
            ->where(['exam_activity_id'=>$activity_id,'id'=>array('gt',$paper_id)])
            ->limit('1')
            ->field('id')
            ->value('id');
        //查找下一关名称
        $exampaper_name=db('exampaper')->where(['id'=>$next_id])->field('exampaper_name')->value('exampaper_name');

        //如果是最后一关就进入排行榜
        if($paper_id==$exampaper_id){
            $res = [
                'code'=>'1',
                'msg'=>'',
                'data'=>[
                    'exam_score'=>$rows['score'], //试卷满分
                    'pass_score'=>$rows['pass_score'],  //及格分数
                    'use_time'=>$use_time,  //答题耗时
                    'exam_questions_num'=>$rows['exam_questions_num'], //总题目数量
                    'right_num'=>$num,  //答对题数
                    'result_score'=>$result_score,  //考试得分
                    'ranking_type'=>1,  //0代表下一关，1代表最后一关,
                    'is_pass'=>$is_pass  //判断是否通过
                ]
            ];

            return json($res);
        }else{
            //查找下一关id
            $next_id=db('exampaper')
                ->where(['exam_activity_id'=>$activity_id,'id'=>array('gt',$paper_id)])
                ->limit('1')
                ->field('id')
                ->find();
            $res = [
                'code'=>'1',
                'msg'=>'',
                'data'=>[
                    'exam_score'=>$rows['score'], //试卷满分
                    'pass_score'=>$rows['pass_score'],  //及格分数
                    'use_time'=>$use_time,  //答题耗时
                    'exam_questions_num'=>$rows['exam_questions_num'], //总题目数量
                    'right_num'=>$num,  //答对题数
                    'result_score'=>$result_score,  //考试得分
                    'next_id'=>$next_id['id'], //下一关id
                    'ranking_type'=>0,  //0代表下一关，1代表最后一关,
                    'exampaper_name'=>$exampaper_name, //下一关名称
                    'is_pass'=>$is_pass  //判断是否通过
                ]
            ];
            return json($res);
        }

    }


    /**排行榜  post
     * @param  uid 用户id
     *@param  activity_id 活动id
     *
     */
    public function ranking()
    {
        // 接收用户传递的数据
        $data = request()->param();
        $uid = $data['uid'];
        $activity_id=$data['activity_id'];
        if (empty($uid) || empty($activity_id)) {
            return json(['code' => 0, 'msg' => '参数错误', 'data' => '']);
        }
        //查找用户对应的公司id
        $company_id=db('user')->where(['id'=>$uid])->field('company_id')->value('company_id');


        //当前活动下的关卡总数量
        $num=db('exampaper')->where(['exam_activity_id'=>$activity_id,'company_id'=>$company_id])->count();

        /*//查找当前用户在该活动下答了几题
        $answer_num=db('exam_info')->where(['company_id'=>$company_id,'exam_activity_id'=>$activity_id,'user_id'=>$uid])->count();

        //判断当前用户题目是否答完
        //db('user_id')->where(['company_id'=>$company_id,'exam_activity_id'=>$activity_id])
        if($num != $answer_num){
        }*/
        //查找同一公司下该活动下关卡的通过分数
        $pass_score=db('exampaper')
            ->where(['company_id'=>$company_id,'exam_activity_id'=>$activity_id])
            ->field('pass_score')
            ->value('pass_score');


        //查找所有以用户为组的成绩和答题耗时
        $sql = "select user_id ,sum(result_score) as score ,sum(use_time) as long_time from c_exam_info where company_id = $company_id and exam_activity_id=$activity_id and result_score>=$pass_score group by user_id order by score desc,use_time asc limit 50";

        $use=db('exam_info')->query($sql);

        /*$all=db('exam_info')
            ->where(['company_id'=>$company_id,'exam_activity_id'=>$activity_id,'result_score'=>array('egt',$pass_score)])
            ->group('user_id')
            ->order('result_score desc,use_time asc')
            ->limit(5)
            ->sum('result_score');*/



        //print_r($all);die;

        //定义排名
        $ranking='';
        //定义当前用户得分
        $avg_score='';
        foreach ($use as $k=>&$v){
            if ($v['user_id']==$uid){
                $ranking=$k+1;
                $avg_score=$v['score']/$num;
            }
            //找该用户的用户名
            $v['username']=db('user')->where(['id'=>$v['user_id']])->field('username')->value('username');
            //平均得分
            $v['score']=$v['score']/$num;
            //判断得分是否大于通过分数
            if($v['score'] <= $pass_score){

                $v['score']=round($v['score'],2);
                //删除不满足条件的
                unset($use[$k]);

            }
            $v['score']=round($v['score'],2);
            $v['time']=time();
        }

        return json(['code'=>1,'msg'=>'','data'=>['avg_score'=>$avg_score,'ranking'=>$ranking,'use'=>$use]]);


    }


}
