<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyRegistration;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = CompanyRegistration::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Display the specified user.
     */
    public function show($id)
    {
        $user = CompanyRegistration::findOrFail($id);
        return view('admin.user.show', compact('user'));
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy($id)
    {
        $user = CompanyRegistration::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('message', 'User deleted successfully.');
    }

    public function toggleStatus(CompanyRegistration $user)
    {
        // Toggle the status (0 = inactive, 1 = active)
        $user->is_approve = $user->is_approve == 0 ? 1 : 0;
        $user->save();

        return redirect()->route('users.index')->with('message', 'User status updated successfully!');
    }

    public function assignCustomerID(CompanyRegistration $user)
    {
        return view('users.assign_customer_id', compact('user'));
    }

    public function storeCustomerID(Request $request, CompanyRegistration $user)
    {
        $request->validate([
            'customer_id' => 'required|unique:company_registrations,customer_id,' . $user->id,
        ]);

        $user->customer_id = $request->customer_id;
        $user->save();

        return redirect()->route('users.index')->with('message', 'Customer ID assigned successfully.');
    }
}
