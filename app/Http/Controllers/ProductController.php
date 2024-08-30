<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
         // Número de productos por página
         $perPage = 3;

         // Obtén los productos paginados
         $products = Product::paginate($perPage);
 
         // Pasa los productos a la vista
         return view('products.index', compact('products'));
    }
    
    public function show($id)
    {
         // Buscar el producto por su ID. Si no se encuentra, se lanzará una excepción 404.
    $product = Product::findOrFail($id);

    // Pasar el producto a la vista 'products.show'
    return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create', ['product' => new Product]);
    }

    public function store(SaveProductRequest $request)
    {
        Product::create($request->validated());

        return to_route('products.index')->with('status', 'Product created!');
    }

    public function edit($id)
    {
        // Encuentra el producto por su ID
        $product = Product::findOrFail($id);
        
        return view('products.edit', ['product' => $product]);
    }

    public function update(SaveProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return to_route('products.show', $product)->with('status', 'Product  updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('products.index')->with('status', 'Product deleted!');
    }
}
