<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Lunar\Models\Brand;
use Lunar\Models\Product;

class HomeController extends Controller
{

    public function home(Request $request, $brandId = null)
    {
        $brands = Brand::all();
        $products = null;
        if($brandId != null) {
            $products = Product::where('brand_id', $brandId)->get();
        }
        if(!$products) {
            $products = Product::all();
        }
        return view('home', compact('brands', 'products'));
    }
}
