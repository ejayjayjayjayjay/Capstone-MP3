<?php
namespace Illuminate\Support\Facades\DB;

 public function getCommissionsCount()
{
    $rows = DB::table('payments')->sum('total_profit');
    return view('total_profit', ['rows' => $rows]);
}