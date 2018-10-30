<?php
/**
 * 接口类
 * @author amplam <343937632@qq.com>
 * @config
 * return array(
//'配置项'=>'配置值'
"appid"=>"test",
'appsecert'    =>    'test',
'appip'=>'',//允许访问的IP 为空不限制
);
 * @Time:
 */
namespace Common\Util;
class  AppHelper{
    private $appid;
    private $appsecret;
    private $appip;
    public function  __construct(){
        $this->appsecret=C('appsecert');
        $this->appid=C('appid');
        $this->appip=C('appip');
    }
    /**
     * @param timeStamp 时间戳
     * @param appid  帐号
     * @param appkey  加密后的key
     * 获取token
     */
    public  function getToken($appid,$appkey,$timeStamp){
        //安全验证

        if ($this->appid!=$appid){
            return     $this->return_data('-502',"身份验证错误，或已经过期");
        }
        if (!$this->check_key($this->appid,$appkey,$timeStamp)){

            return  $this->return_data('-502',"身份验证错误，或已经过期");
        }
        $client_ip=get_client_ip();

        if ($this->appip && $client_ip!=$this->appip){
            //不合法的IP
            return $this->return_data('-502',"Wrongful IP");
        }

        $ori_str = S("token_".$this->appid.'_'.$this->appsecret);
        if($ori_str){
            //重新获取就把以前的token删除
            S($ori_str,null);
        }

        //这里是token产生的机制  您也可以自己定义
        $nonce = $this->createNoncestr(32);

        $tmpArr = array($nonce,$this->appid,$this->appsecret);

        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        // echo $tmpStr;
        //这里做了缓存 'a'=>b 和'b'=>a格式的缓存
        S("token_".$this->appid.'_'.$this->appsecret,$tmpStr,7200);
        S($tmpStr,"token_".$this->appid.'_'.$this->appsecret,7200);
        //存储tokenIP 防止抓包者使用
        S("token_".get_client_ip(),get_client_ip(),7200);
        return $this->return_data('200',"ok",$tmpStr);
    }
    /**
     * 检查权限
     * @param unknown $appid
     * @param unknown $appkey
     * @param unknown $timeStamp
     * @return boolean
     */
    private  function check_key($appid,$appkey,$timeStamp){
        $time_s = time () - $timeStamp;
        if ($time_s > 60*120) {
            //超过2个小时就过期
            return false;
        }

        //验证$appkey  md5 用户名+密码+时间戳
        $temp_appkey=md5($appid.$this->appsecret.$timeStamp);
        if ($temp_appkey!=$appkey){
            return false;
        }
        return true;
    }

    /**
     * 生成json格式
     * @param integer $code 状态码
     * @param string $msg 提示信息
     * @param array $data 数据
     */
    public  static  function  json($code,$msg="",$data=array()){

        if (!is_numeric($code)){
            return '';
        }
        $result=array(
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data
        );
        echo  json_encode($result);
        exit();
    }

    /**
     * 返回数据结构
     * @param unknown $code
     * @param string $msg
     * @param unknown $data
     * @return void|string
     */
    public static function  return_data($code,$msg="",$data=array()){
        if (!is_numeric($code)){

            return '';
        }
        $result=array(
            'header'=>json,
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data
        );
        return $result;
    }
    /**
     *  作用：产生随机字符串，不长于32位
     */
    private  function createNoncestr( $length = 10 )
    {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str ="";
        for ( $i = 0; $i < $length; $i++ )  {
            $str.= substr($chars, mt_rand(0, strlen($chars)-1), 1);
        }
        return $str;
    }


    /**
     * 返回数据到客户端
     * @access protected
     * @param mixed $data 要返回的数据
     * @param String $type 要返回数据格式
     * @return void
     */
    public function apiReturn($code,$msg="",$data=array(),$type='JSON') {
        $type=$type?$type:'JSON';
        $result=array(
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data
        );
        switch (strtoupper($type)){
            case 'JSON' :
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                exit(json_encode($result));
            case 'XML'  :
                // 返回xml格式数据
                header('Content-Type:text/xml; charset=utf-8');
                exit(xml_encode($result));
            case 'JSONP':
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                $handler  =   isset($_GET[C('VAR_JSONP_HANDLER')]) ? $_GET[C('VAR_JSONP_HANDLER')] : C('DEFAULT_JSONP_HANDLER');
                exit($handler.'('.json_encode($result).');');
            case 'EVAL' :
                // 返回可执行的js脚本
                header('Content-Type:text/html; charset=utf-8');
                exit($result);

        }
    }

    /**
     * 检查token的合法性
     * @param unknown $token
     */
    public function check_token($token){
        $client_ip=get_client_ip();
        if ($this->appip&&$client_ip!=$this->appip){
            //不合法的IP
            $this->apiReturn('-502',"Wrongful IP");
        }
        if(!$token){
            $this->apiReturn('-404','invalid token');

        }else if(!S($token)){
            $this->apiReturn('-404','invalid token');
        }
        //ip判断
        if(!S("token_".$client_ip)){
            $this->apiReturn('-502','invalid token');
        }
    }
}
/*namespace Api\Controller;
use think\Controller;
/**
 *
 * @param $uid int 用户id
 * @param $timestamp string 当前时间戳
 * @param $encrypt string 加密字符串
 *
 *
 */
/*
interface {
    public function checkCode($uid,$timestamp,$encrypt);

}*/
