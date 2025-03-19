<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\CompanyRegistration;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function manageProfile()
    {
        $categories = Category::with('subcategories')->get();
        $user = CompanyRegistration::find(session('company_user_id'));
        return view('frontend.my-profile.my-profile', compact('categories', 'user'));
    }

    public function myOrder()
    {
        $categories = Category::with('subcategories')->get();

        // Get the logged-in user
        $user = CompanyRegistration::find(session('company_user_id'));

        // Fetch orders with related product images filtered by color
        $orders = Order::where('user_id', $user->id)
            ->with([
                'product.images' => function ($query) {
                    $query->orderBy('id', 'asc');
                },
                'product.wear', // Ensure wear (gender) is included
                'size',
                'color',
                'address'
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.my-profile.my-order', compact('categories', 'orders'));
    }




    public function manageAddress()
    {
        $categories = Category::with('subcategories')->get();
        return view('frontend.my-profile.manage-address', compact('categories'));
    }

    public function manageSetting()
    {
        $categories = Category::with('subcategories')->get();
        return view('frontend.my-profile.settings', compact('categories'));
    }

    public function editProfile()
    {
        $categories = Category::with('subcategories')->get();

        // Fetch the authenticated user's data from session
        $user = CompanyRegistration::find(session('company_user_id'));

        return view('frontend.my-profile.edit-profile', compact('categories', 'user'));
    }

    public function updateProfile(Request $request)
    {
        $user = CompanyRegistration::find(session('company_user_id'));

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Validate request
        $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
        ]);

        // Handle image upload
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }

        // Update user details
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->company_name = $request->company_name;
        $user->street = $request->street;
        $user->save();

        return redirect()->back()->with('message', 'Profile updated successfully.');
    }
}
