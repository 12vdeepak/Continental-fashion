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
            <div class="currentPage text-[#E2001A] font-[500] text-[16px] flex items-center gap-2">
                Cart

            </div>

        </div>

        <!--Cancellation Page Content -->
        <section id="cartContainer" class="px-4 lg:px-[120px] py-[80px]">
            <div class="heading">
                Confirm Your Order
            </div>
            <p class="text-[#6E6E6E]">
                Please check and confirm your order details to place order
            </p>
            <div class=" mt-4  rounded-lg ">

                <div class="productHead text-xl text-bold mb-3">
                    Product Details
                </div>

                <!-- Desktop Table Layout (Hidden on Small Screens) -->
                <div class="hidden sm:block overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class=" text-left bg-gray-100">
                                <th class="p-3">S.no</th>
                                <th class="p-3">Product</th>
                                <th class="p-3">Color</th>
                                <th class="p-3">Size</th>
                                <th class="p-3">Quantity</th>
                                <th class="p-3">Price</th>
                                <th class="p-3">Total</th>
                                <th class="p-3">Action</th>
                            </tr>
                        </thead>
                        <tbody id="cart-body">
                            <tr class="border-b border-gray-300">
                                <td class="p-3">01</td>
                                <td class="p-3 flex items-center">
                                    <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}"
                                        class="w-12 h-12 mr-3 rounded-lg" alt="Product">
                                    <span>DLIBERTY TS 200</span>
                                </td>
                                <td class="p-3">Black</td>
                                <td class="p-3">XXL</td>
                                <td class="p-3">
                                    <div class="counterQty ">
                                        <div class="flex items-center justify-between w-40 p-2 bg-gray-100 rounded-xl  ">
                                            <button id="decrease" class="text-black  rounded-md text-md px-3">−</button>
                                            <span id="counter" class="text-gray-800 font-medium text-md">120</span>
                                            <button id="increase" class="text-black  rounded-md text-md px-3">+</button>
                                        </div>

                                    </div>
                                </td>
                                <td class="p-3">$12</td>
                                <td class="p-3 total-price">$12</td>
                                <td class="p-3">
                                    <button class="text-red-500 remove-item">
                                        <img src="{{ asset('frontend/assets/images/bin.svg') }}" alt="">
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-300">
                                <td class="p-3">02</td>
                                <td class="p-3 flex items-center">
                                    <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}"
                                        class="w-12 h-12 mr-3 rounded-lg" alt="Product">
                                    <span>DLIBERTY TS 200</span>
                                </td>
                                <td class="p-3">Black</td>
                                <td class="p-3">XXL</td>
                                <td class="p-3">
                                    <div class="counterQty ">
                                        <div class="flex items-center justify-between w-40 p-2 bg-gray-100 rounded-xl  ">
                                            <button id="decrease" class="text-black  rounded-md text-md px-3">−</button>
                                            <span id="counter" class="text-gray-800 font-medium text-md">120</span>
                                            <button id="increase" class="text-black  rounded-md text-md px-3">+</button>
                                        </div>

                                    </div>
                                </td>
                                <td class="p-3">$12</td>
                                <td class="p-3 total-price">$12</td>
                                <td class="p-3">
                                    <button class="text-red-500 remove-item">
                                        <img src="{{ asset('frontend/assets/images/bin.svg') }}" alt="">
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Layout (Hidden on Large Screens) -->
                <div class="sm:hidden space-y-4" id="mobile-cart">
                    <!-- product -1 -->
                    <div class="bg-gray-100 p-4 rounded-lg flex flex-col gap-5  justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}" class="w-16 h-16 rounded-lg"
                                alt="Product">
                            <div>
                                <h3 class="text-md font-medium">DLIBERTY TS 200</h3>
                                <p class="text-sm text-gray-500">Black | XXL</p>
                                <p class="text-sm text-gray-500">Price: $12</p>
                            </div>
                        </div>
                        <div class="flex justify-between  ">
                            <div class="counterQty mt-5">
                                <div class="flex items-center justify-between w-40 bg-gray-200 rounded-xl p-3 ">
                                    <button id="decrease" class="text-black  rounded-md text-md px-3">−</button>
                                    <span id="counter" class="text-gray-800 font-medium text-md">120</span>
                                    <button id="increase" class="text-black  rounded-md text-md px-3">+</button>
                                </div>

                            </div>
                            <button class="text-red-500 text-sm remove-item">
                                <img src="{{ asset('frontend/assets/images/bin.svg') }}" alt="">
                            </button>
                        </div>
                    </div>
                    <!-- product -1 -->
                    <div class="bg-gray-100 p-4 rounded-lg flex flex-col gap-5  justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}" class="w-16 h-16 rounded-lg"
                                alt="Product">
                            <div>
                                <h3 class="text-md font-medium">DLIBERTY TS 200</h3>
                                <p class="text-sm text-gray-500">Black | XXL</p>
                                <p class="text-sm text-gray-500">Price: $12</p>
                            </div>
                        </div>
                        <div class="flex justify-between  ">
                            <div class="counterQty mt-5">
                                <div class="flex items-center justify-between w-40 bg-gray-200 rounded-xl p-3 ">
                                    <button id="decrease" class="text-black  rounded-md text-md px-3">−</button>
                                    <span id="counter" class="text-gray-800 font-medium text-md">120</span>
                                    <button id="increase" class="text-black  rounded-md text-md px-3">+</button>
                                </div>

                            </div>
                            <button class="text-red-500 text-sm remove-item">
                                <img src="{{ asset('frontend/assets/images/bin.svg') }}" alt="">
                            </button>
                        </div>
                    </div>

                </div>

                <div class="flex rounded-xl mt-5">
                    <div class="addressDiv w-full">
                        <div class="address bg-[#F4F4F4] flex p-4 gap-5 rounded-lg">
                            <div class="info w-full">
                                <div class="nameAndDef flex gap-3 items-center w-full">
                                    <div
                                        class="nameAndChange flex items-center justify-between text-[20px] font-medium w-full">
                                        <div class="name">
                                            @if ($selectedAddress)
                                                {{ $selectedAddress->first_name . ' ' . $selectedAddress->last_name }}
                                            @else
                                                No Address Selected
                                            @endif
                                        </div>
                                        <a href="{{ route('addresses.index') }}">
                                            <div class="changeButton text-[14px] font-bold text-[#2468ce]">
                                                Change
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="description mt-2">
                                    {{ $selectedAddress->street ?? '' }}, {{ $selectedAddress->city ?? '' }},
                                    {{ $selectedAddress->state ?? '' }} <br>
                                    Phone number: {{ $selectedAddress->phone_number ?? '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Payment Summary -->
                <div class="mt-6 bg-[#F4F4F4] p-4 lg:p-8 rounded-xl grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <h3 class="text-lg font-bold">Payment summary</h3>
                        <p class="text-gray-500 text-sm">Total cost consists of temporary costs, not including shipping.
                        </p>
                    </div>
                    <div class="text-right sm:text-left">
                        <p class="flex justify-between text-sm text-gray-700"><span>Total net:</span> <span
                                class="net-amount">€12</span></p>
                        <p class="flex justify-between text-sm my-2 text-gray-700"><span>19% VAT:</span> <span
                                class="vat-amount">18%</span></p>
                        <p class="flex justify-between text-md font-semibold mt-3 border-y border-dashed"><span>Final
                                amount:</span> <span class="final-amount text-[#3CC4D5]">€12</span></p>
                        <button id="placeOrderBtn" class="mt-10 bg-[#54114C] text-white px-6 py-2 rounded-lg w-full">Place
                            Order</button>
                    </div>
                </div>
            </div>
            <!-- Order Success Popup (Initially Hidden) -->
            <!-- Order Success Popup (Initially Hidden) -->
            <div id="orderSuccessPopup"
                class="fixed inset-0 bg-opacity-30 backdrop-blur-sm flex items-center justify-center z-50 hidden ">
                <div id="popupContent" class="bg-white rounded-xl shadow-lg w-[500px] p-6 relative">
                    <!-- Close Button -->
                    <button id="closePopupBtn"
                        class="absolute top-3 right-3 text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>

                    <!-- Success Icon -->
                    <div class="flex justify-center">
                        <div class="bg-[#2AD15640] text-white rounded-full p-3 ">
                            <img src="{{ asset('frontend/assets/images/success-svgrepo-com (1).svg') }}" alt=""
                                class="w-[80px] h-[80px]">
                        </div>
                    </div>

                    <!-- Order Success Message -->
                    <h2 class="text-center text-2xl font-bold mt-4">Your order has been placed successfully</h2>
                    <p class="text-gray-600 text-center my-2">
                        Your order <span class="font-semibold">#120050</span> has been placed successfully.
                        You will receive an order confirmation email soon.
                    </p>

                    <!-- Product Details -->
                    <div class="mt-6 space-y-4">
                        <div class="flex items-center bg-gray-100 p-4 rounded-lg">
                            <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}" alt="Hoodie"
                                class="w-16 h-16 object-cover rounded-lg">
                            <div class="ml-4">
                                <p class="text-lg font-semibold">Classic Hooded Sweat</p>
                                <div class="text-gray-600 text-sm flex gap-2 mt-1">
                                    <span>Gender: ♂️</span> |
                                    <span>Color: <span
                                            class="w-3 h-3 inline-block rounded-full bg-[#54114C]"></span></span> |
                                    <span>Size: XXL</span> |
                                    <span>Qty: 120</span>
                                </div>
                                <div class="mt-2 text-sm flex gap-4">
                                    <span class="text-gray-600">Unit Price: <span class="font-semibold">$12</span></span>
                                    <span class="text-gray-600">Total Price: <span
                                            class="font-semibold text-blue-600">$126</span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center bg-[#54114C0F] p-4 rounded-lg my-5">
                        <span class="text-gray-600 text-sm">20+ items</span>
                        <a href="#" class="text-red-600 font-semibold text-sm">Full details in My Order →</a>
                    </div>

                    <!-- Buttons -->
                    <div class="mt-6 text-center">
                        <button id="closePopup"
                            class="bg-[#54114C] text-white px-6 py-3 rounded-lg text-lg w-full">Continue Shopping</button>
                    </div>
                </div>
            </div>






        </section>











        <section id="customerAlsoBought" class=" px-4  lg:px-[120px]">
            <div class="headingAndButtons flex justify-between items-center">
                <h2 class=" headingCus text-2xl lg:text-[48px] font-semibold ">Customers Also Bought</h2>
                <div class="buttons flex gap-4">
                    <button id="prevBtn"
                        class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center">
                        <img src="{{ asset('frontend/assets/images/productBack.svg') }}" alt=""
                            class="w-1/2 h-1/2 ">
                    </button>
                    <button id="nextBtn"
                        class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center ">
                        <img src="{{ asset('frontend/assets/images/forwardArrow.svg') }}" alt=""
                            class="w-1/2 h-1/2 ">
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
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- your recent views -->
        <!-- final  -->
        <section id="customerAlsoBought" class=" px-4  lg:px-[120px] py-4 lg:py-[80px]">
            <div class="headingAndButtons flex justify-between items-center">
                <h2 class=" headingCus text-2xl lg:text-[48px] font-semibold ">Your Recents</h2>
                <div class="buttons flex gap-4">
                    <button id="prevBtn2"
                        class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center">
                        <img src="{{ asset('frontend/assets/images/productBack.svg') }}" alt=""
                            class="w-1/2 h-1/2 ">
                    </button>
                    <button id="nextBtn2"
                        class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center ">
                        <img src="{{ asset('frontend/assets/images/forwardArrow.svg') }}" alt=""
                            class="w-1/2 h-1/2 ">
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
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full md:w-1/2  lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full md:w-1/2  lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full md:w-1/2  lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>
                    <div class=" relative product w-full md:w-1/2  lg:w-[25vw] flex-shrink-0 snap-start  ">
                        <div
                            class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
                            25% offer
                        </div>
                        <div class="productImage mb-4  ">
                            <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt=""
                                class="rounded-xl">
                        </div>
                        <div class="productSubIcons mb-3 flex justify-between items-center  ">
                            <div class="productLeft text-[#6E6E6E] ">620020</div>
                            <div class="productIconSet flex justify-between gap-2 items-center">
                                <img src="{{ asset('frontend/assets/images/ma;e.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/female.svg') }}" alt="">
                                <img src="{{ asset('frontend/assets/images/kid.svg') }}" alt="">

                            </div>
                        </div>
                        <div class="productTitle mb-1 text-md font-medium lg:text-xl">Shopping Bags</div>
                        <div class="productTag mb-2 text-[#E2001A] text-[12px] ">Fruit of the loom</div>
                        <div class="productColors mb-2 ">
                            <div class="flex items-center space-x-2">
                                <div class="relative flex -space-x-3">
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white">
                                    </div>
                                    <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white">
                                    </div>
                                    <div class="w-6 h-6 lg:w-8 lg:h-8 bg-sky-400 rounded-full border-2 border-white"></div>
                                </div>
                                <span class="text-gray-500 text-sm lg:text-md  font-medium">16+</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endsection
