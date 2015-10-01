<?php

namespace AVIL13\ModelResorces;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\ResourceRegistrar;

class ModelResorcesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/', 'modelRes');

        $this->publishes([
                __DIR__.'/config/model_res.php' => config_path('model_res.php'),
            ]);

        $this->mergeConfigFrom(__DIR__.'/config/model_res.php', 'model_res');

        $paths = config('model_res');

        ModelResorcesController::setPaths($paths);

        foreach ($paths as $key => $value)
        {
            \Route::resource($key, 'AVIL13\ModelResorces\ModelResorcesController');
        }

        return $this;
    }




    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
