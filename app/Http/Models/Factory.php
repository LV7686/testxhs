<?php
/**
 * Created by CITS7V
 * Date: 2017/4/17
 * Time: 下午3:45
 */
namespace App\Http\Models;


class Factory
{
    /**
     * @author cits7v
     * @date   2017/4/17 19:00
     * @description
     * 用来存储model的实例
     */
    protected static $model_arr = array();


    /**
     * @author cits7v
     * @date   2017/4/17 19:00
     * @param  string $model:相应model的前半部分的名字
     * @return object 相应model实例
     * @description
     * 由于model使用范围比较广，一次请求中可能在不同的controller或者不同的module中使用，因此这里我们通过factory实现"单例"
     */
    public static function produce($model)
    {
        if(!array_key_exists($model, self::$model_arr)){
            //拼接获取类名："App\Http\Models\XXXModel"
            $class = 'App\Http\Models\\' . $model . 'Model';
            self::$model_arr[$model] = new $class();
        }

        return self::$model_arr[$model];
    }
}
