<?php

namespace App\Providers;

use App\Models\Category;
use App\ViewComposers\CategoriesSelectViewComposer;
use App\ViewComposers\NavigationViewComposer;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('layouts.partials._nav', NavigationViewComposer::class);
        view()->composer('dashboard.categories.partials._categories-select', CategoriesSelectViewComposer::class);
        view()->composer('dashboard.products.partials._categories-select', CategoriesSelectViewComposer::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
