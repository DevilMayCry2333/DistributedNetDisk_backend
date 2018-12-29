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
namespace app\index\model\util;


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
class PasswordEncryt extends Model
{



    protected $table = "netdisk_user";
    /**
     * Login的控制器方法
     *
     * @param string $password 密码
     * @param string $salt     盐
     *
     * @return string null
     */
    public function md5encrypt($password,$salt)
    {
        header("Content-Type: text/html;charset=utf-8");
            //加盐加密

            //从随机源创建一个32位的初始向量，然后进行md5加密。
            ////初始向量只是为了给加密算法提供一个可用的种子， 所以它不需要安全保护， 你甚至可以随同密文一起发布初始向量也不会对安全性带来影响。
        ///
            $password = md5($password) . $salt;//把密码进行md5加密然后和salt连接
            $password = md5($password);//执行MD5散列
        //        var_dump($password);
            return $password;//返回散列    
    }
    /**
     * Login的控制器方法
     *
     * @return string null
     */
    public function set_salt()
    {

        header("Content-Type: text/html;charset=utf-8");
        try {
            $salt =bin2hex(random_bytes(64));
            //            $salt = md5($salt);
            //            var_dump($salt);
        } catch (\Exception $e) {
        }

        // save方法第二个参数为更新条件
        return $salt;


    }

}