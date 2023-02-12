<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriesControllers extends Controller
{


    /**
     * @param Category $categories
     * @return View
     */
    public function index(Category $categories): View
    {
        return view('dashboard.categories.index', [
            'categories' => $categories->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('dashboard.categories.create', [
            'category' => new Category()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $category = Category::create($request->only('title', 'parent_id', 'excerpt', 'description', 'body', 'popular', 'live'));

        return response()->redirectToRoute('dashboard.categories.edit', $category)->withSuccess('Category successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return View
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return View
     */
    public function edit(Category $category): View
    {
        return view('dashboard.categories.edit', compact('category'));
    }


    public function update(CategoryCreateRequest $request, Category $category)
    {
        $category->load('media');

        $category->update($request->only('title', 'parent_id', 'excerpt', 'description', 'body', 'popular', 'live'));

        if($request->image) {
               $category->addMedia($request->image)
                   ->preservingOriginal()
                   ->toMediaCollection();
        }

        return redirect()->back()->withSuccess('Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        $category->delete();

        return redirect()->route('dashboard.categories.index')->withSuccess('Category successfully deleted');
    }
}
