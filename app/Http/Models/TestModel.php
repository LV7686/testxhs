<?php
/**
 * Created by CITS7V
 * Date: 2017/4/17
 * Time: 下午3:45
 */
namespace App\Http\Models;

use DB;

class TestModel extends ExModel
{
    protected $table = 'admin';

    public $timestamps = false;


    /**
     * @author cits7v
     * @date   2017/4/17 19:00
     * @param  string $model:相应model的前半部分的名字
     * @return object 相应model实例
     * @description
     * 由于model使用范围比较广，一次请求中可能在不同的controller或者不同的module中使用，因此这里我们通过factory实现"单例"
     */
    public static function test($model='')
    {
        dump(__CLASS__.'-'.__FUNCTION__.'-'.__LINE__);
    }



    public static function get($name, $passwd)
    {
        $return = Admin::where('name', '=', $name)
            ->where('passwd', '=', $passwd)
            ->first();

        return $return;
    }
}
