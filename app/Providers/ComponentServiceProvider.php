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
        // Table Components
        Blade::component('components.table.table', 'table');
        Blade::component('components.table.partials.tr', 'table-tr');
        Blade::component('components.table.partials.td', 'table-td');
        Blade::component('components.table.partials.th', 'table-th');
        Blade::component('components.table.partials.thead', 'table-thead');
        Blade::component('components.table.partials.tbody', 'table-tbody');
        Blade::component('components.table.partials.action', 'table-action');
    }
}
