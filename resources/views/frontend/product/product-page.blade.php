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
                    Cotton Bag
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

                    <!-- Thumbnails (Left) -->
                    <div class="flex items-center gap-2 md:flex md:flex-col">
                        <div class="p-1 border-2 border-red-500 rounded">
                            <img src="{{ asset('frontend/assets/images/blueHoodie.png')}}" alt="Blue Hoodie" class="object-cover w-16 h-16" />
                        </div>
                        <div class="p-1 border border-gray-200 rounded">
                            <img src="{{ asset('frontend/assets/images/blueHoodie.png')}}" alt="White Hoodie" class="object-cover w-16 h-16" />
                        </div>
                        <div class="p-1 border border-gray-200 rounded">
                            <img src="{{ asset('frontend/assets/images/blueHoodie.png')}}" alt="Black Hoodie" class="object-cover w-16 h-16" />
                        </div>
                        <div class="p-1 border border-gray-200 rounded">
                            <img src="{{ asset('frontend/assets/images/blueHoodie.png')}}" alt="Yellow Hoodie" class="object-cover w-16 h-16" />
                        </div>
                        <div class="p-1 border border-gray-200 rounded">
                            <img src="{{ asset('frontend/assets/images/blueHoodie.png')}}" alt="Yellow Hoodie" class="object-cover w-16 h-16" />
                        </div>

                    </div>

                    <!-- Main Image Container with Arrows & Dots -->

                    <div class="flex items-center justify-center arrowImageDots ">
                        <div
                            class="leftArrow  rounded-full lg:bg-[#F4F4F4] flex justify-center items-center p-4 h-[48px] w-[48px] ">
                            <img src="{{ asset('frontend/assets/images/productBack.svg')}}" alt="">
                        </div>
                        <div class="flex flex-col items-center justify-between imageContainerAndDots">
                            <div class="activeProductImage ">
                                <img src="{{ asset('frontend/assets/images/blueHoodie.png')}}" alt="" class="">
                            </div>
                            <div class="flex items-center justify-between gap-1 mt-4 dots">
                                <div class="dot h-2 w-2 bg-[#E2001A] rounded-full"></div>
                                <div class="dot h-2 w-2 bg-[#6E6E6E] rounded-full"></div>
                                <div class="dot h-2 w-2 bg-[#6E6E6E] rounded-full"></div>
                                <div class="dot h-2 w-2 bg-[#6E6E6E] rounded-full"></div>
                                <div class="dot h-2 w-2 bg-[#6E6E6E] rounded-full"></div>
                            </div>
                        </div>
                        <div
                            class="rightArrow rounded-full lg:bg-[#F4F4F4] flex justify-center items-center p-4 h-[48px] w-[48px] ">
                            <img src="{{ asset('frontend/assets/images/productArrowAhead.svg')}}" alt="">
                        </div>
                    </div>


                </div>

                <!-- Colors Options -->
                <div class="mt-6">
                    <h3 class="mb-2 text-lg font-semibold">Colors options:</h3>
                    <div class="flex flex-wrap gap-2">
                        <button class="w-8 h-8 bg-red-500 rounded-full ring-2 ring-red-600"></button>
                        <button class="w-8 h-8 bg-blue-400 rounded-full"></button>
                        <button class="w-8 h-8 bg-yellow-300 rounded-full"></button>
                        <button class="w-8 h-8 bg-black rounded-full"></button>
                        <button class="w-8 h-8 bg-white border border-gray-300 rounded-full"></button>
                    </div>
                </div>

                <!-- Size Options -->
                <div class="mt-6">
                    <h3 class="mb-2 text-lg font-semibold">Size:</h3>
                    <div class="flex flex-wrap gap-2">
                        <button class="px-4 py-2 border rounded-md hover:bg-gray-100">XS</button>
                        <button class="px-4 py-2 border rounded-md hover:bg-gray-100">S</button>
                        <button class="px-4 py-2 border rounded-md hover:bg-gray-100">M</button>
                        <button class="px-4 py-2 border rounded-md hover:bg-gray-100">L</button>
                        <button class="px-4 py-2 border rounded-md hover:bg-gray-100">XL</button>
                        <button class="px-4 py-2 border rounded-md hover:bg-gray-100">XXL</button>
                        <button class="px-4 py-2 border rounded-md hover:bg-gray-100">XXXL</button>
                    </div>
                </div>

            </div>



            <div class="productSelection  w-full lg:w-[50%]   flex flex-col  ">
                <div class="category text-[#3CC4D5] text-sm">Shopping Bag</div>
                <div class="productName text-[26px] font-bold mt-2">
                    Classic Hodded Sweat
                </div>
                <div class="productCompany">
                    By <span class="text-[#E2001A]">Fruit of the loom </span>
                </div>
                <div class="productDetails text-[#6E6E6E] mt-5">
                    <div class="productDetailsHeading text-[16px] font-medium   ">Product Details:</div>
                    <div class="articleNumber text-[14px] mt-2 ">
                        Article number: <span class="text-[#000000]">622080</span>
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
                                        <img src="{{ asset('frontend/assets/images/womenIconCol.svg')}}" alt="">
                                    </div>
                                    <div class="text-sm name">Women</div>
                                </div>
                                <div class="info">
                                    <img src="{{ asset('frontend/assets/images/infoCol.svg')}}" alt="">
                                </div>

                            </button>
                        </div>
                        <div class="combButtonSecond">
                            <button
                                class="flex gap-20 items-center border border-gray-200 border-solid p-[12px] rounded-md ">
                                <div class="flex items-center gap-2 iconAndName">
                                    <div class="icon">
                                        <img src="{{ asset('frontend/assets/images/womenIconCol.svg')}}" alt="">
                                    </div>
                                    <div class="text-sm name">Women</div>
                                </div>
                                <div class="info">
                                    <img src="{{ asset('frontend/assets/images/infoCol.svg')}}" alt="">
                                </div>

                            </button>

                        </div>
                    </div>

                </div>
                <div class="mt-5 promotionalInfo">
                    <div class="promotionalHeading text-[16px] text-[#6E6E6E] font-medium">
                        Promotional Finishing Information:
                    </div>
                    <div class="flex gap-2 mt-2 buttonSection">
                        <div class="button  border border-gray-200 border-solid p-[8px] rounded-md text-sm ">Digital Print
                        </div>
                        <div class="button  border border-gray-200 border-solid p-[8px] rounded-md text-sm">Digital Print
                        </div>
                        <div class="button  border border-gray-200 border-solid p-[8px] rounded-md text-sm">Digital Print
                        </div>
                        <div class="button  border border-gray-200 border-solid p-[8px] rounded-md text-sm">Digital Print
                        </div>
                    </div>
                </div>
                <div class="mt-5 licenseLabel">
                    <div class="labelheading text-[16px] text-[#6E6E6E] font-medium">
                        Labels:
                    </div>
                    <div class="flex items-center gap-1 mt-2 labels">
                        <img src="{{ asset('frontend/assets/images/topseller.jpeg')}}" alt="" class="h-[60px]">
                        <img src="{{ asset('frontend/assets/images/topseller.jpeg')}}" alt="" class="h-[60px]">
                    </div>
                </div>
                <div class="w-full mt-5 mainButton ">
                    <button class="bg-[#54114C] text-[#ffffff] text-[16px] font-medium  w-full p-4 rounded-xl">Please login
                        to see
                        the prices</button>
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
                Product Information: <span class=" text-[#3CC4D5] font-medium">Classic hooded sweat</span>

            </div>
            <div class="productInfo mt-2 text-[16px] text-[#4A4A4A]">
                <p>
                    Double fabric hood, self-colored flat draw cord, front pouch pocket, waist and cuff in cotton/Lycra® rib
                </p>
                <p>
                    Material: 80 % cotton, 20 % polyester (heather-colours: 60 % cotton, 40 % polyester)
                </p>
            </div>

            <div
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
            </div>

            <div class="manufactureInfo mt-7 ">
                <div class="manufactureHeading font-bold text-[18px]">
                    Manufacturer Information
                </div>
                <div class="manufacturerDetails font-medium text-[16px] text-[#6E6E6E] mt-2">
                    <p>
                        FOL International Ltd. <br>
                        Unit 6, Lisfannon Business Centre, Lisfannon, Buncrana, County Donegal, Ireland F93Y2NA <br>
                        fruitbrands@fotlinc.com
                    </p>
                </div>
            </div>

        </section>









        <!-- final  -->
        <section id="customerAlsoBought" class=" px-4  lg:px-[120px] py-[80px]">
            <div class="flex items-center justify-between headingAndButtons">
                <h2 class=" headingCus text-2xl lg:text-[48px] font-semibold ">Customers Also Bought</h2>
                <div class="flex gap-4 buttons">
                    <button id="prevBtn"
                        class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center">
                        <img src="{{ asset('frontend/assets/images/productBack.svg')}}" alt="" class="w-1/2 h-1/2 ">
                    </button>
                    <button id="nextBtn"
                        class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center ">
                        <img src="{{ asset('frontend/assets/images/forwardArrow.svg')}}" alt="" class="w-1/2 h-1/2 ">
                    </button>
                </div>
            </div>

            <!-- Carousel Wrapper -->
            <div class="relative mt-10">
                <div id="carousel"
                    class="flex gap-10 overflow-x-scroll scroll-smooth snap-x snap-mandatory scrollbar-hide">
                    <!-- Product 1 -->

                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- your recent views -->
        <!-- final  -->
        <section id="customerAlsoBought" class=" px-4  lg:px-[120px] py-4 lg:py-[80px]">
            <div class="flex items-center justify-between headingAndButtons">
                <h2 class=" headingCus text-2xl lg:text-[48px] font-semibold ">Your Recents</h2>
                <div class="flex gap-4 buttons">
                    <button id="prevBtn2"
                        class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center">
                        <img src="{{ asset('frontend/assets/images/productBack.svg')}}" alt="" class="w-1/2 h-1/2 ">
                    </button>
                    <button id="nextBtn2"
                        class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center ">
                        <img src="{{ asset('frontend/assets/images/forwardArrow.svg')}}" alt="" class="w-1/2 h-1/2 ">
                    </button>
                </div>
            </div>

            <!-- Carousel Wrapper -->
            <div class="relative mt-10">
                <div id="carousel2"
                    class="flex gap-10 overflow-x-scroll scroll-smooth snap-x snap-mandatory scrollbar-hide">
                    <!-- Product 1 -->

                    <div class=" relative product w-full md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full md:w-1/2  lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full md:w-1/2  lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full md:w-1/2  lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full md:w-1/2  lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="mb-4 productImage ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg')}}" alt="" class="rounded-xl">
                        </div>
                        <div class="flex items-center justify-between mb-3 productSubIcons ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="flex items-center justify-between gap-2 productIconSet">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg')}}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg')}}" alt="">

                            </div>
                        </div>
                        <div class="mb-1 font-medium productTitle text-md lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="mb-2 productColors ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 bg-purple-700 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 bg-blue-600 border-2 border-white rounded-full lg:w-8 lg:h-8">
                                    </div>
                                    <div class="w-6 h-6 border-2 border-white rounded-full lg:w-8 lg:h-8 bg-sky-400"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-500 lg:text-md">16+</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
