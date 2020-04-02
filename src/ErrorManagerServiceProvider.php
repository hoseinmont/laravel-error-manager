<?php 
namespace Hoseinmont\ErrorManager;

use Illuminate\Support\ServiceProvider;


class ErrorManagerServicProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('errorManager',function (){
            return new ErrorManager;
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__. '/migrations' => database_path('/migrations')
        ],'migration');
    }
}
