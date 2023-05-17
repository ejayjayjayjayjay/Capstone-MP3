<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function AgentDashboard() {
        return view('agent.index');
    }//End Method

    public function AgentLogin() {
        return view('agent.agent_login');

    } // End Method

    public function AgentDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/agent/login');
    } //End Method
}
