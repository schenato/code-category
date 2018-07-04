<?php

namespace CodePress\CodeCategory\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Description of CodeCategoryServiceProvider
 *
 * @author gabriel
 */
class CodeCategoryServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([__DIR__ . '/../../resources/migrations/' => base_path('database/migrations')], 'migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views/codecategory', 'codecategory');
        require_once __DIR__ . '/../routes.php';
    }

    public function register()
    {
        
    }

}
