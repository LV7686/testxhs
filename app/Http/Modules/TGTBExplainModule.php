<?php
/**
 * Created by CITS7V
 * Date: 2017/4/17
 * Time: 下午3:45
 */
namespace App\Http\Modules;



class TGTBExplainModule extends Module
{
    public function get()
    {
        return ModelF('TGTBExplain')->ex_get();
    }
}