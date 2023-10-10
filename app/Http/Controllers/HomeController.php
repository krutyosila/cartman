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
    public function __construct()
    {
        $brands = Brand::all();
        View::share('brands', $brands);
    }

    public function home(Request $request)
    {
        if($request->get('brand')) {
            $topBrand = Brand::where('id', $request->get('brand'))->firstOrFail();
            $products = $topBrand->products;
        } else {
            $topBrand = false;
            $products = Product::all();
        }
        return view('main', compact('topBrand','products'));
    }

    public function products(Request $request, $brandID)
    {
        return view('products', compact('topBrand', 'products'));
    }

}
