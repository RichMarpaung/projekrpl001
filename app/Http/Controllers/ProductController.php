<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'image|file|max:2048|mimes:png,jpeg,jpg',
            'description' => 'required',
            'fuel' => 'required',
            'transmission' => 'required',
            'seats' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('product/image_path');
        }
        // dd($validated);
        Product::create($validated);
        return redirect(route('admin.product.list'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        // Return ke view 'product.detail' dengan data produk
        return view('detailrental', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
