<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyRegistration;
use App\Models\Order;
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
            'price_category_type' => 'required|in:1,2,3,4',
        ]);

        $user->customer_id = $request->customer_id;
        $user->price_category_type = $request->price_category_type; // Store the selected price category
        $user->save();

        return redirect()->route('users.index')->with('message', 'Customer ID and Price Category assigned successfully.');
    }
    public function showOrders($id)
    {
        // Fetch orders with related data
        $orders = Order::where('user_id', $id)
            ->with(['product', 'size', 'color', 'address'])
            ->get();

        // Check if orders exist
        if ($orders->isEmpty()) {
            return redirect()->back()->with('message', 'No orders found for this user.');
        }

        return view('users.orders', compact('orders'));
    }

    public function editTracking($id)
    {
        $order = Order::findOrFail($id);
        return view('users.tracking_edit', compact('order'));
    }

    public function updateTracking(Request $request, $id)
    {
        $request->validate([
            'courier_partner_name' => 'required|string|max:255',
            'tracking_id' => 'required|string|max:255',
            'link' => 'required|url'
        ]);

        // Update or Add Tracking Info
        Order::where('id', $id)->update([
            'courier_partner_name' => $request->courier_partner_name,
            'tracking_id' => $request->tracking_id,
            'link' => $request->link
        ]);

        return redirect()->route('users.index')->with('message', 'Tracking information updated successfully.');
    }
}
