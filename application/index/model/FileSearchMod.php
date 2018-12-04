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


use think\db\exception\DataNotFoundException;
use think\db\exception\ModelNotFoundException;
use think\exception\DbException;
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
class FileSearchMod extends Model
{
    protected $table = "netdisk_userfile";
    /**
     * Login的控制器方法
     *
     * @param string $filename 文件名
     *
     * @return string null
     */
    public function search($filename)
    {
        try {
            $res = $this->where("filename", "like", '%'.$filename.'%')->select();
        } catch (DataNotFoundException $e) {
        } catch (ModelNotFoundException $e) {
        } catch (DbException $e) {
        }
        $decode_res = json_decode($res, true);
        //        var_dump($decode_res);
        $pageNum = count($decode_res, 0);
        $pageId = 1;

        $array = [
            "username" => "awei",
            "pageNum" => $pageNum,
            "pageId" => $pageId,
            "directory"=>[],
        ];
        for ($i = 0 ; $i < count($decode_res, 0); $i++) {
            $array["directory"][$i] = $decode_res[$i];
        }
        echo json_encode($array);
    }

}