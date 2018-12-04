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


use think\Model;
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
class NewFolderModller extends Model
{
    protected $table = "netdisk_userfile";
    /**
     * Login的控制器方法
     *
     * @param string $username 用户名
     * @param string $filename 文件名
     * @param string $filetype 文件的类型
     * @param string $filesize 文件的大小
     * @param string $filepath 文件的路径
     * @param string $modtime  修改日期
     * @param string $sort     用来排序文件
     *
     * @return string null
     */
    public function newfolder($username,$filename,$filetype,$filesize,$filepath,$modtime,$sort)
    {
        $newFolder = new NewFolderModller();
        $newFolder->username = $username;
        $newFolder->filename = $filename;
        $newFolder->size = $filesize;
        $newFolder->filetype = $filetype;
        $newFolder->abs_path = $filepath;
        //        echo $filepath;
        $newFolder->mod_date = $modtime;
        $newFolder->sort=$sort;
        $newFolder->save();
        echo "成功！";
    }
}