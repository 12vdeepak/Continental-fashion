<!-- Load jQuery and Bootstrap Bundle -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>

<style>

</style>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-globe"></i> Language
            </a>
            <div class="dropdown-menu p-2 keep-open" aria-labelledby="languageDropdown">
                <div id="google_translate_element"></div>
            </div>
        </li>
    </ul>
</nav>

<!-- Google Translate Script -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,de', // Only English & German
            autoDisplay: false
        }, 'google_translate_element');

        setTimeout(function() {
            var selectElement = document.querySelector(".goog-te-combo");
            if (selectElement) {
                selectElement.classList.add("nav-link", "changeLanguage");
                selectElement.style.color = "#002c8f";
                selectElement.style.paddingLeft = "0";

                // Load saved language from localStorage
                var savedLang = localStorage.getItem("selectedLanguage");
                if (savedLang) {
                    selectElement.value = savedLang;
                    selectElement.dispatchEvent(new Event('change')); // Apply saved language
                }

                // Save selected language to localStorage when changed
                selectElement.addEventListener("change", function() {
                    localStorage.setItem("selectedLanguage", this.value);
                });
            }
        }, 1500);
    }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>

<script>
    $(document).ready(function() {
        // Prevent Bootstrap dropdown from closing when clicking inside Google Translate
        $(document).on('click', '.keep-open', function(event) {
            event.stopPropagation();
        });

        // Keep dropdown open when clicking the language selector
        $(document).on('click', '.goog-te-combo', function(event) {
            event.stopPropagation();
            $('.dropdown-menu').addClass('show');
        });

        // Ensure dropdown remains open when interacting with it
        $('#languageDropdown').on('click', function(e) {
            var $el = $(this).next('.dropdown-menu');
            if (!$el.hasClass('show')) {
                $el.addClass('show');
            } else {
                $el.removeClass('show');
            }
        });

        // Close dropdown when clicking outside
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.dropdown-menu, #languageDropdown').length) {
                $('.dropdown-menu').removeClass('show');
            }
        });

        // Remove Google Translate Navbar every 500ms to prevent it from showing again
        setInterval(function() {
            if ($('.goog-te-banner-frame').length > 0) {
                $('.goog-te-banner-frame').remove();
                $('body').css('top', '0px');
            }
        }, 500);
    });

    setInterval(function() {
        if (document.querySelector('.goog-te-banner-frame')) {
            document.querySelector('.goog-te-banner-frame').style.display = 'none';
            document.body.style.top = '0px';
        }
    }, 500);
</script>
