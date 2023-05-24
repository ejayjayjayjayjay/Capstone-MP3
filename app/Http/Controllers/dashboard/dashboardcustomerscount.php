<?php
namespace Illuminate\Support\Facades\DB;

public function getCustomersCount()
{
    $rows = DB::table('customers')->count();
    return view('customers.count', ['rows' => $rows]);
}
