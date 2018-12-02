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

        $res=$this->where('username',$username)->find();


        $passwd_right=$res['password'];
//        var_dump($passwd_right);
        $salt=$res['salt'];
//        var_dump($salt);
        $passwdmd5 = $passwordEncrypt->md5encrypt($password,$salt);
//        var_dump($passwdmd5);
        if(strcmp($passwd_right,$passwdmd5)==0){
            $login_res = true;
        }else{
            $login_res = false;
        }
//        var_dump($login_res);
//        $login_res = ($passwd_right==$passwdmd5);
//        var_dump($login_res);
        if($login_res){

            //写入session
            file_put_contents('test.txt', $username);
//           echo $_SESSION["username"];
            //echo $username;
            return true;
        }else{
            //echo "FAIL";
            return false;
        }
    }

}