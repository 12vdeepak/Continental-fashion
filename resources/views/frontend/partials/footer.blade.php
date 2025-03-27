<footer class="bg-black text-white px-6 md:px-[120px] py-10">
    <div class="flex flex-col md:flex-row justify-between gap-10 md:gap-20">

        <!-- Logo & Contact -->
        <div class="flex flex-col gap-6">
            <h2 class="text-3xl font-bold leading-tight">
                <a href="{{ route('frontend.home') }}" class="text-white-500">
                    Continental Fashion <br> Merchandising UG
                </a>
            </h2>

            <div class="flex items-center gap-3 text-lg">
                <img src="{{ asset('frontend/assets/images/phoneIcon.svg') }}" alt="Phone">
                <span>+49 6108 826960</span>
            </div>
            <div class="flex items-center gap-3 text-lg">
                <img src="{{ asset('frontend/assets/images/mailIcon.svg') }}" alt="Email">
                <span>sales@continental-fashion.de</span>
            </div>
            <!-- Opening Hours -->
            <div class="text-lg mt-4">
                <h3 class="font-bold">Opening Hours:</h3>
                <p>Mon - Thursday: 9:00 - 17:00 Uhr</p>
                <p>Fri: 9:00 - 15:00 Uhr</p>
            </div>
        </div>

        <!-- Legal Pages -->
        <div>
            <h3 class="text-xl font-bold mb-4">Legal Pages</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-purple-400 transition">Imprint</a></li>
                <li><a href="#" class="hover:text-purple-400 transition">Privacy Policy</a></li>
                <li><a href="{{ route('frontend.terms') }}" class="hover:text-purple-400 transition">Terms &
                        Conditions</a></li>
                <li><a href="#" class="hover:text-purple-400 transition">Delivery Conditions</a></li>
                <li><a href="#" class="hover:text-purple-400 transition">Cancellation & Returns</a></li>
            </ul>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-xl font-bold mb-4">Quick Links</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-purple-400 transition">FAQ</a></li>
                <li><a href="#" class="hover:text-purple-400 transition">Download Pricelist</a></li>
                <li><a href="#" class="hover:text-purple-400 transition">Measurement Charts</a></li>
                <li><a href="#" class="hover:text-purple-400 transition">Shipping Cost</a></li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div class="w-full md:w-[320px]">
            <h3 class="text-xl font-bold mb-4">Subscribe To Our Newsletter</h3>
            <form action="{{ route('frontend.subscribe') }}" method="post" class="flex flex-col gap-4">
                @csrf
                <input type="email" placeholder="Enter Your Email" name="email"
                    class="border border-gray-300 rounded-xl p-4 bg-black text-white placeholder-gray-400 focus:ring-2 focus:ring-purple-500 @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <button type="submit"
                    class="bg-purple-700 hover:bg-purple-600 transition text-white font-bold p-4 rounded-xl">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="text-center text-sm mt-8 text-gray-400">
        &copy; 2025 Continental Fashion. All Rights Reserved.
    </div>
</footer>
