<?php

if (! function_exists('ModelF')) {
    /**
     * @author cits7v
     * @param  string $model
     * @date   2017/4/17 19:00
     * @return object model的实例
     * @description
     * 获取相应model的实例
     */
    function ModelF($model)
    {
        return App\Http\Models\Factory::produce($model);
    }
}

if (! function_exists('ModuleF')) {
    /**
     * @author cits7v
     * @param  string $module
     * @date   2017/4/17 19:00
     * @return object module的实例
     * @description
     * 获取相应module的实例
     */
    function ModuleF($module)
    {
        return App\Http\Modules\Factory::produce($module);
    }
}