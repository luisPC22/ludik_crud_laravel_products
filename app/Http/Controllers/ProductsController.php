<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function all()
    {
        $products = Products::all();

        return response()->json($products);
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'string|max:255',
            'description' => 'string|max:255',
            'price' => 'numeric|gt:0',
            'qty_stock' => 'numeric|gt:0',
        ]);

        $product = $request->all();
        $result = Products::create($product);

        if ($result) {
            return json_encode(['status' => true, "message" => "Producto registrado correctamente"]);
        } else {
            return json_encode(['status' => false, "message" => "No se registro el producto"]);
        }
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'description' => 'string|max:255',
            'price' => 'numeric|gt:0',
            'qty_stock' => 'numeric|gt:0',
        ]);

        $product = $request->all();
        $product_find = Products::findOrFail($id);
        $product_find->update($product);

        return json_encode(['status' => true, "message" => "Producto actualizado correctamente"]);
    }

    public function destroy($id) 
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return json_encode(['status' => true, "message" => "Producto eliminado correctamente"]);
    }
}
