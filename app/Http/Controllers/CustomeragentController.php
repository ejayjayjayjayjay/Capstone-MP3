<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CustomerStoreRequest;

class CustomeragentController extends Controller
{
     public function index()
    {
        if (request()->wantsJson()) {
            return response(
                Customer::all()
            );
        }
        $customers = Customer::latest()->paginate(10);
        return view('customeragent.index')->with('customers', $customers);
    }

    public function create()
    {
        return view('customeragent.create');
    }

    public function store(CustomerStoreRequest $request)
    {
        $avatar_path = '';

        if ($request->hasFile('avatar')) {
            $avatar_path = $request->file('avatar')->store('customers', 'public');
        }

        $customer = Customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'avatar' => $avatar_path,
            'user_id' => $request->user()->id,
        ]);

        if (!$customer) {
            return redirect()->back()->with('error', 'Sorry, Something went wrong while creating customer.');
        }
        return redirect()->route('customers.index')->with('success', 'Success, New customer has been added successfully!');
    }

    public function show(Customer $customer)
    {
    }

    public function edit(Customer $customer)
    {
        return view('customeragent.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if ($request->hasFile('avatar')) {
            // Delete old avatar
            if ($customer->avatar) {
                Storage::delete($customer->avatar);
            }
            // Store avatar
            $avatar_path = $request->file('avatar')->store('customers', 'public');
            // Save to Database
            $customer->avatar = $avatar_path;
        }

        if (!$customer->save()) {
            return redirect()->back()->with('error', 'Sorry, Something went wrong while updating the customer.');
        }
        return redirect()->route('customeragent.index')->with('success', 'Success, The customer has been updated.');
    }

    /**
     * Summary of DeleteCustomer
     * @param mixed $id
     * @return RedirectResponse
     */
    public function DeleteCustomer($id) {

            $delete = DB::table('customers')->where('id',$id)->delete();
            if ($delete)
            {
                $notification = array(
                    'message' => 'Successfully Deleted',
                    'alert-type' => 'success'
                );
                return redirect()->route('customeragent.index')->with($notification);
            }
            else
            {
                $notification = array(
                    'message' => 'Something is Wrong, Please Try Again!',
                    'alert-type' => 'error'
                );
                return redirect()->route('customeragent.index')->with($notification);
            }

        }//End Method

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
