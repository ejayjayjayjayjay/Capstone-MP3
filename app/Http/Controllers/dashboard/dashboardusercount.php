<?php
namespace Illuminate\Support\Facades\DB;

public function getUsersCount()
{
    $rows = DB::table('users')->count();
    return view('users.count', ['rows' => $rows]);
}
