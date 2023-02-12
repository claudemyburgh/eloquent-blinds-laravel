<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductCreateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $products = Product::with('category')->get();

        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('dashboard.products.create', [
            'product' => new Product()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        $product = Product::create($request->only('category_id', 'title', 'slug', 'description', 'excerpt', 'body', 'live', 'popular', 'price', 'product_range'));
          return response()->redirectToRoute('dashboard.products.edit', $product)->withSuccess('Products successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product): View
    {
        $product->load('variants.media', 'media');

        return view('dashboard.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCreateRequest $request, Product $product)
    {
        $product->load('media');

        $product->update($request->only('category_id', 'title', 'slug', 'description', 'excerpt', 'body', 'live', 'popular', 'price', 'product_range'));

        if($request->image) {
            $product->addMedia($request->image)
                ->preservingOriginal()
                ->toMediaCollection();
        }

        return redirect()->back()->withSuccess('Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         $product->delete();

        return redirect()->route('dashboard.products.index')->withSuccess('Product successfully deleted');
    }
}
