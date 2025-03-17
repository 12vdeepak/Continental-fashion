<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\CartItem;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
        try {
            $companyUserId = session('company_user_id');

            if (!$companyUserId) {
                return redirect()->back()->with('error', 'User session expired. Please log in again.');
            }

            $selectedAddressId = $request->address_id ?? session('selected_address_id');
            $selectedAddress = Address::find($selectedAddressId);

            if (!$selectedAddress) {
                return redirect()->back()->with('error', 'Please select a valid address.');
            }

            $cartItems = CartItem::with(['product', 'color', 'size'])
                ->where('user_id', $companyUserId)
                ->get();

            if ($cartItems->isEmpty()) {
                return redirect()->back()->with('error', 'Your cart is empty.');
            }

            $totalAmount = $cartItems->sum(fn($item) => $item->price * $item->quantity);
            $vat = $totalAmount * 0.19;
            $finalAmount = $totalAmount + $vat;

            $orderDetails = [];

            foreach ($cartItems as $item) {
                $order = Order::create([
                    'user_id' => $companyUserId,
                    'address_id' => $selectedAddress->id,
                    'product_id' => $item->product_id,
                    'color_id' => $item->color_id,
                    'size_id' => $item->size_id,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    'amount' => $item->price * $item->quantity,
                    'status' => 'pending',
                ]);

                $orderDetails[] = [
                    'order_id' => $order->id,
                    'product_name' => $item->product->name ?? 'N/A',
                    'color' => $item->color->color_code ?? 'N/A',
                    'size' => $item->size->size_name ?? 'N/A',
                    'quantity' => $item->quantity,
                    'unit_price' => $item->price,
                    'total_price' => $item->price * $item->quantity,
                ];
            }

            CartItem::where('user_id', $companyUserId)->delete();

            // ✅ Use flash() so session data is only available for the next request
            session()->flash('orderDetails', $orderDetails);
            session()->flash('message', 'Order placed successfully!');

            return redirect()->route('frontend.confirm-order'); // Redirect to confirmation page
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
