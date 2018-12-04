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

use app\index\model\FileSearchMod;
use think\Controller;
/**
 * Class FileUpload
 * FileUpload控制器
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
class FileSearch extends Controller
{

    /**
     * FileUpload的控制器方法
     *
     * @return string null
     */
    public function search()
    {
        //        return "OK";
        $se_name = $_GET["se_name"];
        $fileSearch = new FileSearchMod();
        $fileSearch->search($se_name);

    }

}