<?php

namespace App\Providers;

use App\Models\Category;
use App\Observers\CategoriesObserver;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Category::observe(CategoriesObserver::class);
    }
}
