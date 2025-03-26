@extends('frontend.layouts.app')
@section('content')
    <main>
        <div class="container mx-auto py-10">
            @if (isset($query))
                <h2 class="text-2xl font-bold mb-4">Search Results for "{{ $query }}"</h2>
                @if ($results->isEmpty())
                    <p class="text-gray-500">No results found.</p>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach ($results as $product)
                            <div class="border p-4 rounded-lg shadow">
                                <img src="{{ asset('storage/' . optional($product->images->first())->image_path) }}"
                                    alt="{{ $product->product_name }}" class="w-full h-48 object-cover rounded">
                                <div class="mt-4">
                                    <a href="{{ route('frontend.all.product-page', $product->id) }}"
                                        class="text-lg font-semibold text-blue-600 block">
                                        {{ $product->product_name }}
                                    </a>
                                    <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                                    @php
                                        $priceToShow = null; // Default to null
                                        if (session()->has('company_user_id')) {
                                            $user = \App\Models\CompanyRegistration::find(session('company_user_id'));
                                            if ($user && $user->price_category_type) {
                                                $priceCategory = 'category_' . $user->price_category_type . '_price';
                                                $priceToShow = $product->$priceCategory ?? $product->price;
                                            }
                                        }
                                    @endphp

                                    @if ($priceToShow && $priceToShow > 0)
                                        <p class="text-gray-900 font-bold mt-2">€{{ number_format($priceToShow, 2) }}</p>
                                    @else
                                        <p class="text-gray-500 font-bold mt-2">
                                            <a href="{{ route('frontend.login') }}"
                                                class="text-blue-600 hover:underline">Please
                                                login to see price</a>
                                        </p>
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endif
        </div>
    </main>
@endsection
