<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(resource_path('views/components'), 'components');

        // Input Components
        Blade::component('components.input.form', 'form');
        Blade::component('components.input.input', 'input');
        Blade::component('components.input.select', 'select');
        Blade::component('components.input.textarea', 'textarea');
    }
}
