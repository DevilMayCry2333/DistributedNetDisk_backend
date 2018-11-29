<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018/11/24
 * Time: 19:57
 */

namespace app\index\model\util;


use think\Model;
header("Content-Type: text/html;charset=utf-8");
class PasswordEncryt extends Model
{



    protected $table = "netdisk_user";

    public function md5encrypt($username,$password)
    {
        header("Content-Type: text/html;charset=utf-8");
            //加盐加密
        $passEncrypt = new PasswordEncryt();

        $salt = $passEncrypt->where('username',$username)->column('salt')[0];


            //从随机源创建一个32位的初始向量，然后进行md5加密。
            ////初始向量只是为了给加密算法提供一个可用的种子， 所以它不需要安全保护， 你甚至可以随同密文一起发布初始向量也不会对安全性带来影响。
        ///
            $password = md5($password) . $salt;//把密码进行md5加密然后和salt连接
            $password = md5($password);//执行MD5散列
//        var_dump($password);
            return $password;//返回散列    
    }

    public function set_salt($username){

        header("Content-Type: text/html;charset=utf-8");
        try {
            $salt =bin2hex(random_bytes(64));
            $salt = md5($salt);
//            var_dump($salt);
        } catch (\Exception $e) {
        }
        $passEncrypt = new PasswordEncryt();
// save方法第二个参数为更新条件

        $passEncrypt->where('username',$username)
            ->update(['salt' => $salt]);

    }

}