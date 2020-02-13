<?php
namespace MelisPlatformFrameworkLumenToolCreator\Providers;

use Illuminate\Support\ServiceProvider;
use Zend\Session\Container;

class LumenToolCreatorProvider extends ServiceProvider
{
    /**
     * register zend services
     */
    public function register()
    {
        // get melis tool creator session
        $this->app->singleton('MelisToolCreatorSession' , function(){
            return new Container('melistoolcreator');
        });

    }

    /**
     * load routes file
     */
    public function boot()
    {
        // load routes
        $this->loadRoutesFrom(__DIR__ . "/../../routes/web.php");
    }

}