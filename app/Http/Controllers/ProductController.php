<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1) fungsi data dummy
    protected function dummyProducts()
    {
        return [
            ['id' => 1, 'name' => 'Product 1', 'description' => 'Desc 1', 'price' => 1000],
            ['id' => 2, 'name' => 'Product 2', 'description' => 'Desc 2', 'price' => 2000],
            ['id' => 3, 'name' => 'Product 3', 'description' => 'Desc 3', 'price' => 3000],
            ['id' => 4, 'name' => 'Product 4', 'description' => 'Desc 4', 'price' => 4000],
            ['id' => 5, 'name' => 'Product 5', 'description' => 'Desc 5', 'price' => 5000],
            ['id' => 6, 'name' => 'Product 6', 'description' => 'Desc 6', 'price' => 6000],
            ['id' => 7, 'name' => 'Product 7', 'description' => 'Desc 7', 'price' => 7000],
            ['id' => 8, 'name' => 'Product 8', 'description' => 'Desc 8', 'price' => 8000],
            ['id' => 9, 'name' => 'Product 9', 'description' => 'Desc 9', 'price' => 9000],
            ['id' => 10, 'name' => 'Product 10', 'description' => 'Desc 10', 'price' => 10000],
            ['id' => 11, 'name' => 'Product 11', 'description' => 'Desc 11', 'price' => 11000],
            ['id' => 12, 'name' => 'Product 12', 'description' => 'Desc 12', 'price' => 12000],
            ['id' => 13, 'name' => 'Product 13', 'description' => 'Desc 13', 'price' => 13000],
            ['id' => 14, 'name' => 'Product 14', 'description' => 'Desc 14', 'price' => 14000],
            ['id' => 15, 'name' => 'Product 15', 'description' => 'Desc 15', 'price' => 15000],
            ['id' => 16, 'name' => 'Product 16', 'description' => 'Desc 16', 'price' => 16000],
            ['id' => 17, 'name' => 'Product 17', 'description' => 'Desc 17', 'price' => 17000],
            ['id' => 18, 'name' => 'Product 18', 'description' => 'Desc 18', 'price' => 18000],
            ['id' => 19, 'name' => 'Product 19', 'description' => 'Desc 19', 'price' => 19000],
            ['id' => 20, 'name' => 'Product 20', 'description' => 'Desc 20', 'price' => 20000],
        ];
    }

    // 2) fungsi index 
    public function index()
    {
        $products = $this->dummyProducts();
        return view('products.list', compact('products'));
    }

    // 3) fungsi create
    public function create()
    {
        return view('products.form');
    } 
    
    // 4) fungsi store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);
        return redirect()->route('products')->with('success', 'Product created successfully!');
    }

    // 5) fungsi show
    public function show($id)
    {
        $products = $this->dummyProducts();
        $product = null;
        foreach ($products as $p){
            if ($p['id'] == $id){
                $product = $p;
                break;
            }
        }

        if (!$product){
            abort(404);
        }
        return view('products.show', compact('product'));
    }

    // 6) fungsi form edit
    public function edit($id)
    {
        $products = $this->dummyProducts();

        $product = null;
        foreach ($products as $p){
            if ($p['id'] == $id){
                $product = $p;
                break;
            }
        }

        if (!$product){
            abort(404);
        }
        
        return view('products.form', compact('product'));
    }

    // 7) fungsi update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);
        return redirect()->route('products.show', $id)->with('success', 'Product updated successfully!');
    }

}
