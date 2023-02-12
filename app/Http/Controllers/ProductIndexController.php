<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\View\View;

class ProductIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Category $category
     * @return View
     */
    public function __invoke(Category $category): View
    {

        if (!$category->live) {
            abort(404);
        }

        $category->load('products.media');

        SEOMeta::setTitle($category->title);

        return view("products.index", compact('category'));
    }
}
