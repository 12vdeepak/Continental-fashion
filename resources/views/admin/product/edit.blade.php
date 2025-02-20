@extends('backend.layouts.app')
@section('title', 'Admin - Edit Product')

@section('content')

@section('style')
    <style>
        .error {
            color: red;
        }
    </style>
@endsection

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product Details</h3>
                        </div>

                        <!-- Form Start -->
                        <form action="{{ route('products.update', $product->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <!-- Category -->
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select name="category_id"
                                        class="form-control @error('category_id') is-invalid @enderror">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                {{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Sub Category -->
                                <div class="form-group">
                                    <label for="sub_category_id">Sub Category</label>
                                    <select name="sub_category_id"
                                        class="form-control @error('sub_category_id') is-invalid @enderror">
                                        <option value="">Select Sub Category</option>
                                        @foreach ($sub_categories as $sub_category)
                                            <option value="{{ $sub_category->id }}"
                                                {{ $sub_category->id == $product->sub_category_id ? 'selected' : '' }}>
                                                {{ $sub_category->subcategory_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('sub_category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Product Name -->
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name"
                                        class="form-control @error('product_name') is-invalid @enderror"
                                        value="{{ old('product_name', $product->product_name) }}"
                                        placeholder="Enter Product Name">
                                    @error('product_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Product Images -->
                                <div class="form-group">
                                    <label for="product_images">Product Images</label>
                                    <input type="file" name="product_images[]"
                                        class="form-control @error('product_images') is-invalid @enderror" multiple>
                                    @error('product_images')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    @if ($product->images->isNotEmpty())
                                        <div class="mt-2">
                                            <strong>Current Images:</strong>
                                            <div class="d-flex flex-wrap" style="gap: 15px;">
                                                @foreach ($product->images as $image)
                                                    <div
                                                        style="padding: 5px; border: 1px solid #ddd; border-radius: 5px;">
                                                        <img src="{{ asset('storage/' . $image->image_path) }}"
                                                            width="100" alt="Product Image">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>





                                <!-- Product Details -->
                                <div class="form-group">
                                    <label for="product_details">Product Details</label>
                                    <textarea id="product_det" name="product_details" class="form-control @error('product_details') is-invalid @enderror">{{ old('product_details', $product->product_details) }}</textarea>
                                    @error('product_details')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Material -->
                                <div class="form-group">
                                    <label for="material_id">Material</label>
                                    <select name="material_id"
                                        class="form-control @error('material_id') is-invalid @enderror">
                                        <option value="">Select Material</option>
                                        @foreach ($materials as $material)
                                            <option value="{{ $material->id }}"
                                                {{ $material->id == $product->material_id ? 'selected' : '' }}>
                                                {{ $material->material_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('material_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Fabric Weight -->
                                <div class="form-group">
                                    <label for="weight_id">Fabric Weight</label>
                                    <select name="weight_id"
                                        class="form-control @error('weight_id') is-invalid @enderror">
                                        <option value="">Select Fabric Weight</option>
                                        @foreach ($weights as $weight)
                                            <option value="{{ $weight->id }}"
                                                {{ $weight->id == $product->weight_id ? 'selected' : '' }}>
                                                {{ $weight->weight_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('weight_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Article -->
                                <div class="form-group">
                                    <label for="article_id">Article</label>
                                    <select name="article_id"
                                        class="form-control @error('article_id') is-invalid @enderror">
                                        <option value="">Select Article</option>
                                        @foreach ($articles as $article)
                                            <option value="{{ $article->id }}"
                                                {{ $article->id == $product->article_id ? 'selected' : '' }}>
                                                {{ $article->article_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('article_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Size -->
                                <div class="form-group">
                                    <label for="size_ids">Size</label>
                                    <div>
                                        @foreach ($sizes as $size)
                                            <div class="form-check">
                                                <input type="checkbox" name="size_ids[]" value="{{ $size->id }}"
                                                    class="form-check-input @error('size_ids') is-invalid @enderror"
                                                    {{ in_array($size->id, old('size_ids', $product->sizes->pluck('id')->toArray())) ? 'checked' : '' }}>
                                                <label class="form-check-label">{{ $size->size_name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('size_ids')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="color_ids">Color</label>
                                    <div style="display: flex; flex-wrap: wrap; gap: 30px;">
                                        @foreach ($colors as $color)
                                            <div class="form-check d-flex align-items-center" style="gap: 10px;">
                                                <input type="checkbox" name="color_ids[]" value="{{ $color->id }}"
                                                    class="form-check-input @error('color_ids') is-invalid @enderror"
                                                    {{ in_array($color->id, old('color_ids', $product->colors->pluck('id')->toArray())) ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    style="margin-right: 10px;">{{ $color->color_name }}</label>
                                                <span
                                                    style="display: inline-block; width: 20px; height: 20px; background-color: {{ $color->color_code }}; border: 1px solid #000; border-radius: 3px;"></span>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('color_ids')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>




                                <!-- Brand -->
                                <div class="form-group">
                                    <label for="brand_ids">Brand</label>
                                    <div>
                                        @foreach ($brands as $brand)
                                            <div class="form-check">
                                                <input type="checkbox" name="brand_ids[]"
                                                    value="{{ $brand->id }}"
                                                    class="form-check-input @error('brand_ids') is-invalid @enderror"
                                                    {{ in_array($brand->id, old('brand_ids', $product->brands->pluck('id')->toArray())) ? 'checked' : '' }}>
                                                <label class="form-check-label">{{ $brand->brand_name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('brand_ids')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <!-- Fabric Quality -->
                                <div class="form-group">
                                    <label for="fabric_id">Fabric Quality</label>
                                    <select name="fabric_id"
                                        class="form-control @error('fabric_id') is-invalid @enderror">
                                        @foreach ($fabrics as $fabric)
                                            <option value="{{ $fabric->id }}"
                                                {{ old('fabric_id', $product->fabric_id) == $fabric->id ? 'selected' : '' }}>
                                                {{ $fabric->fabric_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('fabric_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                                <!-- Pack Poly -->
                                <div class="form-group">
                                    <label for="pack_poly">Pack Poly</label>
                                    <input type="number" name="pack_poly"
                                        class="form-control @error('pack_poly') is-invalid @enderror"
                                        value="{{ old('pack_poly', $product->pack_poly) }}"
                                        placeholder="Enter Pack Poly">
                                    @error('pack_poly')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Country -->
                                <div class="form-group">
                                    <label for="country_id">Country</label>
                                    <select name="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ $country->id == $product->country_id ? 'selected' : '' }}>
                                                {{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Manufacturer Name -->
                                <div class="form-group">
                                    <label for="manufacturer_name">Manufacturer Name</label>
                                    <input type="text" name="manufacturer_name"
                                        class="form-control @error('manufacturer_name') is-invalid @enderror"
                                        value="{{ old('manufacturer_name', $product->manufacturer_name) }}"
                                        placeholder="Enter Manufacturer Name">
                                    @error('manufacturer_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Add Stock -->
                                <div class="form-group">
                                    <label for="add_stoke">Add Stock</label>
                                    <input type="number" name="add_stoke"
                                        class="form-control @error('add_stoke') is-invalid @enderror"
                                        value="{{ old('add_stoke', $product->add_stoke) }}"
                                        placeholder="Enter Stock">
                                    @error('add_stoke')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Price Fields -->
                                <div class="form-group">
                                    <label for="category_1_price">Category 1 Price</label>
                                    <input type="number" name="category_1_price"
                                        class="form-control @error('category_1_price') is-invalid @enderror"
                                        value="{{ old('category_1_price', $product->category_1_price) }}"
                                        placeholder="Enter Category 1 Price">
                                    @error('category_1_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_2_price">Category 2 Price</label>
                                    <input type="number" name="category_2_price"
                                        class="form-control @error('category_2_price') is-invalid @enderror"
                                        value="{{ old('category_2_price', $product->category_2_price) }}"
                                        placeholder="Enter Category 2 Price">
                                    @error('category_2_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_3_price">Category 3 Price</label>
                                    <input type="number" name="category_3_price"
                                        class="form-control @error('category_3_price') is-invalid @enderror"
                                        value="{{ old('category_3_price', $product->category_3_price) }}"
                                        placeholder="Enter Category 3 Price">
                                    @error('category_3_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category_4_price">Category 4 Price</label>
                                    <input type="number" name="category_4_price"
                                        class="form-control @error('category_4_price') is-invalid @enderror"
                                        value="{{ old('category_4_price', $product->category_4_price) }}"
                                        placeholder="Enter Category 4 Price">
                                    @error('category_4_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Actual Product Price -->
                                <div class="form-group">
                                    <label for="actual_product_price">Actual Product Price</label>
                                    <input type="number" name="actual_product_price"
                                        class="form-control @error('actual_product_price') is-invalid @enderror"
                                        value="{{ old('actual_product_price', $product->actual_product_price) }}"
                                        placeholder="Enter Actual Product Price">
                                    @error('actual_product_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Sale -->
                                <div class="form-group">
                                    <label for="sale">On Sale?</label>
                                    <select name="sale" class="form-control @error('sale') is-invalid @enderror">
                                        <option value="no" {{ $product->sale == 'no' ? 'selected' : '' }}>No
                                        </option>
                                        <option value="yes" {{ $product->sale == 'yes' ? 'selected' : '' }}>Yes
                                        </option>
                                    </select>
                                    @error('sale')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Sale Percentage -->
                                <div class="form-group">
                                    <label for="sale_percentage">Sale Percentage</label>
                                    <input type="number" name="sale_percentage"
                                        class="form-control @error('sale_percentage') is-invalid @enderror"
                                        value="{{ old('sale_percentage', $product->sale_percentage) }}"
                                        placeholder="Enter Sale Percentage">
                                    @error('sale_percentage')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Promotion -->
                                <div class="form-group">
                                    <label for="promotion_id">Promotion</label>
                                    <select name="promotion_id"
                                        class="form-control @error('promotion_id') is-invalid @enderror">
                                        <option value="">Select Promotion</option>
                                        @foreach ($promotions as $promotion)
                                            <option value="{{ $promotion->id }}"
                                                {{ $promotion->id == $product->promotion_id ? 'selected' : '' }}>
                                                {{ $promotion->promotional_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('promotion_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Wear Type -->
                                <div class="form-group">
                                    <label for="wear_id">Wear Type</label>
                                    <select name="wear_id"
                                        class="form-control @error('wear_id') is-invalid @enderror">
                                        <option value="">Select Wear Type</option>
                                        @foreach ($wears as $wear)
                                            <option value="{{ $wear->id }}"
                                                {{ $wear->id == $product->wear_id ? 'selected' : '' }}>
                                                {{ $wear->wear_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('wear_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Remarks -->
                                <div class="form-group">
                                    <label for="remarks">Remarks</label>
                                    <textarea id="remarks" name="remarks" class="form-control @error('remarks') is-invalid @enderror">{{ old('remarks', $product->remarks) }}</textarea>
                                    @error('remarks')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
