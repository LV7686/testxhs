<?php
/**
 * Created by CITS7V
 * Date: 2017/4/17
 * Time: 下午3:45
 */
namespace App\Http\Requests;
use Illuminate\Http\Request as HRequest;

class TestRequest extends Request
{
    //定义规则
    public $rules = array(
        'test' => [
            'title' => 'required',
            'body' => 'required'
        ]
    );

    /**
     * 测试
     *
     * @author CITS7V
     * @create 2017/4/19 11:58
     * @description
     * 测试
     */
    public function test(HRequest $request){
        dump($request);
    }
}
