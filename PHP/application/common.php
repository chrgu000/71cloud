<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
if(!function_exists('encrypt_password')){
    //定义密码加密函数
    function encrypt_password($password){
        //加密方式
        $salt = 'dsfdksl!lfdskdlm16sdfa';//自定义字符串
        return md5( md5($password) . $salt );
    }
}

if (!function_exists('getTree')) {
    //递归方法实现无限极分类
    function getTree($list,$pid=0,$level=0) {
        static $tree = array();
        foreach($list as $key => $row) {
            if($row['pid']==$pid) {
                $row['level'] = $level;
                $tree[] = $row;
                getTree($list, $row['id'], $level + 1);
            }
        }
//        die();
        return $tree;
    }
}



if (!function_exists('getTree_sec')) {
    //递归方法实现无限极分类
    function getTree_sec($list_sec,$pid_sec=0,$level_sec=1) {
        static $tree_sec = array();
        foreach($list_sec as $row_sec) {
            if($row_sec['pid']==$pid_sec) {
                $row_sec['level'] = $level_sec;
                $tree_sec[] = $row_sec;
                getTree_sec($list_sec, $row_sec['id'], $level_sec + 1);
            }
        }
        return $tree_sec;
    }
}



function http_request($url, $data=null) {
    //第一步：创建curl
    $ch = curl_init();
    //第二步：设置curl
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //禁止服务器端校检SSL证书
    //判断$data数据是否为空
    if(!empty($data)) {
        //模拟发送POST请求
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //以文档流的形式返回数据
    //第三步：执行curl
    $output = curl_exec($ch);
    //第四步：关闭curl
    curl_close($ch);
    //把$output当做返回值返回
    return $output;
}

/*
 * 无限极分类
 * @param   $data      array      分类数据
 *
 */
function getTree($data ,$pid = 0,$level =1){
    static $list = [];
    foreach ($data as $v){
        if($v['pid'] == $pid){
            $v['level'] = $level;
            $list[]  = $v;
            getTree($data,$v['id'],$level+1);
        }
    }
    return $list;
}

/*
 * 获取当前分类下的所有子类id
 * @param       $data       array       分类数据
 * @param       $cate_id    int         当前分类id
 *
 */
function getSon($data,$cate_id){

    static $son = [];
    foreach ($data as $v){
        if($v['pid'] == $cate_id ){
            $son[] = $v['id'];
            getSon($data,$v['id']);
        }
    }
    return $son;
}


/**
 * @param $signName string 签名名称
 * @param $tempCode string 模板CODE
 * @param $tel string 手机号
 *
 *
 */
function sendMsg($tel,$signName = '注册验证',$tempCode = 'SMS_69885140'){
    //session("randStr")["time"]=0;
    //60秒之内不允许重复发送
   if(time() - session('randStr')['time']   < 60){
        return ['code'=>0,'msg'=>'60秒后再获取验证码','data'=>''];
    }

    //同一手机号每天限制发送5次

    $tel_count = session($tel);

    if(!empty($tel_count) && $tel_count>=5){
        return ['code'=>0,'msg'=>'同一手机号每日限制5次','data'=>''];
    }

    //同一ip每天限制发送20次
    $ip = preg_replace("/[.]/",'_',get_real_ip());//获取ip  '.'替换成'_'
    $ip_count = session($ip);
    if(!empty($ip_count) && $ip_count>=20){
        return ['code'=>0,'msg'=>'同一ip每日限制20次','data'=>''];
    }

    require_once '../vendor/phpsendmsg/api_demo/SmsDemo.php';
    //随机字符串
    //验证码存session
    $randStr = ['randStr'=>rand(100000,999999),'time'=>time()];
    session('randStr',$randStr);

    //手机号存session
    !empty($tel_count) ? session($tel,$tel_count+1) :  session($tel,1);

    //ip存session
    !empty($ip_count) ? session($ip,$ip_count+1) :  session($ip,1);

    SmsDemo::sendSms($tel,$randStr['randStr'],$signName,$tempCode);

    return ['code'=>1,'msg'=>'验证码发送成功','data'=>$randStr];

}


/**
 * 获取客户端ip
 *
 *
 */
function get_real_ip(){
    static $realip;
    if(isset($_SERVER)){
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $realip=$_SERVER['HTTP_X_FORWARDED_FOR'];//代理IP
        }else if(isset($_SERVER['HTTP_CLIENT_IP'])){
            $realip=$_SERVER['HTTP_CLIENT_IP'];//用户IP
        }else{
            $realip=$_SERVER['REMOTE_ADDR'];//服务器IP
        }
    }else{
        if(getenv('HTTP_X_FORWARDED_FOR')){
            $realip=getenv('HTTP_X_FORWARDED_FOR');
        }else if(getenv('HTTP_CLIENT_IP')){
            $realip=getenv('HTTP_CLIENT_IP');
        }else{
            $realip=getenv('REMOTE_ADDR');
        }
    }

    return $realip;

}



