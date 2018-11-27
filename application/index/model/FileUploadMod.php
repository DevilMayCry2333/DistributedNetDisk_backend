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
    public function upload($username,$filename,$filetype,$filesize,$filepath){
        $FileUpload = new FileUploadMod();
        $FileUpload->username = $username;
        $FileUpload->filename = $filename;
        $FileUpload->size = $filesize;
        $FileUpload->type = $filetype;
        $FileUpload->abs_path = $filepath;
        $FileUpload->save();
        echo "SUCEESS";
    }

}