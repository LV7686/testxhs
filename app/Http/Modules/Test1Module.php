<?php
/**
 * Created by CITS7V
 * Date: 2017/4/17
 * Time: 下午3:45
 */
namespace App\Http\Modules;



class Test1Module extends Module
{
    public function test()
    {
        dump(__CLASS__.'-'.__FUNCTION__.'-'.__LINE__);

        ModelF('Test')->test();
    }
}