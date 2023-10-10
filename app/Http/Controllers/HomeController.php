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

    public function home(Request $request)
    {
        $brands = Brand::all();
        if(!empty($request->get('brandId'))) {
            $brand = Brand::where('id', $request->get('brandId'))->firstOrFail();
            $products = $brand->products;
        } else {
            $products = Product::all();
        }
        return view('home', compact('brands', 'products'));
    }
}
