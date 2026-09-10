<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\resources\views\product;

class ProductController extends Controller
{
    // public function show($id , $product , $price)
    // {
    //     $data = ['id'=>$id , 'product'=>$product , 'price'=>$price];
    //     return view('product', $data);
    // }


      public function show($id)
    {
        $product = "Lipstick";
        $price = 499;

        $data = [
            'id' => $id,
            'product' => $product,
            'price' => $price
        ];

        return view('product', $data);
    }
}
