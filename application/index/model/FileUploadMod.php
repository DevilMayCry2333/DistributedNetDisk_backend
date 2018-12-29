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
class FileUploadMod extends Model
{
    protected $table = "netdisk_userfile";
    /**
     * Login的控制器方法
     *
     * @param string $username 用户名
     * @param string $filename 文件名
     * @param string $filetype 文件类型
     * @param string $filesize 文件大小
     * @param string $filepath 文件路径
     * @param string $modtime  修改日期
     * @param string $sort     用来实现文件的排序
     *
     * @return string null
     */
    public function upload($username,$filename,$filetype,$filesize,$filepath,$modtime,$sort)
    {
        $FileUpload = new FileUploadMod();
        $FileUpload->username = $username;
        $FileUpload->filename = $filename;
        $FileUpload->size = $filesize;
        $FileUpload->filetype = $filetype;
        $FileUpload->abs_path = $filepath;
        $FileUpload->mod_date = $modtime;
        $FileUpload->sort=$sort;
        $FileUpload->save();
        echo "SUCEESS";
    }

}