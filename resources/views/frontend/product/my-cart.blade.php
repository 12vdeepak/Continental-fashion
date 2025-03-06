

@extends('frontend.layouts.app')
@section('content')
    <main>


<div id="pageNavShow " class="flex items-center bg-[#F4F4F4] gap-4 py-4 px-4 lg:px-[120px] ">
    <div class="backIcon">
      <img src="{{ asset('frontend/assets/images/backIcon.svg') }}" alt="">
    </div>
    <div class="homeIcon flex gap-2 items-center font-[500] text-[#6E6E6E] text-[16px]">
      <img src="{{ asset('frontend/assets/images/HomeIcon.svg') }}"" alt=""> Home
    </div>
    <div class="line">
      <img src="{{ asset('frontend/assets/images/Line.svg') }}"" alt="">
    </div>
    <div class="currentPage text-[#E2001A] font-[500] text-[16px] flex items-center gap-2">
      Cart
    
    </div>

  </div>

  <!--Cancellation Page Content -->
   <section id="cartContainer" class="px-4 lg:px-[120px] py-[80px]">
    <div class="heading">
        My Cart
    </div>
    <div class=" mt-4  rounded-lg ">

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
                          <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}" class="w-12 h-12 mr-3 rounded-lg" alt="Product">
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
                          <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}" class="w-12 h-12 mr-3 rounded-lg" alt="Product">
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
                  <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}" class="w-16 h-16 rounded-lg" alt="Product">
                  <div>
                      <h3 class="text-md font-medium">DLIBERTY TS 200</h3>
                      <p class="text-sm text-gray-500">Black | XXL</p>
                      <p class="text-sm text-gray-500">Price: $12</p>
                  </div>
              </div>
              <div class="flex justify-between  ">
                <div class="counterQty mt-5">
                  <div class="flex items-center justify-between w-40 bg-gray-100 rounded-xl p-3 ">
                      <button id="decrease" class="text-black bg-gray-300 rounded-md text-md px-3">−</button>
                      <span id="counter" class="text-gray-800 font-medium text-md">120</span>
                      <button id="increase" class="text-black bg-gray-300 rounded-md text-md px-3">+</button>
                  </div>
                
                </div>
                  <button class="text-red-500 text-sm remove-item">
                    <img src="{{ asset('frontend/assets/images/bin.svg') }}" alt="">
                  </button>
              </div>
          </div>
          <div class="bg-gray-100 p-4 rounded-lg flex flex-col gap-5  justify-between">
              <div class="flex items-center space-x-4">
                  <img src="{{ asset('frontend/assets/images/blueHoodie.png') }}" class="w-16 h-16 rounded-lg" alt="Product">
                  <div>
                      <h3 class="text-md font-medium">DLIBERTY TS 200</h3>
                      <p class="text-sm text-gray-500">Black | XXL</p>
                      <p class="text-sm text-gray-500">Price: $12</p>
                  </div>
              </div>
              <div class="flex justify-between  ">
                  <div class="flex items-center gap-3 space-x-2">
                      <button class="bg-gray-300 px-2 py-1 rounded decrement">-</button>
                      <span class="quantity text-lg font-medium">1</span>
                      <button class="bg-gray-300 px-2 py-1 rounded increment">+</button>
                  </div>
                  <button class="text-red-500 text-sm remove-item">
                    <img src="{{ asset('frontend/assets/images/bin.svg') }}" alt="">
                  </button>
              </div>
          </div>
      </div>

      <!-- Payment Summary -->
      <div class="mt-6 bg-[#F4F4F4] p-8 rounded-xl grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
              <h3 class="text-lg font-bold">Payment summary</h3>
              <p class="text-gray-500 text-sm">Total cost consists of temporary costs, not including shipping.</p>
          </div>
          <div class="text-right sm:text-left">
              <p class="flex justify-between text-sm text-gray-700"><span>Total net:</span> <span class="net-amount">€12</span></p>
              <p class="flex justify-between text-sm my-2 text-gray-700"><span>19% VAT:</span> <span class="vat-amount">18%</span></p>
              <p class="flex justify-between text-md font-semibold mt-3 border-y border-dashed"><span>Final amount:</span> <span class="final-amount text-[#3CC4D5]">€12</span></p>
              <button class="mt-10 bg-[#54114C] text-white px-6 py-2 rounded-lg w-full">Checkout</button>
          </div>
      </div>
  </div>

  {{--  <script>
      document.addEventListener("DOMContentLoaded", () => {
          function updateTotals() {
              let netTotal = 0;
              document.querySelectorAll(".quantity").forEach((element) => {
                  const quantity = parseInt(element.textContent);
                  const price = 12;
                  const total = quantity * price;
                  element.closest(".bg-gray-100, tr").querySelector(".total-price")?.textContent = `$${total}`;
                  netTotal += total;
              });

              document.querySelector(".net-amount").textContent = `€${netTotal}`;
              const vat = (netTotal * 0.19).toFixed(2);
              document.querySelector(".vat-amount").textContent = `€${vat}`;
              const finalAmount = (netTotal + parseFloat(vat)).toFixed(2);
              document.querySelector(".final-amount").textContent = `€${finalAmount}`;
          }

          document.querySelectorAll(".increment").forEach((button) => {
              button.addEventListener("click", () => {
                  const quantityElement = button.parentElement.querySelector(".quantity");
                  let quantity = parseInt(quantityElement.textContent);
                  quantityElement.textContent = quantity + 1;
                  updateTotals();
              });
          });

          document.querySelectorAll(".decrement").forEach((button) => {
              button.addEventListener("click", () => {
                  const quantityElement = button.parentElement.querySelector(".quantity");
                  let quantity = parseInt(quantityElement.textContent);
                  if (quantity > 1) {
                      quantityElement.textContent = quantity - 1;
                      updateTotals();
                  }
              });
          });

          document.querySelectorAll(".remove-item").forEach((button) => {
              button.addEventListener("click", () => {
                  button.closest(".bg-gray-100, tr").remove();
                  updateTotals();
              });
          });

          updateTotals();
      });
  </script>  --}}
   </section>

  

 
  
  

  



   <section id="customerAlsoBought" class=" px-4  lg:px-[120px]">
    <div class="headingAndButtons flex justify-between items-center">
      <h2 class=" headingCus text-2xl lg:text-[48px] font-semibold ">Customers Also Bought</h2>
      <div class="buttons flex gap-4">
        <button id="prevBtn" class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center">
          <img src="{{ asset('frontend/assets/images/productBack.svg') }}" alt="" class="w-1/2 h-1/2 " >
        </button>
        <button id="nextBtn" class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center ">
          <img src="{{ asset('frontend/assets/images/forwardArrow.svg') }}" alt="" class="w-1/2 h-1/2 ">
        </button>
      </div>
    </div>
  
    <!-- Carousel Wrapper -->
    <div class="relative mt-10">
      <div
        id="carousel"
        class="flex gap-10 overflow-x-scroll scroll-smooth snap-x snap-mandatory scrollbar-hide"
      >
        <!-- Product 1 -->
       
        <div class=" relative product w-full  md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
          <div
              class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
              25% offer
          </div>
          <div class="productImage mb-4  ">
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
        <button id="prevBtn2" class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center">
          <img src="{{ asset('frontend/assets/images/productBack.svg') }}" alt="" class="w-1/2 h-1/2 " >
        </button>
        <button id="nextBtn2" class=" bg-gray-100 h-[40px] w-[40px] lg:h-[45px] lg:w-[45px] text-white rounded-full flex justify-center items-center ">
          <img src="{{ asset('frontend/assets/images/forwardArrow.svg') }}" alt="" class="w-1/2 h-1/2 ">
        </button>
      </div>
    </div>
  
    <!-- Carousel Wrapper -->
    <div class="relative mt-10">
      <div
        id="carousel2"
        class="flex gap-10 overflow-x-scroll scroll-smooth snap-x snap-mandatory scrollbar-hide"
      >
        <!-- Product 1 -->
       
        <div class=" relative product w-full md:w-1/2 lg:w-[25vw] flex-shrink-0 snap-start  ">
          <div
              class="absolute top-5 left-2 bg-sky-500 text-white text-sm font-regular  px-2 text-[12px] lg:px-3 py-1 rounded-md">
              25% offer
          </div>
          <div class="productImage mb-4  ">
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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
              <img src="{{ asset('frontend/assets/images/productDemImg.jpeg') }}" alt="" class="rounded-xl">
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
                      <div class="w-6 h-6 lg:w-8 lg:h-8 bg-purple-700 rounded-full border-2 border-white"></div>
                      <div class=" w-6 h-6 lg:w-8 lg:h-8 bg-blue-600 rounded-full border-2 border-white"></div>
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