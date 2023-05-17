<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function AgentProfile()
    {
       $id = Auth::user()->id;
       $agentData = User::find($id);
       return view('agent.agent_profile_view', compact('agentData'));
    } //End Method

    public function AgentProfileStore(Request $request)
    {
      $id = Auth::user()->id;
      $data = User::find($id);
      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->address = $request->address;
      $data->agent_join = $request->agent_join;
      $data->agent_short_info = $request->agent_short_info;

      @unlink(public_path('upload/admin_images/'.$data->photo));

      if ($request->file('photo')) {
        $file = $request->file('photo');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/agent_images'),$filename);
        $data['photo'] = $filename;
    }
        $data->save();

    $notification = array(
        'message' => 'Agent Profile Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('agent.profile')->with($notification);
    } //End Method
}
