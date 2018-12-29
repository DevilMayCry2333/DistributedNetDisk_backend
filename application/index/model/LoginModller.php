<?php
/**
 * Created by PhpStorm.
 * User: Joker
 * Date: 2018/11/29
 * Time: 20:52
 * * PHP version 7
 *
 * @category PHP_Class
 *
 * @package Default
 *
 * @author Joker <joker@jokerl.com>
 *
 * @license MIT https://www.baidu.com
 *
 * @link https://www.baidu.com
 */
namespace app\index\model;


use app\index\model\util\PasswordEncryt;
use think\Model;
header("Content-Type: text/html;charset=utf-8");
/**
 * Class Index
 * Index控制器
 *
 * @category PHP_Class
 *
 * @package Default
 *
 * @author Joker <joker@jokerl.com>
 *
 * @license MIT https://www.baidu.com
 *
 * @link https://www.baidu.com
 */
class LoginModller extends Model
{
    protected $table = "netdisk_user";
    /**
     * Login的控制器方法
     *
     * @param string $username 用户名
     * @param string $password 密码(明文)
     *
     * @return string null
     */
    public function login($username,$password)
    {
        header("Content-Type: text/html;charset=utf-8");
        $passwordEncrypt = new PasswordEncryt();

        $res=$this->where('username', $username)->find();


        $passwd_right=$res['password'];
        //        var_dump($passwd_right);
        $salt=$res['salt'];
        //        var_dump($salt);
        $passwdmd5 = $passwordEncrypt->md5encrypt($password, $salt);
        //        var_dump($passwdmd5);
        if (strcmp($passwd_right, $passwdmd5)==0) {
            $login_res = true;
        } else {
            $login_res = false;
        }
        //        var_dump($login_res);
        //        $login_res = ($passwd_right==$passwdmd5);
        //        var_dump($login_res);
        if ($login_res) {

            //写入session
            file_put_contents('test.txt', $username);
            //           echo $_SESSION["username"];
            //echo $username;
            return true;
        } else {
            //echo "FAIL";
            return false;
        }
    }

}