<?php
namespace Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\DB;

public function getStocksCount()
{
    $products = DB::table('products')->get();
    
    return view('products.count', ['products' => $products]);
}