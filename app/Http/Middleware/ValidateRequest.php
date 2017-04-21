<?php
/**
 * Created by CITS7V
 * Date: 2017/4/17
 * Time: 下午3:45
 */
namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ValidateRequest
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Handle an incoming request.
     *
     * @author CITS7V
     * @create 2017/4/19 11:58
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * @description
     * 根据请求获取相应rules，然后查看是否有相应的rules，然后判断相应的方法是否存在，如果存在执行，如果不存在过
     */
    public function handle($request, Closure $next)
    {
        try{
            //获取controller和path
            $action = $request->route()->getActionName();
            $action_arr = explode('@', $action);

            //如果没有经过action，eg：直接view返回的，这里直接next即可
            if(2 == count($action_arr)){
                $controller = $action_arr[0];
                $path = $action_arr[1];

                //然后根据controller和path创建相应的Request对象，eg:"App\Http\Controllers\TestController" => "App\Http\Requests\TestRequest"
                $request_class = str_replace('Controller', 'Request', $controller);

                if(class_exists($request_class, false)){
                    $request_instance = (new \ReflectionClass($request_class))->newInstance();

                    //进行参数判断，如果参数有问题，直接返回错误
                    $this->validate($request, $request_instance->getRule($path));

                    if(in_array($path, get_class_methods($request_class)))
                        $request_instance->$path($request);
                }
            }

            return $next($request);
        }catch(\Exception $e){
            //根据错误码进行操作
            dump($e);
        }
    }
}
