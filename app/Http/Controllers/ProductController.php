<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return redirect()
            ->route('products.index')
            ->with('success','New product inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        Product::find($request->id)->update($request->all());

        return redirect()
            ->route('products.index')
            ->with('success','Product data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                ->withSuccess('Product has been deleted successfully.');
    }

    /* To see the soft deleted data. */
    public function trashed(){
        $products = Product::onlyTrashed()->get();
        return view('products.trashed', compact('products'));
    }

    public function restore($id){
        $product = Product::withTrashed()->find($id);
        if($product){
            $product->restore();
            return redirect()->route('products.trashed')->withSuccess('Data restored successfully!');
        }else{
            return redirect()->route('products.trashed')->with('error','Data could not be restored!');
        }
    }

    //force delete
    public function forceDelete(Request $request, $id){
        $product = Product::withTrashed()->find($id);
        if($product){
            $product->forceDelete();
            return redirect()->route('products.trashed')->withSuccess('Data deleted successfully!');
        }else{
            return redirect()->route('products.trashed')->with('error','Data could not be deleted!');
        }
    }

    //redirect to replicate form
    public function viewReplicate(Product $product){
       return view('products.view-replicate', compact('product'));
    }

    //replicate record
    public function replicate(Request $request, $id){
        $validated = $request->validate([
            'product_name' => 'required|unique:products'
        ]);

        $product = Product::find($id);
        $newProduct = $product->replicate();
        $newProduct->product_name = $request->product_name;
        $newProduct->save();
        return redirect()
            ->route('products.index')
            ->with('success','New product inserted successfully with replicated data!');
    }

    public function getTrashedItems(){
        $trashedItems = Product::TrashedItems()->get();
        dd($trashedItems->toArray());
    }
}
