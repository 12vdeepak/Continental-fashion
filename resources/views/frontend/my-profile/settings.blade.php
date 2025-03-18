@extends('frontend.layouts.app')
@section('content')
    <main>

        <section id="loginPage" class="w-full">
            <!-- pageNavShow -->
            <div id="pageNavShow" class="flex items-center bg-[#F4F4F4] gap-4 py-4 px-4 lg:px-[120px]">
                <div class="backIcon">
                    <img src="{{ asset('frontend/assets/images/backIcon.svg')}}" alt="">
                </div>
                <div class="homeIcon flex gap-2 items-center font-[500] text-[#6E6E6E] text-[16px]">
                    <img src="{{ asset('frontend/assets/images/HomeIcon.svg')}}" alt=""> Home
                </div>
                <div class="line">
                    <img src="{{ asset('frontend/assets/images/Line.svg')}}" alt="">
                </div>
                <div class="currentPage text-[#6E6E6E] font-[500] text-[16px] flex items-center gap-2">
                    My Profile
                    <img src="/assets/images/forwardIcon.svg" alt="">
                    <span class="text-[#E2001A]">Settings</span>
                </div>
            </div>

            <!-- mainContent -->
            <div id="mainContent" class="flex flex-col px-4 lg:px-[120px] my-[80px] w-full gap-10">
                <div class="flex justify-between items-center">
                    <div class="heading text-[32px] lg:text-[48px] font-bold">
                        My Profile
                    </div>
                    <button id="hamburger-menu" class="md:hidden p-2 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="profileContainer flex flex-col md:flex-row md:justify-between gap-10 font-medium">
                    <!-- Sidebar -->
                    @include('frontend.my-profile.sidebar')


                    <!-- Main Content -->
                    <div class="contentContainer w-full h-full md:w-3/4 flex flex-col gap-3">
                        <div class="text-[24px] font-bold lg:text-[32px]">Settings</div>

                        <div class="settingsContainer mt-5 w-full flex flex-col gap-2">
                            <a href="/pages/languages.html">
                                <div class="setting flex justify-between items-center px-4 py-8 bg-[#F4F4F4] rounded-xl">
                                    <div class="settingIconAndheading flex items-center">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/assets/images/languageIcon.svg')}}" alt="">
                                        </div>
                                        <div class="name">
                                            Language
                                        </div>
                                    </div>
                                    <div class="forwardDiv flex items-center gap-2">
                                        <span class="text-xs text-[#6E6E6E]">English</span>
                                        <img src="{{ asset('frontend/assets/images/forwardIcon.svg')}}" alt="">
                                    </div>
                                </div>
                            </a>
                            <div class="setting flex justify-between items-center px-4 py-8 bg-[#F4F4F4] rounded-xl">
                                <div class="settingIconAndheading flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('frontend/assets/images/password.svg')}}" alt="">
                                    </div>
                                    <div class="name">
                                        Password
                                    </div>
                                </div>
                                <div class="forwardDiv flex items-center gap-2">
                                    <img src="{{ asset('frontend/assets/images/forwardIcon.svg')}}" alt="">
                                </div>
                            </div>
                            <div
                                class="setting cancelOrderBtn flex justify-between items-center px-4 py-8 bg-[#F4F4F4] rounded-xl">
                                <div class="settingIconAndheading cancelOrderBtn flex items-center">
                                    <div class="icon cancelOrderBtn">
                                        <img src="{{ asset('frontend/assets/images/redBin.svg')}}" alt="">
                                    </div>
                                    <div class="name cancelOrderBtn">
                                        Delete Account
                                    </div>
                                </div>
                                <div class="forwardDiv flex items-center gap-2 cancelOrderBtn">
                                    <img src="{{ asset('frontend/assets/images/forwardIcon.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Logout Confirmation Popup Modal -->
        <div id="logoutModal" class="fixed inset-0 backdrop-blur-sm bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-xl w-[400px] border border-solid border-gray-900">
                <h2 class="text-lg font-semibold text-center">Logout?</h2>
                <p class="text-gray-600 text-center mt-2">Are you sure you want to log out?</p>
                <div class="mt-4 flex justify-center gap-4">
                    <button id="cancelLogout"
                        class="px-6 py-2 border rounded-md text-blue-600 font-semibold">Cancel</button>
                    <button id="confirmLogout"
                        class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md">Confirm</button>
                </div>
            </div>
        </div>

        <!-- Confirmation Popup Modal -->
        <div id="popupModal" class="fixed inset-0 backdrop-blur-sm bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-xl w-[400px] border border-solid border-gray-900">
                <div class="imageHolder flex justify-center items-center">
                    <div
                        class="imageContainer flex justify-center items-center bg-red-300 w-[80px] h-[80px] rounded-full my-3">
                        <div class="logImg bg-red-500 flex justify-center items-center p-4 w-[60px] h-[60px] rounded-full">
                            <img src="/assets/images/logout.svg" alt="" class="w-[50px] h-[50px]">
                        </div>
                    </div>
                </div>
                <h2 class="text-lg font-semibold text-center">Delete Account?</h2>
                <p class="text-gray-600 text-center mt-2">Are you sure you want to delete your account?</p>
                <div class="mt-4 flex justify-center gap-4">
                    <button id="cancelNo" class="px-6 py-2 border rounded-md font-semibold">Cancel</button>
                    <button id="cancelYes" class="px-6 py-2 bg-red-600 text-white font-semibold rounded-md">Confirm</button>
                </div>
            </div>
        </div>
    </main>
@endsection
