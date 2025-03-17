<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continental Fashion</title>

    <!-- ======= IMPORTED CSS - start  ====== -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}">


    <!-- ======= TAILWIND CDN LINK - start  ====== -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- ======= TAILWIND CDN LINK - end ====== -->

    <!-- ==== Icon Pack Lucide -- start  ==== -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- ==== Icon Pack Lucide -- end  ==== -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">




    <style>
        /* Prevent scrolling when dropdown is open */
        .no-scroll {
            overflow: hidden;
        }

        .error {
            color: red;
        }

        .invalid-feedback {
            color: red;
        }

        .highStock {
            background-image: url("public/frontend/assets/images/highStock.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% auto;
            font-weight: 400;
            font-family: var(--font-primary);
        }

        .poster {
            background-image: url("public/frontend/assets/images/poster.jpeg");
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 40vh;

            font-family: var(--font-primary);
        }
    </style>
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>





</head>



<body>

    <!-- header -->
    @include('frontend.partials.header')


    @include('frontend.partials.navbar')

    <!-- main content -->
    <main>
        @yield('content')
    </main>

    <!-- footer -->
    @include('frontend.partials.footer')




    <script></script>




    <!-- ==== Importing main js - start ==== -->
    <script defer src="{{ asset('frontend/assets/js/index.js') }}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
    <!-- ==== Importing main js - end ==== -->

    <script>
        // js for popup

        document
            .getElementById("registrationForm")
            .addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent form submission (for demo)

                // Simulate successful registration (Replace this with actual API call)
                setTimeout(() => {
                    document.getElementById("successModal").classList.remove("hidden");
                }, 500);
            });

        // Function to Close the Modal
        function closeModal() {
            document.getElementById("successModal").classList.add("hidden");
        }


        // ---

        // show file name
        document
            .getElementById("businessRegistration")
            .addEventListener("change", function() {
                let fileName = this.files[0]?.name || "Upload your business registration";
                document.getElementById("fileName").textContent = fileName;
            });

        //  Confirm password

        function validatePassword() {
            let newPassword = document.getElementById("newPassword").value;
            let confirmPassword = document.getElementById("confirmPassword").value;
            let errorText = document.getElementById("passwordError");

            if (newPassword !== confirmPassword && confirmPassword.length > 0) {
                errorText.classList.remove("hidden"); // Show error message
            } else {
                errorText.classList.add("hidden"); // Hide error message
            }
        }
    </script>
    <script>
        function changeImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }
    </script>
    {{--  <script>
        let currentIndex = 0;
        let images = @json($product->images->pluck('image_path'));

        function nextImage() {
            if (images.length === 0) return; // If no images, do nothing

            currentIndex = (currentIndex + 1) % images.length; // Loop back after last image
            document.getElementById('mainImage').src = "{{ asset('storage/') }}/" + images[currentIndex];
        }
    </script>  --}}


    <!-- Add this JavaScript at the end of your file -->
    <script>
        // Function to toggle password visibility for new password








        // Function to Close the Modal
        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        // Check if there's a success message from the server and show modal
        document.addEventListener('DOMContentLoaded', function() {
            // Check if the URL has a success parameter or if there's a session success message
            const urlParams = new URLSearchParams(window.location.search);
            const hasSuccess = "{{ Session::has('message') && Session::get('alert-type') === 'success' }}";

            if (hasSuccess === "1" || urlParams.has('success')) {
                document.getElementById('successModal').classList.remove('hidden');
            }
        });
    </script>
    <script>
        const newPass = document.getElementById("newPass");
        const confirmPass = document.getElementById("confirmPass");
        const message = document.getElementById("message");
        const submitBtn = document.getElementById("submitBtn");
        const popup = document.getElementById("popup");
        const closePopup = document.getElementById("closePopup");

        // Validate password match in real time
        confirmPass.addEventListener("input", () => {
            if (confirmPass.value === newPass.value && confirmPass.value !== "") {
                confirmPass.classList.remove("border-red-500");
                confirmPass.classList.add("border-green-500");
                message.textContent = "Passwords match ✅";
                message.classList.remove("text-red-500");
                message.classList.add("text-green-500");
            } else {
                confirmPass.classList.remove("border-green-500");
                confirmPass.classList.add("border-red-500");
                message.textContent = "Passwords do not match ❌";
                message.classList.remove("text-green-500");
                message.classList.add("text-red-500");
            }
        });

        // Show popup when password is changed
        submitBtn.addEventListener("click", () => {
            if (newPass.value && confirmPass.value && newPass.value === confirmPass.value) {
                popup.classList.remove("hidden");
            }
        });

        // Close popup
        closePopup.addEventListener("click", () => {
            popup.classList.add("hidden");
            newPass.value = "";
            confirmPass.value = "";
            confirmPass.classList.remove("border-green-500", "border-red-500");
            message.textContent = "";
        });
    </script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            let passwordInput = document.getElementById('password');
            let type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            this.textContent = type === 'password' ? '👁️' : '🙈'; // Toggle icon
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let currentIndex = 0;
            let imageElements = document.querySelectorAll(".dots .dot");
            let mainImage = document.getElementById("mainImage");
            let imagePaths = [];

            // Extract image paths from dot elements
            imageElements.forEach((dot) => {
                let match = dot.getAttribute("onclick").match(/'([^']+)'/);
                if (match) imagePaths.push(match[1]);
            });

            function updateImage() {
                if (imagePaths.length === 0) return;
                mainImage.src = imagePaths[currentIndex];

                // Update active dot styling
                document.querySelectorAll(".dots .dot").forEach((dot, index) => {
                    dot.style.backgroundColor = index === currentIndex ? "#E2001A" : "#6E6E6E";
                });
            }

            document.querySelector(".rightArrow").addEventListener("click", function() {
                if (imagePaths.length === 0) return;
                currentIndex = (currentIndex + 1) % imagePaths.length;
                updateImage();
            });

            document.querySelector(".leftArrow").addEventListener("click", function() {
                if (imagePaths.length === 0) return;
                currentIndex = (currentIndex - 1 + imagePaths.length) % imagePaths.length;
                updateImage();
            });

            // Add event listeners to dots for manual image switching
            imageElements.forEach((dot, index) => {
                dot.addEventListener("click", function() {
                    currentIndex = index;
                    updateImage();
                });
            });

            // Set initial image and active dot
            updateImage();
        });
    </script>

    {{-- JavaScript for Quantity Buttons --}}
    {{--  <script>
        document.getElementById('increaseQty').addEventListener('click', function() {
            let qtyElement = document.getElementById('quantity');
            qtyElement.textContent = parseInt(qtyElement.textContent) + 1;
        });

        document.getElementById('decreaseQty').addEventListener('click', function() {
            let qtyElement = document.getElementById('quantity');
            let currentQty = parseInt(qtyElement.textContent);
            if (currentQty > 1) {
                qtyElement.textContent = currentQty - 1;
            }
        });
    </script>  --}}







    <script>
        // Password visibility toggle
        function togglePasswordVisibility(inputId, toggleBtnId) {
            const passwordInput = document.getElementById(inputId);
            const toggleBtn = document.getElementById(toggleBtnId);

            toggleBtn.addEventListener("click", function() {
                const type = passwordInput.type === "password" ? "text" : "password";
                passwordInput.type = type;
                this.textContent = type === "password" ? "👁️" : "🙈"; // Toggle icon
            });
        }

        togglePasswordVisibility("newPassword", "toggleNewPassword");
        togglePasswordVisibility("confirmPassword", "toggleConfirmPassword");

        // Password match validation
        function validatePassword() {
            const newPassword = document.getElementById("newPassword").value;
            const confirmPassword = document.getElementById("confirmPassword").value;
            const passwordError = document.getElementById("passwordError");

            if (newPassword !== confirmPassword && confirmPassword !== "") {
                passwordError.classList.remove("hidden");
            } else {
                passwordError.classList.add("hidden");
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = [{
                    title: "Own Him <span class='px-2 py-1 text-red-500 bg-white rounded-md'>Effortless</span> Style",
                    description: "Lorem ipsum dolor sit amet consectetur. At ultrices libero et congue mauris sed nisl.",
                    image: "{{ asset('frontend/assets/images/carouselImg1.jpeg') }}"
                },
                {
                    title: "Upgrade Your <span class='px-2 py-1 text-green-500 bg-white rounded-md'>Casual</span> Look",
                    description: "Discover the latest trends with our premium selection of styles and fits.",
                    image: "{{ asset('frontend/assets/images/carouselImg1.jpeg') }}"
                },
                {
                    title: "Redefine <span class='px-2 py-1 text-blue-500 bg-white rounded-md'>Confidence</span>",
                    description: "Elevate your wardrobe with timeless pieces designed for every occasion.",
                    image: "{{ asset('frontend/assets/images/carouselImg1.jpeg') }}"
                }
            ];

            let currentSlide = 0;
            let autoSlideInterval;

            const bgImage = document.getElementById("bgImage");
            const title = document.getElementById("title");
            const description = document.getElementById("description");
            const prevBtn = document.getElementById("prevSlide");
            const nextBtn = document.getElementById("nextSlide");

            function updateSlide() {
                console.log("Updating slide:", currentSlide); // Debugging log
                bgImage.style.backgroundImage = `url('${slides[currentSlide].image}')`;
                title.innerHTML = slides[currentSlide].title;
                description.textContent = slides[currentSlide].description;
            }

            function nextSlide() {
                console.log("Next slide clicked"); // Debugging log
                currentSlide = (currentSlide + 1) % slides.length;
                updateSlide();
            }

            function prevSlide() {
                console.log("Previous slide clicked"); // Debugging log
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                updateSlide();
            }

            function startAutoSlide() {
                clearInterval(autoSlideInterval);
                autoSlideInterval = setInterval(nextSlide, 7000);
            }

            // Ensure event listeners are working
            prevBtn.addEventListener("click", (e) => {
                e.preventDefault(); // Prevent unexpected behaviors
                prevSlide();
                startAutoSlide();
            });

            nextBtn.addEventListener("click", (e) => {
                e.preventDefault();
                nextSlide();
                startAutoSlide();
            });

            // Prevent image from blocking clicks
            document.querySelectorAll("button img").forEach(img => {
                img.style.pointerEvents = "none";
            });

            // Initialize
            updateSlide();
            startAutoSlide();
            const carousel = document.getElementById("carousel");

            // Enable vertical scroll when touching the carousel
            carousel.addEventListener("touchstart", (e) => {
                e.stopPropagation(); // Allow scroll
            });
        });
    </script>


    <script>
        function changeColor(colorId, imageUrl, element) {
            // Update the main product image
            document.getElementById('mainImage').src = imageUrl;

            // Remove the black border from all color buttons
            document.querySelectorAll('.colorButton').forEach(button => {
                button.classList.remove('border-black', 'ring-2', 'ring-gray-900');
            });

            // Add a black border to the selected button
            element.classList.add('border-black', 'ring-2', 'ring-gray-900');
        }
    </script>


    <script>
        // Function to change product image and update sizes dynamically
        function changeColors(colorId, imageUrl) {
            // Update the main image
            document.getElementById("mainImage").src = imageUrl;

            // Hide all sizes first
            document.querySelectorAll(".sizeButton").forEach(button => {
                button.style.display = "none";
            });

            // Show sizes that match the selected color
            document.querySelectorAll(`.sizeButton[data-color='${colorId}']`).forEach(button => {
                button.style.display = "inline-block";
            });
        }

        // Ensure the correct sizes are shown when the page loads (for the first image)
        document.addEventListener("DOMContentLoaded", function() {
            let firstColorButton = document.querySelector(".colorButton");
            if (firstColorButton) {
                firstColorButton.click(); // Simulate a click on the first color
            }
        });
    </script>



    {{--  <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Quantity controls
            const decreaseBtn = document.getElementById('decreaseQty');
            const increaseBtn = document.getElementById('increaseQty');
            const quantityDisplay = document.getElementById('quantity');
            const quantityInput = document.getElementById('productQuantity');

            decreaseBtn.addEventListener('click', function() {
                let currentQty = parseInt(quantityDisplay.textContent);
                if (currentQty > 1) {
                    currentQty--;
                    quantityDisplay.textContent = currentQty;
                    quantityInput.value = currentQty;
                }
            });

            increaseBtn.addEventListener('click', function() {
                let currentQty = parseInt(quantityDisplay.textContent);
                currentQty++;
                quantityDisplay.textContent = currentQty;
                quantityInput.value = currentQty;
            });

            // Color selection
            const colorButtons = document.querySelectorAll('.colorButton');
            const selectedColorInput = document.getElementById('selectedColor');

            colorButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Extract color ID from the onclick attribute
                    const onclickAttr = this.getAttribute('onclick');
                    const colorId = onclickAttr.match(/changeColors\('(\d+)'/)[1];

                    // Set the selected color
                    selectedColorInput.value = colorId;

                    // Add visual indication of selection
                    colorButtons.forEach(btn => btn.classList.remove('ring-2', 'ring-offset-2',
                        'ring-[#54114C]'));
                    this.classList.add('ring-2', 'ring-offset-2', 'ring-[#54114C]');
                });
            });

            // Size selection
            const sizeButtons = document.querySelectorAll('.sizeButton');
            const selectedSizeInput = document.getElementById('selectedSize');

            sizeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Get the size ID from a data attribute (you'll need to add this)
                    const sizeId = this.getAttribute('data-size-id');

                    // Set the selected size
                    selectedSizeInput.value = sizeId;

                    // Add visual indication of selection
                    sizeButtons.forEach(btn => btn.classList.remove('bg-[#54114C]', 'text-white'));
                    this.classList.add('bg-[#54114C]', 'text-white');
                });
            });
        });

        // Modify your existing changeColors function to update the size options
        function changeColors(colorId, imagePath) {
            // Update the main image
            document.getElementById('mainImage').src = imagePath;

            // Update the selected color input
            document.getElementById('selectedColor').value = colorId;

            // Show only sizes available for this color
            const sizeButtons = document.querySelectorAll('.sizeButton');
            sizeButtons.forEach(button => {
                if (button.getAttribute('data-color') === colorId) {
                    button.style.display = 'block';
                } else {
                    button.style.display = 'none';
                }
            });

            // Reset size selection
            document.getElementById('selectedSize').value = '';
            sizeButtons.forEach(btn => btn.classList.remove('bg-[#54114C]', 'text-white'));
        }
    </script>  --}}

    <script>
        // Add this to your product detail page JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            // Quantity controls
            const decreaseBtn = document.getElementById('decreaseQty');
            const increaseBtn = document.getElementById('increaseQty');
            const quantityDisplay = document.getElementById('quantity');
            const quantityInput = document.getElementById('productQuantity');

            decreaseBtn.addEventListener('click', function() {
                let currentQty = parseInt(quantityDisplay.textContent);
                if (currentQty > 1) {
                    currentQty--;
                    quantityDisplay.textContent = currentQty;
                    quantityInput.value = currentQty;
                }
            });

            increaseBtn.addEventListener('click', function() {
                let currentQty = parseInt(quantityDisplay.textContent);
                currentQty++;
                quantityDisplay.textContent = currentQty;
                quantityInput.value = currentQty;
            });

            // Color selection
            const colorButtons = document.querySelectorAll('.colorButton');
            const selectedColorInput = document.getElementById('selectedColor');

            colorButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Extract color ID from the onclick attribute
                    const onclickAttr = this.getAttribute('onclick');
                    const colorId = onclickAttr.match(/changeColors\('(\d+)'/)[1];

                    // Set the selected color
                    selectedColorInput.value = colorId;

                    // Add visual indication of selection
                    colorButtons.forEach(btn => btn.classList.remove('ring-2', 'ring-offset-2',
                        'ring-[#54114C]'));
                    this.classList.add('ring-2', 'ring-offset-2', 'ring-[#54114C]');

                    // Reset size selection when color changes
                    document.getElementById('selectedSize').value = '';
                    document.querySelectorAll('.sizeButton').forEach(btn => {
                        btn.classList.remove('bg-[#54114C]', 'text-white');
                    });
                });
            });

            // Size selection
            const sizeButtons = document.querySelectorAll('.sizeButton');
            const selectedSizeInput = document.getElementById('selectedSize');

            sizeButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default button behavior

                    // Get the size ID from data attribute
                    const sizeId = this.getAttribute('data-size-id');

                    // Set the selected size
                    selectedSizeInput.value = sizeId;

                    // Add visual indication of selection
                    sizeButtons.forEach(btn => btn.classList.remove('bg-[#54114C]', 'text-white'));
                    this.classList.add('bg-[#54114C]', 'text-white');

                    console.log('Selected size ID:', sizeId); // Debug log
                });
            });

            // Show the first color's sizes by default if available
            const firstColorButton = document.querySelector('.colorButton');
            if (firstColorButton) {
                const onclickAttr = firstColorButton.getAttribute('onclick');
                const colorId = onclickAttr.match(/changeColors\('(\d+)'/)[1];
                changeColors(colorId, firstColorButton.getAttribute('data-image'));
            }
        });

        // Modify your existing changeColors function to update the size options
        function changeColors(colorId, imagePath) {
            // Update the main image
            document.getElementById('mainImage').src = imagePath;

            // Update the selected color input
            document.getElementById('selectedColor').value = colorId;

            // Show only sizes available for this color
            const sizeButtons = document.querySelectorAll('.sizeButton');
            let firstSizeButton = null;

            sizeButtons.forEach(button => {
                if (button.getAttribute('data-color') === colorId) {
                    button.style.display = 'block';
                    if (!firstSizeButton) {
                        firstSizeButton = button;
                    }
                } else {
                    button.style.display = 'none';
                }
            });

            // Reset size selection
            document.getElementById('selectedSize').value = '';
            sizeButtons.forEach(btn => btn.classList.remove('bg-[#54114C]', 'text-white'));

            // Optionally select the first size by default
            if (firstSizeButton) {
                firstSizeButton.classList.add('bg-[#54114C]', 'text-white');
                document.getElementById('selectedSize').value = firstSizeButton.getAttribute('data-size-id');
            }
        }
    </script>

    {{--  <script>
        // Add this to your product detail page JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            // Quantity controls
            const decreaseBtn = document.getElementById('decreaseQty');
            const increaseBtn = document.getElementById('increaseQty');
            const quantityDisplay = document.getElementById('quantity');
            const quantityInput = document.getElementById('productQuantity');

            // Make sure buttons are type="button" to prevent form submission
            if (decreaseBtn) decreaseBtn.setAttribute('type', 'button');
            if (increaseBtn) increaseBtn.setAttribute('type', 'button');

            decreaseBtn.addEventListener('click', function(e) {
                // Prevent any default behavior
                e.preventDefault();
                e.stopPropagation();

                let currentQty = parseInt(quantityDisplay.textContent);
                if (currentQty > 1) {
                    currentQty--;
                    quantityDisplay.textContent = currentQty;
                    quantityInput.value = currentQty;
                }

                // Prevent the event from propagating
                return false;
            });

            increaseBtn.addEventListener('click', function(e) {
                // Prevent any default behavior
                e.preventDefault();
                e.stopPropagation();

                let currentQty = parseInt(quantityDisplay.textContent);
                currentQty++;
                quantityDisplay.textContent = currentQty;
                quantityInput.value = currentQty;

                // Prevent the event from propagating
                return false;
            });

            // Color selection
            const colorButtons = document.querySelectorAll('.colorButton');
            const selectedColorInput = document.getElementById('selectedColor');

            colorButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Extract color ID from the onclick attribute
                    const onclickAttr = this.getAttribute('onclick');
                    const colorId = onclickAttr.match(/changeColors\('(\d+)'/)[1];

                    // Set the selected color
                    selectedColorInput.value = colorId;

                    // Add visual indication of selection
                    colorButtons.forEach(btn => btn.classList.remove('ring-2', 'ring-offset-2',
                        'ring-[#54114C]'));
                    this.classList.add('ring-2', 'ring-offset-2', 'ring-[#54114C]');

                    // Reset size selection when color changes
                    document.getElementById('selectedSize').value = '';
                    document.querySelectorAll('.sizeButton').forEach(btn => {
                        btn.classList.remove('bg-[#54114C]', 'text-white');
                    });
                });
            });

            // Size selection
            const sizeButtons = document.querySelectorAll('.sizeButton');
            const selectedSizeInput = document.getElementById('selectedSize');

            sizeButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default button behavior

                    // Get the size ID from data attribute
                    const sizeId = this.getAttribute('data-size-id');

                    // Set the selected size
                    selectedSizeInput.value = sizeId;

                    // Add visual indication of selection
                    sizeButtons.forEach(btn => btn.classList.remove('bg-[#54114C]', 'text-white'));
                    this.classList.add('bg-[#54114C]', 'text-white');

                    console.log('Selected size ID:', sizeId); // Debug log
                });
            });

            // Show the first color's sizes by default if available
            const firstColorButton = document.querySelector('.colorButton');
            if (firstColorButton) {
                const onclickAttr = firstColorButton.getAttribute('onclick');
                const colorId = onclickAttr.match(/changeColors\('(\d+)'/)[1];
                changeColors(colorId, firstColorButton.getAttribute('data-image'));
            }
        });

        // Modify your existing changeColors function to update the size options
        function changeColors(colorId, imagePath) {
            // Update the main image
            document.getElementById('mainImage').src = imagePath;

            // Update the selected color input
            document.getElementById('selectedColor').value = colorId;

            // Show only sizes available for this color
            const sizeButtons = document.querySelectorAll('.sizeButton');
            let firstSizeButton = null;

            sizeButtons.forEach(button => {
                if (button.getAttribute('data-color') === colorId) {
                    button.style.display = 'block';
                    if (!firstSizeButton) {
                        firstSizeButton = button;
                    }
                } else {
                    button.style.display = 'none';
                }
            });

            // Reset size selection
            document.getElementById('selectedSize').value = '';
            sizeButtons.forEach(btn => btn.classList.remove('bg-[#54114C]', 'text-white'));

            // Optionally select the first size by default
            if (firstSizeButton) {
                firstSizeButton.classList.add('bg-[#54114C]', 'text-white');
                document.getElementById('selectedSize').value = firstSizeButton.getAttribute('data-size-id');
            }
        }
    </script>  --}}


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addressDivs = document.querySelectorAll('.address');
            let selectedAddress = document.querySelector('.address:first-child');

            addressDivs.forEach(div => {
                div.addEventListener('click', function() {
                    // Remove selection from all addresses
                    addressDivs.forEach(d => {
                        const selectionDiv = d.querySelector('.selection');
                        selectionDiv.innerHTML =
                            '<div class="circle w-[25px] h-[25px] bg-[#DADDDE] rounded-full"></div>';
                    });

                    // Add selection to clicked address
                    const selectionDiv = this.querySelector('.selection');
                    selectionDiv.innerHTML =
                        '<img src="{{ asset('frontend/assets/images/checked.svg') }}" alt="" class="w-[25px] h-[25px]">';

                    // Update selectedAddress
                    selectedAddress = this;

                    // You might want to store the selected address ID in a hidden input
                    const addressId = this.dataset.addressId;
                    document.getElementById('selectedAddressId').value = addressId;
                });
            });
        });
    </script>





    <script>
        // all product filter dropdown

        function toggleFilter(id) {
            let element = document.getElementById(id);
            if (element.classList.contains("hidden")) {
                element.classList.remove("hidden");
            } else {
                element.classList.add("hidden");
            }
        }

        function clearFilters() {
            document
                .querySelectorAll('input[type="checkbox"]')
                .forEach((checkbox) => (checkbox.checked = false));
        }

        // sort drop down

        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("carousel");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            prevBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: -360,
                    behavior: "smooth"
                });
            });

            nextBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: 360,
                    behavior: "smooth"
                });
            });
        });
        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("carousel2");
            const prevBtn = document.getElementById("prevBtn2");
            const nextBtn = document.getElementById("nextBtn2");

            prevBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: -360,
                    behavior: "smooth"
                });
            });

            nextBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: 360,
                    behavior: "smooth"
                });
            });
        });
    </script>

    {{--  <script>
        document.addEventListener("DOMContentLoaded", function() {
            const placeOrderBtn = document.getElementById("placeOrderBtn");
            const orderPopup = document.getElementById("orderSuccessPopup");
            const closePopup = document.getElementById("closePopup");
            const closePopupBtn = document.getElementById("closePopupBtn"); // Cross button
            const popupContent = document.getElementById("popupContent");

            // Show popup when "Place Order" button is clicked
            placeOrderBtn.addEventListener("click", function(event) {
                event.preventDefault(); // Prevent default navigation
                orderPopup.classList.remove("hidden");
            });

            // Close popup when clicking "Continue Shopping"
            closePopup.addEventListener("click", function() {
                orderPopup.classList.add("hidden");
            });

            // Close popup when clicking the "✖" button
            closePopupBtn.addEventListener("click", function() {
                orderPopup.classList.add("hidden");
            });

            // Close popup when clicking outside the popup content
            orderPopup.addEventListener("click", function(event) {
                if (!popupContent.contains(event.target)) {
                    orderPopup.classList.add("hidden");
                }
            });
        });
    </script>  --}}
    <script>
        document.getElementById('closePopup')?.addEventListener('click', () => {
            document.getElementById('orderSuccessPopup').style.display = 'none';
        });

        document.getElementById('closePopupBtn')?.addEventListener('click', () => {
            document.getElementById('orderSuccessPopup').style.display = 'none';
        });
    </script>








    {{--  <script>
        document.addEventListener("DOMContentLoaded", () => {
            function updateTotals() {
                let netTotal = 0;
                document.querySelectorAll(".quantity").forEach((element) => {
                    const quantity = parseInt(element.textContent);
                    const price = 12;
                    const total = quantity * price;
                    element.closest(".bg-gray-100, tr").querySelector(".total-price")?.textContent =
                        `$${total}`;
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

    {{--  <script>
        const counter = document.getElementById("counter");
        const increaseBtn = document.getElementById("increase");
        const decreaseBtn = document.getElementById("decrease");

        let count = 120; // Initial value

        increaseBtn.addEventListener("click", () => {
            count++;
            counter.textContent = count;
        });

        decreaseBtn.addEventListener("click", () => {
            if (count > 0) { // Prevents negative values
                count--;
                counter.textContent = count;
            }
        });

        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("carousel");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            prevBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: -360,
                    behavior: "smooth"
                });
            });

            nextBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: 360,
                    behavior: "smooth"
                });
            });
        });
    </script>  --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("carousel");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            prevBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: -360,
                    behavior: "smooth"
                });
            });

            nextBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: 360,
                    behavior: "smooth"
                });
            });
        });
        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("carousel2");
            const prevBtn = document.getElementById("prevBtn2");
            const nextBtn = document.getElementById("nextBtn2");

            prevBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: -360,
                    behavior: "smooth"
                });
            });

            nextBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: 360,
                    behavior: "smooth"
                });
            });
        });
    </script>


    {{--  <script>
        document.addEventListener("DOMContentLoaded", () => {
            function updateTotals() {
                let netTotal = 0;
                document.querySelectorAll(".quantity").forEach((element) => {
                    const quantity = parseInt(element.textContent);
                    const price = 12;
                    const total = quantity * price;
                    element.closest(".bg-gray-100, tr").querySelector(".total-price")?.textContent =
                        `$${total}`;
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
    <script>
        const counter = document.getElementById("counter");
        const increaseBtn = document.getElementById("increase");
        const decreaseBtn = document.getElementById("decrease");

        let count = 120; // Initial value

        increaseBtn.addEventListener("click", () => {
            count++;
            counter.textContent = count;
        });

        decreaseBtn.addEventListener("click", () => {
            if (count > 0) { // Prevents negative values
                count--;
                counter.textContent = count;
            }
        });

        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("carousel");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            prevBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: -360,
                    behavior: "smooth"
                });
            });

            nextBtn.addEventListener("click", () => {
                carousel.scrollBy({
                    left: 360,
                    behavior: "smooth"
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const addAddressButton = document.querySelector(".addAddressButton button");
            const popup = document.getElementById("addressPopup");
            const closePopup = document.getElementById("closePopup"); // Get the cancel button

            addAddressButton.addEventListener("click", () => {
                popup.classList.remove("hidden");
            });

            closePopup.addEventListener("click", () => {
                popup.classList.add("hidden");
            });

            // Optional: Close popup when clicking outside
            popup.addEventListener("click", (e) => {
                if (e.target === popup) {
                    popup.classList.add("hidden");
                }
            });
        });
    </script>






</body>

</html>
