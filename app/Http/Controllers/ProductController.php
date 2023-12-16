<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('products', 
            [
                'products' => $product
            ]
        );
    }

    public function create()
    {
        $store_product_url = "/lab1/public/store_product";

        return view('create_product', 
            [
                'store_product_url' => $store_product_url
            ]
        );        
    }

    public function store(Request $request)
    {
        $form_data = [
            'name' => $request->post('name'),
            'price' => (int)($request->post('price')),
            'description' => $request->post('description')
        ];

        Product::create($form_data);

        return $this->index();
    }
}
