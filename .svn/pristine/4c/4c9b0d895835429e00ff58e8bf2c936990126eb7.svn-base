<?php

namespace app\home\model;

use think\Model;

class Exampaper extends Model
{
     // 在模型里面封装一个方法，用于根据试卷(关卡表)的主键id，获取所有的题目信息
    public function paperToquestion($id)
    {
        // 先根据试卷的主键id获取对应的题目ids
        $questionsids = self::get($id)->questions_ids;
        // 然后通过$questions_ids获取所有的题目信息
        $questions_info = model('ExamQuestions')->where('id','in',$questions_info)->select();
        return $questions_info;
    }
}
