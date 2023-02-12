<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoriesObserver
{

    /**
     * @param Model $model
     * @return void
     */
    public function creating(Model $model): void
    {
        if($model->whereSlug($model->title)->exists()) {
            $model->slug = Str::slug($model->title . "" . Str::uuid());
        }else {
            $model->slug = Str::slug($model->title);
        }

    }

    /**
     * @param Model $model
     * @return void
     */
    public function updating(Model $model): void
    {
        if($model->whereSlug($model->title)->exists()) {
            $model->slug = Str::slug($model->title . "" . Str::uuid());
        }else {
            $model->slug = Str::slug($model->title);
        }
    }


    /**
     * Handle the Category "created" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        //
    }

    /**
     * Handle the Category "updated" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the Category "restored" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
