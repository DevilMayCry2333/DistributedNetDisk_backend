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
use app\index\model\DistModller;
use think\Controller;

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
class Index extends Controller
{
    /**
     * Index的控制器方法
     *
     * @return string null
     */
    public function index()
    {
        //        echo "OK";
        return '<script>window.location.href = 
"https://hifafu.com/DistributedNetDisk/" +
 "public/static/View/page/login/index.html" </script>';
    }

    /**
     * ThinkPHP 框架的内置方法
     *
     * @param string $name 默认为ThinkPHP5
     *
     * @return string null
     */
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    /**
     * 判断是否有文件
     *
     * @return string null
     */
    public function yes()
    {
        
        if ($_FILES) {
            echo 1;

        } else {
            echo 2;
        }
    }
    /**
     * 判断是否有文件
     *
     * @return string null
     */
    public function showDefault()
    {
        //        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        //var_dump($username);
        $user_file=new DistModller();
        return $user_file->getUserFile($username, 1, null, "");
    }

    /**
     * 判断是否有文件
     *
     * @return string null
     */
    public function enterDir()
    {
        //        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $curdir=$_GET['curdir'];
        //var_dump($username);
        $user_file=new DistModller();
        return $user_file->getUserFile($username, 1, null, $curdir);

    }

    /**
     * 判断是否有文件
     *
     * @return string null
     */
    public function showPic()
    {
        //        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username, 1, 'pic');
    }

    /**
     * 判断是否有文件
     *
     * @return string null
     */
    public function showDoc()
    {
        //        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username, 1, 'doc');
    }

    /**
     * 判断是否有文件
     *
     * @return string null
     */
    public function showMov()
    {
        //        header('Content-Type:text/html; charset=utf-8');
        $username = $_GET["username"];
        $user_file = new DistModller();
        return $user_file->getUserFile($username, 1, 'mov');
    }
    /**
     * 判断是否有文件
     *
     * @return string null
     */
    public function showMus()
    {
        //        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username, 1, 'mus');
    }

    /**
     * 判断是否有文件
     *
     * @return string null
     */
    public function showOth()
    {
        //        header('Content-Type:text/html; charset=utf-8');
        $username=$_GET["username"];
        $user_file=new DistModller();
        return $user_file->getUserFile($username, 1, 'oth');
    }
}
