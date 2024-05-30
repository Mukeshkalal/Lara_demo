<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'desc' => $request->desc,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'region' => $request->region,
            'postal_code' => $request->postal_code,
        ];

        if ($request->hasFile('product_img')) {
            $file = $request->product_img;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $dir = $file->move('uploads/productsImg/', $filename);
            $data['product_img'] = $dir;
        }
        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Product::find($id);
        $data = [
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'desc' => $request->desc,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'region' => $request->region,
            'postal_code' => $request->postal_code,
        ];

        if ($request->hasFile('product_img')) {
            $file = $request->product_img;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $dir = $file->move('uploads/productsImg/', $filename);
            $data['product_img'] = $dir;
        }

        $update->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
