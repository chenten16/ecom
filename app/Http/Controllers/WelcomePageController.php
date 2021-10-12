<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WelcomePageController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(6)->get();
        $hotProducts = Product::inRandomOrder()->take(10)->get();
        return view('welcome')->with([
            'products'=> $products,
            'hotProducts' => $hotProducts
        ]);
    }

    public function contact(){
        return view('contact');
    }
}
