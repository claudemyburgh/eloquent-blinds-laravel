<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductShow extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Category $category, Product $product): View
    {

        if (!$category->live || !$product->live) {
            abort(404);
        }

        SEOMeta::setTitle($product->title . ' ' . $category->title);

        $product->load('media', 'variants.media');


        return view('products.show', compact('product', 'category'));
    }
}
