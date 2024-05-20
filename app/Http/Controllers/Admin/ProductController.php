<?php

namespace App\Http\Controllers\Admin;

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
        return view ('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view ('products.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'id' => 'required|max:20',
        'name' => 'required|max:255|string',
        'category' => 'required|max:255|string',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
        'status' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle the image upload
    $imagePath = $request->file('image')->store('images', 'public');

    // Create the product
    Product::create([
        'id' => $validatedData['id'],
        'name' => $validatedData['name'],
        'category' => $validatedData['category'],
        'price' => $validatedData['price'],
        'quantity' => $validatedData['quantity'],
        'status' => $validatedData['status'],
        'image' => $imagePath,
    ]);

    // Redirect with a success message
    return redirect('products/create')->with('status', 'New Product Added');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::all();
        return view ('products.show',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::all();
        return view ('products.edit',['products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255|string',
            'category' => 'required|max:255|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the product by ID
        $products = Product::all();

        // Handle the image upload if there's a new image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Update the product with validated data
        $product->update($validatedData);

        // Redirect with a success message
        return redirect('products/'.$id.'/edit')->with('status', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}
