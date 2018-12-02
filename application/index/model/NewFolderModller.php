<?php
/**
 * Created by PhpStorm.
 * User: SV
 * Date: 2018/12/1
 * Time: 23:36
 */

namespace app\index\model;


use think\Model;

class NewFolderModller extends Model
{
    protected $table = "netdisk_userfile";
    public function newfolder($username,$filename,$filetype,$filesize,$filepath,$modtime,$sort){
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