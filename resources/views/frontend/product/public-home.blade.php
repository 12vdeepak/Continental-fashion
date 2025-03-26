@extends('frontend.layouts.app')
@section('content')
    <main>


        <section id="carouselSection" class="flex items-center justify-center h-[70vh] ">
            <div class="relative w-full h-[70vh] overflow-hidden rounded-lg " id="carousel">
                <!-- Background Image -->
                <div class="absolute inset-0 bg-cover bg-top transition-all duration-500" id="bgImage"></div>
                <div class="absolute inset-0 bg-black/50"></div>

                <!-- Content -->
                <div
                    class="relative z-10 flex flex-col justify-end items-end w-full h-full px-6 sm:px-12 md:px-16 lg:px-[100px] py-8 text-white">
                    <div class="contentCarousel w-full sm:max-w-[80%] md:max-w-[50%] lg:max-w-[30vw]">
                        <h2 id="title" class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight">
                            Own Him <span class="bg-white text-red-500 px-2 py-1 rounded-md">Effortless</span> Style
                        </h2>
                        <p id="description" class="mt-4 text-base sm:text-lg md:text-xl w-full">
                            Lorem ipsum dolor sit amet consectetur. At ultrices libero et congue mauris sed nisl.
                        </p>
                        <a href="{{ route('frontend.all.product') }}">
                            <button id="shopBtn"
                                class="mt-6 px-4 sm:px-6 py-2 sm:py-3 bg-[#54114C] hover:bg-purple-700 text-white text-base sm:text-lg font-semibold rounded-lg transition duration-300">
                                Shop Now →
                            </button>
                        </a>
                    </div>
                </div>


                <!-- Navigation Buttons -->
                <button id="prevSlide"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-100 hover:bg-gray-300 text-white p-3 rounded-full h-8 w-8 lg:h-12 lg:w-12 flex items-center  justify-center z-10 ">
                    <img src="{{ asset('frontend/assets/images/productBack.svg') }}" alt="">
                </button>
                <button id="nextSlide"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-100 hover:bg-gray-300 text-white p-3 rounded-full h-8 w-8 lg:h-12 lg:w-12 flex items-center justify-center z-10">
                    <img src="{{ asset('frontend/assets/images/forwardArrow.svg') }}" alt="">
                </button>
            </div>


        </section>



        <br><br>
        <section id="brandLogos" class="w-full py-10 bg-gray-100">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-6">Our Trusted Brands</h2>
                <div class="overflow-hidden relative">
                    <div class="flex gap-10 animate-scroll whitespace-nowrap"
                        onmouseover="this.style.animationPlayState='paused'"
                        onmouseout="this.style.animationPlayState='running'">

                        <!-- Ensure only valid images are included -->
                        <img src="{{ asset('frontend/assets/images/basic_wear.jpg') }}"
                            class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/blank_cheque.png') }}"
                            class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/blue_pacific.jpg') }}"
                            class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/result.png') }}" class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/russell.png') }}" class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/sol.png') }}" class="h-20 max-w-none object-contain">

                        <!-- Repeat images for smooth scrolling -->
                        <img src="{{ asset('frontend/assets/images/basic_wear.jpg') }}"
                            class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/blank_cheque.png') }}"
                            class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/blue_pacific.jpg') }}"
                            class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/result.png') }}" class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/russell.png') }}"
                            class="h-20 max-w-none object-contain">
                        <img src="{{ asset('frontend/assets/images/sol.png') }}" class="h-20 max-w-none object-contain">
                    </div>
                </div>
            </div>


        </section>





        <!-- === Benifits of purchasing from us ==== -->

        <section id="benifits_of_purchasing" class="flex flex-col gap-10 px-4 lg:px-[120px] my-[80px]">

            <div class="heading_description flex flex-col items-center justify-center gap-3">

                <div class="title text-[58px] font-bold text-center leading-[75px] ">Benefits Of Purchasing <br> With Us
                </div>
                <div class="description text-md text-[#6E6E6E] text-center ">Browse our exclusive collections designed to
                    fit every occasion and style. <br> From bold to classic, we’ve got you covered</div>

            </div>
            <div class="image_gallery flex  flex-col justify-between   gap-5 ">
                <div class="sectionSecond flex  justify-between  w-full    gap-5">
                    <div
                        class="highStock relative lg:h-[320px] h-[20vh]  w-1/2 rounded-3xl flex justify-center items-center  items-end ">
                        <div class="absolute rounded-3xl inset-0 custom-gradient"></div>

                        <div class="titleHighStock mb-5 text-[#FFFFFF] text-lg font-bold  text-center lg:text-[32px] z-2">
                            High Stock Availability
                        </div>
                    </div>
                    <div
                        class="highStock relative lg:h-[320px] h-[20vh]  w-1/2 rounded-3xl flex justify-center items-center  items-end ">
                        <div class="absolute rounded-3xl inset-0 custom-gradient"></div>

                        <div class="titleHighStock mb-5 text-[#FFFFFF] text-lg font-bold  text-center lg:text-[32px] z-2">
                            High Stock Availability
                        </div>
                    </div>

                </div>
                <div class="sectionSecond flex  justify-between  w-full    gap-5">
                    <div
                        class="highStock relative lg:h-[320px] h-[20vh]  w-1/2 rounded-3xl flex justify-center items-center  items-end ">
                        <div class="absolute rounded-3xl inset-0 custom-gradient"></div>

                        <div class="titleHighStock mb-5 text-[#FFFFFF] text-lg font-bold  text-center lg:text-[32px] z-2">
                            High Stock Availability
                        </div>
                    </div>
                    <div
                        class="highStock relative lg:h-[320px] h-[20vh]  w-1/2 rounded-3xl flex justify-center items-center  items-end ">
                        <div class="absolute rounded-3xl inset-0 custom-gradient"></div>

                        <div class="titleHighStock mb-5 text-[#FFFFFF] text-lg font-bold  text-center lg:text-[32px] z-2">
                            High Stock Availability
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <!-- ===== Our Popular Category ====== -->

        <section id="popularCategory" class="px-4 lg:px-[120px] my-[80px] w-full ">

            <!-- ============ heading description and button ====================== -->

            <div id="heading_Button" class="flex flex-col justify-between lg:flex-row lg:items-end  ">
                <div class="heading_description flex flex-col  ">
                    <div class="heading_news_offer text-[32px] lg:text-[58px] font-bold  ">
                        Our Popular Category
                    </div>
                    <div class="description_popular_category my-3 text-[16px] text-[#6E6E6E] ">
                        Browse our exclusive collections designed to fit every occasion and style. From bold to classic,
                        we’ve got you covered </div>

                </div>
                <a href="{{ route('frontend.all.product') }}">
                    <div class="viewAllButton">
                        <button class="px-[24px] py-[14px] font-medium bg-[#54114C] text-[#FFFFFF] rounded-2xl ">
                            View All
                        </button>
                    </div>
                </a>
            </div>

            <!-- ============== product showcase ============= -->
            <div id="product_showcase" class="my-[50px] flex flex-col gap-10 w-full">
                @if ($products->isEmpty())
                    <!-- No Products Message -->
                    <div class="text-center text-gray-500 text-lg font-semibold">
                        No products available.
                    </div>
                @else
                    @foreach ($products->chunk(3) as $productRow)
                        <!-- Each Row -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
                            @foreach ($productRow as $product)
                                <a href="{{ route('frontend.all.product-page', $product->id) }}" class="w-full">
                                    <div
                                        class="productCard flex flex-col w-full bg-white rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300">
                                        <div
                                            class="w-full h-[300px] overflow-hidden flex justify-center items-center bg-gray-100 rounded-t-2xl">
                                            @if ($product->images->isNotEmpty())
                                                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}"
                                                    class="w-full h-full object-cover transition-transform duration-300 hover:scale-105 rounded-t-2xl"
                                                    alt="{{ $product->product_name }}">
                                            @else
                                                <img src="{{ asset('frontend/assets/images/default-placeholder.jpg') }}"
                                                    class="w-full h-full object-cover rounded-t-2xl"
                                                    alt="No Image Available">
                                            @endif
                                        </div>

                                        <div class="p-4">
                                            <p class="text-sm text-gray-500">
                                                @if ($product->brands->count() > 0)
                                                    @foreach ($product->brands as $brand)
                                                        {{ $brand->brand_name }}{{ !$loop->last ? ', ' : '' }}
                                                    @endforeach
                                                @else
                                                    No Brand
                                                @endif
                                            </p>

                                            <h3 class="text-[20px] lg:text-[24px] font-medium mb-3">
                                                {{ $product->product_name }}</h3>

                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>





        </section>

        <!-- ===== News And Offer ====== -->
        <section id="newsAndOffer" class="px-4 w-full lg:px-[120px] my-[80px]">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between">
                <div>
                    <h2 class="text-[32px] lg:text-[58px] font-bold">News & Offer</h2>
                    <p class="mt-2 text-[16px] text-gray-600 max-w-2xl">
                        Browse our exclusive collections designed to fit every occasion and style. From bold to classic,
                        we’ve got you covered.
                    </p>
                </div>
            </div>

            <div class="mt-[50px] space-y-10">
                @foreach ($newsOffers->chunk(3) as $chunk)
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($chunk as $newsOffer)
                            <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300">
                                <div class="w-full h-[250px] overflow-hidden rounded-t-2xl bg-gray-200">
                                    <img src="{{ asset('storage/' . $newsOffer->image) }}" alt="{{ $newsOffer->title }}"
                                        class="w-full h-full object-cover object-top transition-transform duration-300 hover:scale-105">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-[20px] sm:text-[22px] lg:text-[24px] font-medium">
                                        {!! Str::words(strip_tags($newsOffer->title), 10, '...') !!}
                                    </h3>
                                    <p class="mt-2 text-[14px] sm:text-[16px] text-gray-600">
                                        {!! Str::words(strip_tags($newsOffer->description), 20, '...') !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>



        <!-- ===== Why people trust us ====  -->

        <section id="benifits_of_purchasing" class="flex flex-col gap-10 px-4 lg:px-[120px] my-[80px]">

            <div class="heading_description flex flex-col items-center justify-center gap-3">

                <div class="title text-[32px] text-[58px] font-bold text-center leading-[75px] ">Why people trust us?</div>
                <div class="description text-md text-[#6E6E6E] text-center ">Browse our exclusive collections designed to
                    fit every occasion and style. <br> From bold to classic, we’ve got you covered</div>

            </div>
            <div class="image_gallery flex justify-between flex-col lg:flex-row   gap-10 ">
                <div class="sectionFirst flex flex-col bg-[#F4F4F4] rounded-3xl p-10 ">
                    <div class="bigRoundSvg mb-2">
                        <img src="{{ asset('frontend/assets/images/rocket.svg') }}" alt="">
                    </div>
                    <div class="headingShort text-[24px] font-medium mt-5 mb-3  ">More than 35 years of experience </div>
                    <div class="content text-[16px] text-[#6E6E6E] w-[90%]">
                        <p>


                            Since 1987 MAPROM has been dealing with importing, manufacturing, and the refinement of
                            promotional textiles. Today we employ around 160 people. In our in-house production with
                            state-of-the-art machinery, we can print or embroider your textiles upon request – starting from
                            just one piece!
                            <br>
                        <p class="mt-5">

                            Do you need large quantities or custom-made bags? No problem – we would be glad to make you an
                            offer.

                        </p>

                        </p>
                    </div>

                </div>
                <div class="sectionSecond flex flex-col bg-[#F4F4F4] rounded-3xl p-10  ">
                    <div class="bigRoundSvg mb-2">
                        <img src="{{ asset('frontend/assets/images/rocket.svg') }}" alt="">
                    </div>
                    <div class="headingShort text-[24px] font-medium mt-5 mb-3  ">More than 35 years of experience </div>
                    <div class="content text-[16px] text-[#6E6E6E] w-[90%]">
                        <p>


                            Since 1987 MAPROM has been dealing with importing, manufacturing, and the refinement of
                            promotional textiles. Today we employ around 160 people. In our in-house production with
                            state-of-the-art machinery, we can print or embroider your textiles upon request – starting from
                            just one piece!
                            <br>
                        <p class="mt-5">

                            Do you need large quantities or custom-made bags? No problem – we would be glad to make you an
                            offer.

                        </p>

                        </p>
                    </div>

                </div>


            </div>

        </section>

    </main>
@endsection
