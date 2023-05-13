<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\CategoryBike;
use Illuminate\Http\Request;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Category.index', [
            'categories' => CategoryBike::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        CategoryBike::create($request->all());

        return redirect('/categories');

    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryBike $category)
    {
        return view('Category.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryBike $category)
    {
        return view('Category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = CategoryBike::find($id);
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->priority = $request->get('priority');

        $category->save();

        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = CategoryBike::find($id);
        $category->delete();

        return back();
    }
}
