<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->supplier_id = $request->supplier_id;
        $product->category_id = $request->category_id;
        $product->quantity_per_unit = $request->quantity_per_unit;
        $product->unit_price = $request->unit_price;
        $product->units_in_stock = $request->units_in_stock;
        $product->units_on_order = 0;
        $product->reorder_level = $request->reorder_level;
        $product->discontinued = 0;

        $request->validate([
            'product_name' => 'required',
            'supplier_id' => 'required',
            'category_id' => 'required',
            'quantity_per_unit' => 'required',
            'unit_price' => 'required',
            'units_in_stock' => 'required',
            'reorder_level' => 'required',
        ]);

        if ($product->save()) {
            return redirect(route('products.index'))->with('success', 'Product berhasil dibuat.');
        }

        return redirect(route('products.index'))->with('error', 'Produk gagal dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return response()->json($product);
        // return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->product_name = $request->product_name;
        $product->supplier_id = $request->supplier_id;
        $product->category_id = $request->category_id;
        $product->quantity_per_unit = $request->quantity_per_unit;
        $product->unit_price = $request->unit_price;
        $product->units_in_stock = $request->units_in_stock;
        $product->reorder_level = $request->reorder_level;
        $product->discontinued = $request->discontinued;

         $request->validate([
            'product_name' => 'required',
            'supplier_id' => 'required',
            'category_id' => 'required',
            'quantity_per_unit' => 'required',
            'unit_price' => 'required',
            'units_in_stock' => 'required',
            'reorder_level' => 'required',
            'discontinued' => 'required',
        ]);

        if ($product->save()) {
            return redirect(route('products.index'))->with('success', 'Product telah diupdate degan data baru.');
        }

        return redirect(route('products.index'))->with('error', 'Produk gagal diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->delete()) {
            return redirect(route('products.index'))->with('success', 'Product telah dihapus.');
        }

        return redirect(route('products.index'))->with('success', 'Produk gagal dihapus.');
    }
}
