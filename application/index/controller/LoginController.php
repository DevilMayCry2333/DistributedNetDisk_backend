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

namespace app\index\controller;
use think\Controller;
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept,Connection, User-Agent, Cookie,token');
header("Content-Type: text/html;charset=utf-8");

/**
 * 浏览器第一次在处理复杂请求的时候会先发起OPTIONS请求。路由在处理请求的时候会导致PUT请求失败。
 * 在检测到option请求的时候就停止继续执行
 */
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

/**
 * Class LoginController
 * LoginController控制器
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
class LoginController extends Controller
{

    /**
     * Login的控制器方法
     *
     * @return string null
     */
    public function login()
    {
        header("Content-Type: text/html;charset=utf-8");
        header("Access-Control-Allow-Origin: * ");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
        header('Access-Control-Allow-Headers: Origin, X-Requested-With,Content-Type, Accept, Connection, User-Agent, Cookie,token');
        header("Content-Type: text/html;charset=utf-8");

        $username = $_POST["username"];
        $password = $_POST["password"];
        //        echo $username;
        //        echo $password;
        if ($username != null && $password != null) {
            $user_res = new \app\index\model\LoginModller();
            if ($user_res->login($username, $password)) {
                echo "OK";
                cookie('usercookie', $username);
                $user_cookie = cookie('usercookie');
                //                var_dump($user_cookie);
                $this->redirect("https://hifafu.com/DistributedNetDisk/public/static/View/page/netdisk/index.html", 302);
            } else {
                echo "FAIL";
                $this->redirect("https://hifafu.com/DistributedNetDisk/public/static/View/page/login/index.html", 302);
            }

        }

    }
}