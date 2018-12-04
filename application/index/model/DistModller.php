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
header('Content-Type:text/html; charset=utf-8');
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
class DistModller extends Model
{

    protected $table = "netdisk_userfile";
    /**
     * Login的控制器方法
     *
     * @param string $array              要进行操作的字符串
     * @param string $function           要进行什么操作
     * @param string $apply_to_keys_also 对键是否进行操作
     *
     * @return string null
     */
    public function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
    {
        static $recursive_counter = 0;
        if (++$recursive_counter > 1000) {
            die('possible deep recursion attack');
        }
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $this->arrayRecursive($array[$key], $function, $apply_to_keys_also);
            } else {
                $array[$key] = $function($value);
            }
            if ($apply_to_keys_also && is_string($key)) {
                $new_key = $function($key);
                if ($new_key != $key) {
                    $array[$new_key] = $array[$key];
                    unset($array[$key]);
                }
            }
        }
        $recursive_counter--;
    }
    /**
     * Login的控制器方法
     *
     * @param string $array 要进行json化的字符串
     *
     * @return string null
     */
    public function json1($array)
    {
        $this->arrayRecursive($array, 'urlencode', true);
        $json = json_encode($array);
        return urldecode($json);
    }
    /**
     * Login的控制器方法
     *
     * @param string $username  用户名
     * @param string $pageid    当前的页数
     * @param string $file_type 文件类型
     * @param string $curdir    当前的目录
     *
     * @return string null
     */
    public function getUserFile($username,$pageid,$file_type,$curdir)
    {
        header("Content-Type: text/html;charset=utf-8");
        $this->execute('SET NAMES utf8');
        if ($curdir=="") {
            $filepath="DistributedNetDisk/public/upload/". $username. "/";

        } else {
            $filepath="DistributedNetDisk/public/upload/". $username. "/". $curdir."/";
            //  var_dump($filepath);

        }
        if ($file_type!=null) {
            $select_res=$this->where('username', $username)->order('sort desc')->select();
        } else {
            $select_res=$this->where('username', $username)->where('abs_path', '=', $filepath)->order('sort desc')->select();
            //var_dump($select_res);

        }

        //var_dump($select_res);

        $page_num=$this->page($select_res);


        if ($page_num==1) {
            $page_index=0;
            $page_file=count($select_res);

        } else if ($pageid==$page_num) {
            $page_index=$pageid*10;
            $page_file=count($select_res);
        } else {
            $page_index=($pageid-1)*10;
            $page_file=$page_index+10;
        }

        $res_array=array();
        $user_json=array();

        $res_array['username']=$username;
        $res_array['pageNum']=$page_num;
        $res_array['pageid']=$pageid;
        $res_array['curdir']=$curdir;
        //

        for ($i=0,$page_index;$page_index<$page_file;$page_index++) {

            $file_info_json=array();
            $file_info_json["name"]=$select_res[$page_index]->filename;

            $file_info_json["extension"]=$select_res[$page_index]->ext;
            $file_info_json["date"]=$select_res[$page_index]->mod_date;
            $file_info_json["type"]=$select_res[$page_index]->filetype;

            $file_info_json["id"]=$select_res[$page_index]->id;
            $file_info_json["size"]=$select_res[$page_index]->size;
            $file_info_json["crc"]=$select_res[$page_index]->crc;
            //$file_info_json=json_encode($file_info_json);

            $user_json[$i]=$file_info_json;
            $i=$i+1;

        }

            $res_array['directory']=$user_json;



            //var_dump($res_array);
            return $res_array;

    }
    /**
     * Login的控制器方法
     *
     * @param string $array 进行分页的字符串
     * @return string null
     */
    public function page($array)
    {
        $page_num=count($array);
        if ($page_num<=10) {
            return 1;
        } else {
            if($page_num%10==0) {
                return $page_num/10;
            } else {
                return (int)($page_num/10+1);
            }
        }
    }

}