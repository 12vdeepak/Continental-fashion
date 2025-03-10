@extends('frontend.layouts.app')
@section('content')
    <main>


        <div id="pageNavShow " class="flex items-center bg-[#F4F4F4] gap-4 py-4 px-4 lg:px-[120px] ">
            <div class="backIcon">
                <img src="{{ asset('frontend/assets/images/backIcon.svg') }}" alt="">
            </div>
            <div class="homeIcon flex gap-2 items-center font-[500] text-[#6E6E6E] text-[16px]">
                <img src="{{ asset('frontend/assets/images/HomeIcon.svg') }}" alt=""> Home
            </div>
            <div class="line">
                <img src="{{ asset('frontend/assets/images/Line.svg') }}" alt="">
            </div>
            <div class="currentPage text-[#6E6E6E] font-[500] text-[16px] flex items-center gap-2">
                All Products
                <img src="{{ asset('frontend/assets/images/forwardIcon.svg') }}" alt="">
                <span class="text-[#E2001A]">
                    {{ $product->product_name ?? 'Product not available' }}
                </span>
            </div>


        </div>

        <!--Cancellation Page Content -->
        <section id="productPage" class="flex flex-col lg:flex-row gap-20  px-4 lg:px-[120px] py-[80px] ">

            <!-- Container -->
            <!-- Container -->
            <!-- Container -->
            <div class="w-full lg:w-[50%] bg-white">

                <!-- Product Display -->
                <div class="flex flex-col flex-col-reverse gap-10 md:gap-0 md:flex-row md:space-x-8">

                    <div class="flex flex-col md:flex-row md:space-x-8">

                        <!-- Thumbnails (Left Side) -->
                        <div class="flex items-center gap-2 md:flex md:flex-col">
                            @if ($product->images->count() > 0)
                                @foreach ($product->images as $image)
                                    <div class="p-1 border border-gray-200 rounded cursor-pointer"
                                        onclick="changeImage('{{ asset('storage/' . $image->image_path) }}', this)">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image"
                                            class="object-cover w-16 h-16">
                                    </div>
                                @endforeach
                            @else
                                <!-- Show a default placeholder if no images are available -->
                                <div class="p-1 border border-gray-200 rounded">
                                    <img src="{{ asset('frontend/assets/images/default-image.png') }}"
                                        alt="No Image Available" class="object-cover w-16 h-16" />
                                </div>
                            @endif
                        </div>

                        <!-- Main Image with Arrows & Dots -->
                        <div class="flex items-center justify-center arrowImageDots">
                            <!-- Left Arrow -->
                            <div onclick=""
                                class="leftArrow rounded-full lg:bg-[#F4F4F4] flex justify-center items-center p-4 h-[48px] w-[48px] cursor-pointer">
                                <img src="{{ asset('frontend/assets/images/productBack.svg') }}" alt="Previous">
                            </div>

                            <div class="flex flex-col items-center justify-between imageContainerAndDots">
                                <!-- Main Product Image -->
                                <div class="activeProductImage">
                                    <img id="mainImage"
                                        src="{{ $product->images->first() ? asset('storage/' . $product->images->first()->image_path) : asset('frontend/assets/images/default-image.png') }}"
                                        alt="Main Product Image" class="object-cover w-64 h-64">
                                </div>

                                <!-- Thumbnail Dots -->
                                <div class="flex items-center justify-between gap-1 mt-4 dots">
                                    @foreach ($product->images as $index => $image)
                                        <div class="dot h-2 w-2 bg-[#6E6E6E] rounded-full cursor-pointer"
                                            onclick="changeImage('{{ asset('storage/' . $image->image_path) }}', this)">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Right Arrow -->
                            <div onclick=""
                                class="rightArrow rounded-full lg:bg-[#F4F4F4] flex justify-center items-center p-4 h-[48px] w-[48px] cursor-pointer">
                                <img src="{{ asset('frontend/assets/images/productArrowAhead.svg') }}" alt="Next">
                            </div>
                        </div>

                    </div>



                </div>

                <!-- Colors Options -->
                <div class="mt-6">
                    <h3 class="mb-2 text-lg font-semibold">Colors options:</h3>
                    <div class="flex flex-wrap gap-2">
                        @if ($product->colors->count() > 0)
                            @foreach ($product->colors as $color)
                                <button class="w-8 h-8 rounded-full border border-gray-300"
                                    style="background-color: {{ $color->color_code }};">
                                </button>
                            @endforeach
                        @else
                            <p class="text-gray-500">No colors available</p>
                        @endif
                    </div>

                </div>

                <!-- Size Options -->
                <div class="mt-6">
                    <h3 class="mb-2 text-lg font-semibold">Size:</h3>
                    <div class="flex flex-wrap gap-2">
                        @if ($product->sizes->count() > 0)
                            @foreach ($product->sizes as $size)
                                <button class="px-4 py-2 border rounded-md hover:bg-gray-100">
                                    {{ strtoupper($size->size_name) }}
                                </button>
                            @endforeach
                        @else
                            <p class="text-gray-500">No sizes available</p>
                        @endif
                    </div>

                </div>

            </div>



            <div class="productSelection  w-full lg:w-[50%]   flex flex-col  ">
                <div class="category text-[#3CC4D5] text-sm">Shopping Bag</div>
                <div class="productName text-[26px] font-bold mt-2">
                    {{ $product->product_name }}
                </div>
                <div class="productCompany">
                    By <span class="text-[#E2001A]">{{ $product->manufacturer_name }}</span>
                </div>
                <div class="productDetails text-[#6E6E6E] mt-5">
                    <div class="productDetailsHeading text-[16px] font-medium   ">Product Details:</div>
                    <div class="articleNumber text-[14px] mt-2 ">
                        Article number: <span class="text-[#000000]">{{ $product->articles->article_name }}</span>
                    </div>
                    <div class="GSM text-[14px]">
                        GSM: <span class="text-[#000000]">622080</span>

                    </div>
                </div>
                <div class="w-full mt-5 combinationAssociated">
                    <div class="associatedHeading text-[16px] text-[#6E6E6E] font-medium">
                        Associated Combination Products:
                    </div>
                    <div class="flex gap-2 mt-2 combButtons">


                        <div class="combButtonOne ">
                            <button
                                class="flex items-center border border-gray-200 border-solid p-[12px] gap-20 rounded-md ">
                                <div class="flex items-center gap-2 iconAndName">
                                    <div class="icon">
                                        <img src="{{ asset('frontend/assets/images/womenIconCol.svg') }}" alt="">
                                    </div>
                                    <div class="text-sm name">Women</div>
                                </div>
                                <div class="info">
                                    <img src="{{ asset('frontend/assets/images/infoCol.svg') }}" alt="">
                                </div>

                            </button>
                        </div>
                        <div class="combButtonSecond">
                            <button
                                class="flex gap-20 items-center border border-gray-200 border-solid p-[12px] rounded-md ">
                                <div class="flex items-center gap-2 iconAndName">
                                    <div class="icon">
                                        <img src="{{ asset('frontend/assets/images/womenIconCol.svg') }}" alt="">
                                    </div>
                                    <div class="text-sm name">Women</div>
                                </div>
                                <div class="info">
                                    <img src="{{ asset('frontend/assets/images/infoCol.svg') }}" alt="">
                                </div>

                            </button>

                        </div>
                    </div>

                </div>
                @if ($product->promotion)
                    <div class="mt-5 promotionalInfo">
                        <div class="promotionalHeading text-[16px] text-[#6E6E6E] font-medium">
                            Promotional Finishing Information:
                        </div>
                        <div class="flex gap-2 mt-2 buttonSection">
                            <div class="button border border-gray-200 border-solid p-[8px] rounded-md text-sm">
                                {{ $product->promotion->promotional_name }}
                            </div>
                        </div>
                    </div>
                @else
                    <p class="text-gray-500">No promotional finishing information available.</p>
                @endif

                <div class="mt-5 licenseLabel">
                    <div class="labelheading text-[16px] text-[#6E6E6E] font-medium">
                        Labels:
                    </div>
                    <div class="flex items-center gap-1 mt-2 labels">
                        <img src="{{ asset('frontend/assets/images/topseller.jpeg') }}" alt="" class="h-[60px]">
                        <img src="{{ asset('frontend/assets/images/topseller.jpeg') }}" alt="" class="h-[60px]">
                    </div>
                </div>
                <div class="w-full mt-5 mainButton">
                    @if (session()->has('company_user_id'))
                        @php
                            $user = \App\Models\CompanyRegistration::find(session('company_user_id'));
                        @endphp

                        @if ($user)
                            <!-- Show price if user is logged in -->
                            <button class="bg-[#54114C] text-[#ffffff] text-[16px] font-medium w-full p-4 rounded-xl">
                                Price: ${{ $product->price }}
                            </button>
                        @endif
                    @else
                        <!-- Show login message if user is NOT logged in -->
                        <button class="bg-[#54114C] text-[#ffffff] text-[16px] font-medium w-full p-4 rounded-xl">
                            Please login to see the prices
                        </button>
                    @endif
                </div>



            </div>


        </section>


        <section id="productDescriptionAndRest" class=" px-4 lg:px-[120px] py-[80px] bg-[#F4F4F4]">

            <div class="descriptionHeading font-bold text-[24px]  ">
                <button class="border-b-3 border-[#E2001A]">
                    Description

                </button>

            </div>
            <div class="productInformation mt-5 font-bold text-[18px]">
                Product Information: <span class=" text-[#3CC4D5] font-medium">{{ $product->product_name }}</span>

            </div>
            <div class="productInfo mt-2 text-[16px] text-[#4A4A4A]">
                <p>
                    {!! $product->product_details !!}

                </p>

            </div>

            {{--  <div
                class="productInfoTable w-full lg:w-[70%] bg-[#E7E6E7] flex flex-col gap-4 p-6 rounded-xl mt-10 border border-dashed border-gray-500 font-medium ">
                <div class="flex justify-between w-full rowOne ">
                    <div class="columnOneRowOne text-[#6E6E6E] w-1/2">
                        Label:
                    </div>
                    <div class="w-1/2 columnTwoRowOne ">
                        Classic Hooded Sweat
                    </div>
                </div>
                <div class="flex justify-between w-full rowOne">
                    <div class="columnOneRowOne text-[#6E6E6E] w-1/2">
                        Label:
                    </div>
                    <div class="w-1/2 columnTwoRowOne ">
                        Classic Hooded Sweat
                    </div>
                </div>
                <div class="flex justify-between w-full rowOne">
                    <div class="columnOneRowOne text-[#6E6E6E] w-1/2">
                        Label:
                    </div>
                    <div class="w-1/2 columnTwoRowOne ">
                        Classic Hooded Sweat
                    </div>
                </div>
                <div class="flex justify-between w-full rowOne">
                    <div class="columnOneRowOne text-[#6E6E6E] w-1/2">
                        Label:
                    </div>
                    <div class="w-1/2 columnTwoRowOne ">
                        Classic Hooded Sweat
                    </div>
                </div>
            </div>  --}}

            <div class="manufactureInfo mt-7 ">
                <div class="manufactureHeading font-bold text-[18px]">
                    Manufacturer Information
                </div>
                <div class="manufacturerDetails font-medium text-[16px] text-[#6E6E6E] mt-2">
                    <p>
                        {{ $product->manufacturer_name }}
                    </p>
                </div>
            </div>

        </section>









        <!-- final  -->
        <section id="customerAlsoBought" class="px-4 lg:px-[120px] py-[80px]">
            <div class="flex items-center justify-between headingAndButtons">
                <h2 class="headingCus text-2xl lg:text-[48px] font-semibold">Customers Also Bought</h2>
                <div class="flex gap-4 buttons">
                    <button id="prevBtn"
                        class="bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] rounded-full flex justify-center items-center">
                        <img src="{{ asset('frontend/assets/images/productBack.svg') }}" alt=""
                            class="w-1/2 h-1/2">
                    </button>
                    <button id="nextBtn"
                        class="bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] rounded-full flex justify-center items-center">
                        <img src="{{ asset('frontend/assets/images/forwardArrow.svg') }}" alt=""
                            class="w-1/2 h-1/2">
                    </button>
                </div>
            </div>

            <div class="relative mt-10">
                @if ($relatedProducts->count() > 0)
                    <div id="carousel"
                        class="flex gap-10 overflow-x-scroll scroll-smooth snap-x snap-mandatory scrollbar-hide">
                        @foreach ($relatedProducts as $related)
                            <div class="relative product w-full md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start">
                                @if ($related->sale_percentage)
                                    <div
                                        class="absolute top-5 left-2 bg-sky-500 text-white text-sm px-2 lg:px-3 py-1 rounded-md">
                                        {{ $related->sale_percentage }}% offer
                                    </div>
                                @endif
                                <div class="mb-4 productImage">
                                    <img src="{{ asset('storage/' . optional($related->images->first())->image_path) }}"
                                        alt="{{ $related->name }}" class="w-full h-auto object-contain rounded-xl">
                                </div>

                                <div class="flex items-center justify-between mb-3 productSubIcons">
                                    <div class="productLeft text-[#6E6E6E]">{{ $related->sku }}</div>
                                    <div class="flex items-center gap-2 productIconSet">
                                        @if ($related->gender)
                                            <img src="{{ asset('frontend/assets/images/' . $related->gender) }}"
                                                alt="{{ $related->gender }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-1 font-medium productTitle text-md lg:text-xl">{{ $related->product_name }}
                                </div>
                                <div class="productTag mb-2 text-[#E2001A] text-[12px]">
                                    @if ($related->brands->count() > 0)
                                        @foreach ($related->brands as $brand)
                                            {{ $brand->brand_name }}{{ !$loop->last ? ', ' : '' }}
                                        @endforeach
                                    @else
                                        No Brand
                                    @endif
                                </div>

                                <div class="mb-2 productColors">
                                    <div class="flex items-center space-x-2">
                                        <div class="relative flex -space-x-3">
                                            @foreach ($related->colors as $color)
                                                <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8"
                                                    style="background-color: {{ $color->color_code }}"></div>
                                            @endforeach
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 lg:text-md">
                                            {{ count($related->colors) }}+
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-lg text-gray-500">No related products available.</p>
                @endif
            </div>
        </section>


        <!-- your recent views -->
        <!-- final  -->
        <section id="customerAlsoBought" class="px-4 lg:px-[120px] py-4 lg:py-[80px]">
            <div class="flex items-center justify-between headingAndButtons">
                <h2 class="headingCus text-2xl lg:text-[48px] font-semibold">Your Recents</h2>
                <div class="flex gap-4 buttons">
                    <button id="prevBtn2"
                        class="bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center">
                        <img src="{{ asset('frontend/assets/images/productBack.svg') }}" alt=""
                            class="w-1/2 h-1/2">
                    </button>
                    <button id="nextBtn2"
                        class="bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center">
                        <img src="{{ asset('frontend/assets/images/forwardArrow.svg') }}" alt=""
                            class="w-1/2 h-1/2">
                    </button>
                </div>
            </div>

            <!-- Carousel Wrapper -->
            <div class="relative mt-10">
                @if ($recentProducts->count() > 0)
                    <div id="carousel2"
                        class="flex gap-10 overflow-x-scroll scroll-smooth snap-x snap-mandatory scrollbar-hide">

                        @foreach ($recentProducts as $product)
                            <div class="relative product w-full md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start">
                                @if ($product->sale_percentage)
                                    <div
                                        class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular px-2 text-[12px] lg:px-3 py-1 rounded-md">
                                        {{ $product->sale_percentage }}% offer
                                    </div>
                                @endif
                                <div class="mb-4 productImage">
                                    <img src="{{ asset('storage/' . optional($product->images->first())->image_path) }}"
                                        alt="{{ $product->name }}" class="w-full h-auto object-contain rounded-xl">
                                </div>
                                <div class="flex items-center justify-between mb-3 productSubIcons">
                                    <div class="productLeft text-[#6E6E6E]">{{ $product->code }}</div>
                                    {{--  <div class="flex items-center justify-between gap-2 productIconSet">
                                        @if ($product->category)
                                            <span
                                                class="text-gray-700 font-medium">{{ $product->category->category_name }}</span>
                                        @endif
                                    </div>  --}}
                                </div>
                                <div class="mb-1 font-medium productTitle text-md lg:text-xl">{{ $product->product_name }}

                                </div>

                                <div class="productTag mb-2 text-[#E2001A] text-[12px]">
                                    @if ($product->brands->count() > 0)
                                        @foreach ($product->brands as $brand)
                                            {{ $brand->brand_name }}{{ !$loop->last ? ', ' : '' }}
                                        @endforeach
                                    @else
                                        No Brand
                                    @endif
                                </div>
                                <div class="mb-2 productColors">
                                    <div class="flex items-center space-x-2">
                                        <div class="relative flex -space-x-3">
                                            @foreach ($product->colors as $color)
                                                <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8"
                                                    style="background-color: {{ $color->color_code }};"></div>
                                            @endforeach
                                        </div>
                                        <span class="text-sm font-medium text-gray-500 lg:text-md">
                                            {{ count($product->colors) }}+
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @else
                    <p class="text-center text-lg text-gray-500">No recent products available.</p>
                @endif
            </div>
        </section>


    </main>
@endsection
