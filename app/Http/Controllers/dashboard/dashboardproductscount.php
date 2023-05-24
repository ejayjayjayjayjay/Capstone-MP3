<?php
namespace Illuminate\Support\Facades\DB;

public function getOrdersCount()
{
    $rows = DB::table('orders')->count();
    return view('orders.count', ['rows' => $rows]);
}
