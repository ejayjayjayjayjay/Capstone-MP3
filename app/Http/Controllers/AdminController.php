<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard() {

        return view('admin.index');

    }// End Method

    public function AdminLogin() {
        return view('login');

    } // End Method

    public function AdminDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Admin Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/admin/login')->with($notification);
    } //End Method

    public function AdminProfile()
    {
       $id = Auth::user()->id;
       $adminData = User::find($id);
       return view('admin.admin_profile_view', compact('adminData'));
    } //End Method

    public function AdminProfileStore(Request $request)
    {
      $id = Auth::user()->id;
      $data = User::find($id);
      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->address = $request->address;
      @unlink(public_path('upload/admin_images/'.$data->photo));

      if ($request->file('photo')) {
        $file = $request->file('photo');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/admin_images'),$filename);
        $data['photo'] = $filename;
    }
        $data->save();

    $notification = array(
        'message' => 'Admin Profile Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('admin.profile')->with($notification);
    } //End Method

    public function AdminChangePassword() {

        return view('admin.admin_change_password');

    }//End Method

    public function AdminUpdatePassword(Request $request) {

            // Validation
            $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

            // Match The Old Password
            if (!Hash::check($request->old_password, auth::user()->password)){
                return back()->with("error", "Old Password Doesn't Match!!");
            }

            // Update the new password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
            return back()->with("status", "Password Change Successfully");

    }//End Method

        // Agent Management

        public function AllAgent() {

            /* return view('admin.all-agent'); */
            $all = DB::table('users')->get();
            return view('admin.all-agent', compact('all'));
    
        }//End Method

        public function AddAgentIndex() {

            return view('admin.add_agent');
    
        }//End Method

        public function InsertAgent(Request $request) {

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            $insert = User::insert($data);
            if ($insert) {
                $notification = array(
                    'message' => 'Successfully Inserted New User',
                    'alert-type' => 'success'
                );
                return redirect()->route('admin.allagent')->with($notification);
            } else {
                $notification = array(
                    'message' => 'Something is Wrong, Please Try Again!',
                    'alert-type' => 'error'
                );
                return redirect()->route('admin.allagent')->with($notification);
            }
        }//End Method

        public function EditAgent($id) {

            $edit = DB::table('users')->where('id',$id)->first();
            return view('admin.edit_agent',compact('edit'));
    
        }//End Method

        public function UpdateAgent(Request $request,$id) {

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
                'created_at' => now(),
                'updated_at' => now(),
            ];
            
            $update = DB::table('users')
                ->where('id', $id)
                ->update($data);
            
            if ($update) {
                $notification = array(
                    'message' => 'Successfully User Updated',
                    'alert-type' => 'success'
                );
                return redirect()->route('admin.allagent')->with($notification);
            } else {
                $notification = array(
                    'message' => 'Something is Wrong, Please Try Again!',
                    'alert-type' => 'error'
                );
                return redirect()->route('admin.allagent')->with($notification);
            }
    
        }//End Method

        public function DeleteAgent($id) {

            $delete = DB::table('users')->where('id',$id)->delete();
            if ($delete) 
            {
                $notification = array(
                    'message' => 'Successfully Deleted',
                    'alert-type' => 'success'
                );
                return redirect()->route('admin.allagent')->with($notification);
            }
            else 
            {
                $notification = array(
                    'message' => 'Something is Wrong, Please Try Again!',
                    'alert-type' => 'error'
                );
                return redirect()->route('admin.allagent')->with($notification);
            }
    
        }//End Method
}
