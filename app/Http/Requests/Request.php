<?php
/**
 * Created by CITS7V
 * Date: 2017/4/17
 * Time: 下午3:45
 * Description:
 * request和controller是一一对应的
 * 类中的$rules是用来存放controller中相应方法对参数的要求（key是方法名字）
 * controller相对应的request中，如果需要对参数进行特殊的操作，只需要在相应的request中，创建相应的方法进行操作即可（名字和controller中的方法名是一一对应的）
 */

namespace App\Http\Requests;

class Request
{
    //定义规则
    public $rules = array();

    /**
     * 获取规则
     *
     * @author CITS7V
     * @create 2017/4/19 11:58
     * @param string $path
     * @return array
     * @description
     * 根据$path获取相应的规则数则，如果没有设置返回空数组
     */
    public function getRule($path){
        if(isset($rules[$path]))
            return $rules[$path];
        else
            return [];
    }

}
