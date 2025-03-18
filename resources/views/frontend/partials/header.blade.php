<!-- ==== TOPNAV_PURPLE - START ==== -->
<div class=" px-4 lg:px-[120px] purple_nav_top bg-[#54114C] h-22 text-[#FFFFFF]   flex justify-between items-center  ">
    <div class="logo  text-xl lg:text-2xl font-bold">Continental Fashion</div>
    <div class="sideContent flex items-center gap-5">
        <!-- search bar  -->
        <div class="relative flex items-center">
            <!-- Search Icon (Visible on Mobile) -->
            <button class="lg:hidden p-2">
                <img src="{{ asset('frontend/assets/images/search.svg') }}" alt="Search Icon">
            </button>

            <!-- Full Search Bar (Hidden on Mobile, Visible on Larger Screens) -->
            <div
                class="hidden lg:flex items-center border border-gray-300 rounded-xl px-3 gap-3 py-2 w-72 bg-transparent">
                <img src="{{ asset('frontend/assets/images/search.svg') }}" alt="Search Icon">
                <input type="text" placeholder="Search"
                    class="outline-none w-full bg-transparent text-gray-800 placeholder-gray-400" />
            </div>
        </div>
        <!-- search bar end -->
        <!-- cart start -->
        <div class="flex items-center mr-3 cursor-pointer">
            @if (session()->has('company_user_id'))
                <a href="{{ route('frontend.my-cart') }}">
                    <img src="{{ asset('frontend/assets/images/cart.svg') }}" alt="Cart">
                </a>
            @else
                <a href="javascript:void(0);" onclick="showLoginToast();">
                    <img src="{{ asset('frontend/assets/images/cart.svg') }}" alt="Cart">
                </a>
            @endif
        </div>



        <!-- cart end  -->

        <div class="adminButton flex justify-between items-center gap-2 mr-2 relative">
            @if (session()->has('company_user_id'))
                @php
                    $user = \App\Models\CompanyRegistration::find(session('company_user_id'));
                @endphp
                @if ($user)
                    <div class="relative flex items-center gap-2">
                        <!-- User Icon -->
                        <a href="{{ route('frontend.manageprofile') }}">
                            <img src="{{ asset('frontend/assets/images/User Icon.svg') }}" alt="User Icon"
                                class="w-6 h-6">
                        </a>

                        <!-- Button to Toggle Dropdown -->
                        <button id="dropdownButton" class="flex items-center gap-1 px-3 py-2">
                            {{ $user->first_name }}
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu (Initially Hidden) -->
                        <div id="dropdownMenu"
                            class="absolute right-0 hidden w-40 mt-2 bg-white border rounded-md shadow-lg">
                            <a href="{{ route('frontend.logout') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                Logout
                            </a>
                        </div>
                    </div>
                @endif
            @else
                <a href="{{ route('frontend.login') }}">
                    <img src="{{ asset('frontend/assets/images/User Icon.svg') }}" alt="User Icon">
                </a>
                <a href="{{ route('frontend.login') }}">
                    <span class="hidden md:flex"> Login </span>
                </a>
            @endif
        </div>




        <div class="langMenu">
            <div class="relative text-left  ">
                <!-- Dropdown Toggle -->
                <button id="langToggle" type="button"
                    class="flex items-center space-x-2 h-full  text-white px-3 py-2 rounded-md focus:outline-none"
                    onclick="toggleLangDropdown()">
                    <!-- Flag Image -->
                    <img src="{{ asset('frontend/assets/images/flag.svg') }}" alt="UK Flag"
                        class="w-6 h-4 object-cover" />
                    <!-- Down Arrow Icon (SVG) -->
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586
                         l3.293-3.293a1 1 0 111.414 1.414l-4
                         4a1 1 0 01-1.414 0l-4-4a1 1 0
                         010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div id="langMenu"
                    class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded shadow-lg">
                    <ul class="py-2 text-gray-700">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <img src="{{ asset('frontend/assets/images/flag.svg') }}" alt="US Flag"
                                class="w-5 h-3 object-cover" />
                            <span>English (US)</span>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <img src="{{ asset('frontend/assets/images/flag.svg') }}" alt="France Flag"
                                class="w-5 h-3 object-cover" />
                            <span>Français</span>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-2">
                            <img src="{{ asset('frontend/assets/images/flag.svg') }}" alt="Spain Flag"
                                class="w-5 h-3 object-cover" />
                            <span>Español</span>
                        </li>
                        <!-- Add more languages as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==== TOPNAV_PURPLE - END ==== -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButton = document.getElementById("dropdownButton");
        const dropdownMenu = document.getElementById("dropdownMenu");

        dropdownButton.addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent click from closing immediately
            dropdownMenu.classList.toggle("hidden");
        });

        // Close dropdown if clicking outside
        document.addEventListener("click", function(event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });
    });
</script>
<!-- Toastr Message for Unauthorized Access -->
<script>
    function showLoginToast() {
        toastr.error('Please log in to access the cart!', 'Authentication Required', {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 3000
        });
    }
</script>
