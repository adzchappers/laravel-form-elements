<?php

namespace AdzChappers\LaravelFormElements;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/form-elements.php' => config_path('form-elements.php')
            ], 'config');

        // Load in the component form views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ac-lfe-forms');

        // Create Blade components
        foreach (config('form-elements.components') as $k => $v) {
            Blade::component($k, $v['class']);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/form-elements.php',
            'form-elements'
        );
    }
}
