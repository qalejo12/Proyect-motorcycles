<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Mail\CreateProduct;
use App\Models\CategoryBike;
use App\Models\ProductBike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Product.index', [
            'bikes' => ProductBike::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Product.create', [
            'categories' => CategoryBike::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {



        $bike = new ProductBike();


        $bike->name = $request->get('name');

        if ($request->hasFile("image")){
            $image = $request->file("image");
            $nameimage = Str::slug($request->get('name')).".".$image->guessExtension();
            $ruta = public_path("img/post/");
            $image->move($ruta,$nameimage);

            $bike->image = $nameimage;
        }

        $bike->price = $request->get('price');
        $bike->status = $request->get('status');
        $bike->description = $request->get('description');
        $bike->category_id = $request->get('category_id');



        $bike->save();

        Mail::to('equinterogiraldo12@gmail.com')
            ->send(new CreateProduct($bike));



        return redirect('/bikes');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductBike $bike)
    {
        return view('Product.show', [
            'bike' => $bike
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductBike $bike)
    {
        return view('Product.edit', [
            'bike' => $bike,
            'categories' => CategoryBike::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductBike $bike)
    {

        $bike->name = $request->get('name');

        if ($request->hasFile("image")){
            $image = $request->file("image");
            $nameimage = Str::slug($request->get('name')).".".$image->guessExtension();
            $ruta = public_path("img/post/");
            $image->move($ruta,$nameimage);

            $bike->image = $nameimage;
        }


        $bike->price = $request->get('price');
        $bike->status = $request->get('status');
        $bike->description = $request->get('description');
        $bike->category_id = $request->get('category_id');

        $bike->save();

        return redirect('/bikes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductBike $bike)
    {
        $bike->delete();

        return back();
    }
}
