<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\VariantsRequest;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VariantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product): View
    {
        $variant = new Variant();
        return view('dashboard.variants.create', compact('product', 'variant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(VariantsRequest $request, Product $product)
    {
        $variant = $product->variants()
            ->create($request->only( 'image','sku', 'colour', 'material', 'pattern', 'thickness', 'pattern_width', 'pattern_height', 'popular'));

        if($request->image) {
            $variant->addMedia($request->image)
                ->preservingOriginal()
                ->toMediaCollection();
        }

        return response()->redirectToRoute('dashboard.products.edit', $request->product)->withSuccess('Success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @param Variant $variant
     * @return View
     */
    public function edit(Product $product, Variant $variant): View
    {
        $variant->load('media');

        return view('dashboard.variants.edit', compact('product', 'variant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(VariantsRequest $request, Product $product, Variant $variant)
    {

        $variant->update($request->only( 'image','sku', 'colour', 'material', 'pattern', 'thickness', 'pattern_width', 'pattern_height', 'popular'));

        if($request->image) {
            $variant->addMedia($request->image)
                ->preservingOriginal()
                ->toMediaCollection('variant');
        }

        return response()->redirectToRoute('dashboard.variants.edit', [$product, $variant])->withSuccess('Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Variant $variant)
    {
        $variant->delete();

        return response()->redirectToRoute('dashboard.products.edit', $product)->withSuccess('Variant successfully deleted');
    }
}
