<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductsObserver
{

    /**
     * @param Model $model
     * @return void
     */
    public function creating(Model $model): void
    {
        $model->slug = Str::slug($model->title ." ". $model->product_range);
    }



}
