@extends('backend.layouts.app')
@section('title', 'Admin - Show Product')

@section('content')

@section('style')
    <style>
        .error {
            color: red;
        }

        .product-image {
            width: 100px;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }
    </style>
@endsection

<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1>Product Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="content">
        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <th>Product Name:</th>
                    <td>{{ $product->product_name }}</td>
                </tr>
                <tr>
                    <th>Category:</th>
                    <td>{{ $product->category->category_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Sub Category:</th>
                    <td>{{ $product->subCategory->subcategory_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Material:</th>
                    <td>{{ $product->material->material_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Fabric Weight:</th>
                    <td>{{ $product->weight->weight_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Article:</th>
                    <td>{{ $product->article->article_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Sizes:</th>
                    <td>
                        @if ($product->sizes->count() > 0)
                            {{ $product->sizes->pluck('size_name')->implode(', ') }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Colors:</th>
                    <td>
                        @if ($product->colors->count() > 0)
                            @foreach ($product->colors as $color)
                                <span
                                    style="display: inline-block; width: 20px; height: 20px; background-color: {{ $color->color_code }}; border: 1px solid #000; border-radius: 3px; margin-right: 5px;"></span>
                                {{ $color->color_name }}
                            @endforeach
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Brand:</th>
                    <td>
                        @if ($product->brands->count() > 0)
                            {{ $product->brands->pluck('brand_name')->implode(', ') }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Fabric Quality:</th>
                    <td>{{ $product->fabric->fabric_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Product Details:</th>
                    <td>{{ $product->product_details }}</td>
                </tr>
                <tr>
                    <th>Stock:</th>
                    <td>{{ $product->add_stoke }}</td>
                </tr>
                <tr>
                    <th>Wear By:</th>
                    <td>{{ $product->wear->wear_name }}</td>
                </tr>
                <tr>
                    <th>Pack/Poly:</th>
                    <td>{{ $product->pack_poly }}</td>
                </tr>
                <tr>
                    <th>Country:</th>
                    <td>{{ $product->country->country_name }}</td>
                </tr>
                <tr>
                    <th>Sale:</th>
                    <td>
                        <span class="badge {{ $product->sale == 'yes' ? 'badge-success' : 'badge-danger' }}">
                            {{ $product->sale == 'yes' ? 'On Sale' : 'Not on Sale' }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Sale Percentage:</th>
                    <td>{{ $product->sale_percentage }}%</td>
                </tr>
                <tr>
                    <th>Promotional:</th>
                    <td>{{ $product->promotion->promotional_name }}</td>
                </tr>
                <tr>
                    <th>Manufacturer:</th>
                    <td>{{ $product->manufacturer_name }}</td>
                </tr>
                <tr>
                    <th>Remark:</th>
                    <td>{{ $product->remarks }}</td>
                </tr>
                <tr>
                    <th>Prices:</th>
                    <td>
                        <ul>
                            <li>Category 1: ${{ number_format($product->category_1_price, 2) }}</li>
                            <li>Category 2: ${{ number_format($product->category_2_price, 2) }}</li>
                            <li>Category 3: ${{ number_format($product->category_3_price, 2) }}</li>
                            <li>Category 4: ${{ number_format($product->category_4_price, 2) }}</li>
                            <li>Actual Price: ${{ number_format($product->actual_product_price, 2) }}</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Product Images:</th>
                    <td>
                        @if ($product->images->isNotEmpty())
                            <div class="d-flex flex-wrap">
                                @foreach ($product->images as $image)
                                    <img src="{{ asset('storage/' . $image->image_path) }}" class="product-image"
                                        alt="Product Image">
                                @endforeach
                            </div>
                        @else
                            No Images Available
                        @endif
                    </td>
                </tr>
            </table>

            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
        </div>
    </section>
</div>

@endsection