/*
 * 分页
 * param1       $model       string      模型名称
 * param2       $map         array       筛选条件
 * param3       $pageSize    int         页长
 *
 *
 */

function page($model,$map,$pageSize){
    //数据总条数
    $count = M($model)->where($map)->count();
    //实例化分页类
    $page = new \Think\Page($count,$pageSize);

    $show = $page->show(); //分页导航显示输出

    //更改样式
    $show = str_replace('current','active',$show);
    $show = str_replace('span','a',$show);

    return $show;

}


/**
 * 富文本转换为纯文本 并截取中文字符串
 * @param       $content        string          富文本
 * @param       $length         int             字符串截取长度
 *
 *
 */

function convertContent($content,$length = null){
    $content_01 = htmlspecialchars_decode($content);//把一些预定义的 HTML 实体转换为字符
    $content_02 = str_replace("&nbsp;","",$content_01);//将空格替换成空
    $contents = strip_tags($content_02);//函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容
//    $content = mb_substr($contents, 0, $length,"utf-8");//返回字符串中的前100字符串长度的字符

    return $contents;
}


//阿拉伯转中文

/**
 * @author ja颂
 * 把数字1-1亿换成汉字表述，如：123->一百二十三
 * @param [num] $num [数字]
 * @return [string] [string]
 */
function numToWord($num)
{
    $chiNum = array('零', '一', '二', '三', '四', '五', '六', '七', '八', '九');
    $chiUni = array('','十', '百', '千', '万', '亿', '十', '百', '千');

    $chiStr = '';

    $num_str = (string)$num;

    $count = strlen($num_str);
    $last_flag = true; //上一个 是否为0
    $zero_flag = true; //是否第一个
    $temp_num = null; //临时数字

    $chiStr = '';//拼接结果
    if ($count == 2) {//两位数
        $temp_num = $num_str[0];
        $chiStr = $temp_num == 1 ? $chiUni[1] : $chiNum[$temp_num].$chiUni[1];
        $temp_num = $num_str[1];
        $chiStr .= $temp_num == 0 ? '' : $chiNum[$temp_num];
    }else if($count > 2){
        $index = 0;
        for ($i=$count-1; $i >= 0 ; $i--) {
            $temp_num = $num_str[$i];
            if ($temp_num == 0) {
                if (!$zero_flag && !$last_flag ) {
                    $chiStr = $chiNum[$temp_num]. $chiStr;
                    $last_flag = true;
                }
            }else{
                $chiStr = $chiNum[$temp_num].$chiUni[$index%9] .$chiStr;

                $zero_flag = false;
                $last_flag = false;
            }
            $index ++;
        }
    }else{
        $chiStr = $chiNum[$num_str[0]];
    }
    return $chiStr;
}

//加域名
function addDomain($path){
    //外链不需要加
    $url = substr($path,0,4);
    if($path != '' && $url != 'http' ){
        $path = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']."/".$path;
    }
    return $path;

}

//生成uuid
function uuid($prefix = '')
{
    $chars = md5(uniqid(mt_rand(), true));
    $uuid = substr($chars, 0, 8) . '-';
    $uuid .= substr($chars, 8, 4) . '-';
    $uuid .= substr($chars, 12, 4) . '-';
    $uuid .= substr($chars, 16, 4) . '-';
    $uuid .= substr($chars, 20, 12);
    return $prefix . $uuid;
    echo uuid();
}



