<?php
namespace Illuminate\Support\Facades\DB;

    public function getCommissionsCount()
    {
        $user_id = auth()->user()->id; // Assuming you are using authentication and want to get the logged-in user's ID

        $rows = DB::table('payments')
            ->where('user_id', $user_id)
            ->sum('total_commissions');

        return view('total_commissions', ['rows' => $rows]);
    }
