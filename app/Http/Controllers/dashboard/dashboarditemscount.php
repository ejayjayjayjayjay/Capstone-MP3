<?php
namespace Illuminate\Support\Facades\DB;

public function getProductsCount()
{
    $rows = DB::table('products')->count();
    return view('products'.count', ['rows' => $rows]);
}
