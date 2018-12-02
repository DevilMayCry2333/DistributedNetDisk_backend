<?php
/**
 * Created by PhpStorm.
 * User: SV
 * Date: 2018/11/29
 * Time: 20:54
 */

namespace app\index\model;

use think\Model;
use app\index\model\util\PasswordEncryt;
class RegisterModller extends Model
{
    protected $table = "netdisk_user";

    public function register($username,$password){
        $isRegisted=$this->where('username',$username)->find();
//        echo $isRegisted;
        if($isRegisted==null){
            $passwordEncrypt = new PasswordEncryt();
            $salt=$passwordEncrypt->set_salt();
            $md5_password=$passwordEncrypt->md5encrypt($password,$salt);
            $data=array('username'=>$username,'password'=>$md5_password,'salt'=>$salt);
            $this->insert($data);
            return true;
        }
        else{
            return false;
        }

    }
}