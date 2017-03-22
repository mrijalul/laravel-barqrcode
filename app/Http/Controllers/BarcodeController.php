<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function index()
    {
    	$product = Product::all(['product_name','product_price']);
    	return view('barcode', compact('product'));
    }
}
