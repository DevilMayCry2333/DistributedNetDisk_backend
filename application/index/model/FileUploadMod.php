<?php
/**
 * Created by PhpStorm.
 * User: youkaiyu
 * Date: 2018-11-27
 * Time: 17:03
 */

namespace app\index\model;


use think\Model;

class FileUploadMod extends Model
{
    protected $table = "netdisk_userfile";
    public function upload($username,$filename,$filetype,$filesize,$filepath,$modtime,$sort){
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