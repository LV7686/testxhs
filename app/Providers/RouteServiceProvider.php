<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        try{
            $this->mapWebRoutes($router);

            $this->mapAdminRoutes($router);
        }catch (\Exception $e){
            dump($e);
        }

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $router->group(
            [
                'prefix' => 'web',
                'namespace' => $this->namespace,
                'middleware' => 'validate'
            ],
            function ($router) {
                require app_path('Http/Routes/WebRoutes.php');
            }
        );
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    protected function mapAdminRoutes(Router $router)
    {
        $router->group(
            [
                'prefix' => 'admin',
                'namespace' => $this->namespace,
                'middleware' => 'validate'
            ],
            function ($router) {
                require app_path('Http/Routes/AdminRoutes.php');
            }
        );
    }
}