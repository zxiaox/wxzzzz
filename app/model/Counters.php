<?php
// +----------------------------------------------------------------------
// | 文件: index.php
// +----------------------------------------------------------------------
// | 功能: mysql数据库表model
// +----------------------------------------------------------------------
// | 时间: 2021-11-15 16:20
// +----------------------------------------------------------------------
// | 作者: rangangwei<gangweiran@tencent.com>
// +----------------------------------------------------------------------

namespace app\model;

use think\Model;

// Counters 定义数据库model
class Counters extends Model
{
    protected $table = 'Counters';
    public $id;
    public $count;
    public $zzzz;
    public $createdAt;
    public $updateAt;
}
