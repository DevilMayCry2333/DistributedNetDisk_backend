<?php
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
namespace app\index\model;

use think\Model;
use app\index\model\util\PasswordEncryt;
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
class RegisterModller extends Model
{
    protected $table = "netdisk_user";
    /**
     * Login的控制器方法
     *
     * @return string null
     */
    public function register($username,$password)
    {
        $isRegisted=$this->where('username', $username)->find();
        //        echo $isRegisted;
        if($isRegisted==null) {
            $passwordEncrypt = new PasswordEncryt();
            $salt=$passwordEncrypt->set_salt();
            $md5_password=$passwordEncrypt->md5encrypt($password, $salt);
            $data=array('username'=>$username,'password'=>$md5_password,'salt'=>$salt);
            $this->insert($data);
            return true;
        }
        else{
            return false;
        }

    }
}