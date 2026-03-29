<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /products — show search form
    public function index(Request $request)
    {
        $keyword = $request->query('search', '');
        return view('products.index', compact('keyword'));
    }

    // GET /products/create — show create form
    public function create()
    {
        return view('products.create');
    }

    // POST /products — handle form submission
    public function store(Request $request)
    {
        $name  = $request->input('name');
        $price = $request->input('price');
        return view('products.result', compact('name', 'price'));
    }

    // Show edit form
    public function edit($id)
    {
        // In a real app you would fetch from DB; here we simulate:
        $product = ['id' => $id, 'name' => 'Sample Product', 'price' => 99];
        return view('products.edit', compact('product'));
    }

    // Handle PUT update
    public function update(Request $request, $id)
    {
        $name  = $request->input('name');
        $price = $request->input('price');
        return redirect()->route('products.index')
                         ->with('success', 'Product #' . $id . ' updated!');
    }

    // Handle DELETE
    public function destroy($id)
    {
        return redirect()->route('products.index')
                         ->with('success', 'Product #' . $id . ' deleted!');
    }
}
