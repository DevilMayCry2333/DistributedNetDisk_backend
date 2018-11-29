<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018/11/24
 * Time: 01:06
 */

namespace app\index\model;


use app\index\model\util\PasswordEncryt;
use think\Model;
header("Content-Type: text/html;charset=utf-8");
class LoginModller extends Model
{
    protected $table = "netdisk_user";

    public function login($username,$password){
        header("Content-Type: text/html;charset=utf-8");
        $passwordEncrypt = new PasswordEncryt();


        $passmd5 = $passwordEncrypt->md5encrypt($username,$password);

        $login_res = $passwordEncrypt->where('username',$username)->where('password',$passmd5)->find();

        if($login_res!=null){

            //写入session
            file_put_contents('test.txt', $username);
//            echo $_SESSION["username"];
            echo "OK";
        }else{
            echo "FAIL";
        }
    }

}