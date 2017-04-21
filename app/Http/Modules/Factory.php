<?php
/**
 * Created by CITS7V
 * Date: 2017/4/17
 * Time: 下午3:45
 */
namespace App\Http\Modules;


class Factory
{
    /**
     * @author cits7v
     * @date   2017/4/17 19:00
     * @description
     * 用来存储module的实例
     */
    protected static $module_arr = array();


    /**
     * @author cits7v
     * @date   2017/4/17 19:00
     * @param  string $module:相应module的前半部分的名字
     * @return object 相应module实例
     * @description
     */
    public static function produce($module)
    {
        if(!array_key_exists($module, self::$module_arr)){
            //拼接获取类名："App\Http\Models\XXXModel"
            $class = 'App\Http\Modules\\' . $module . 'Module';
            self::$module_arr[$module] = new $class();
        }

        return self::$module_arr[$module];
    }
}
