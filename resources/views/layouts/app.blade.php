<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <title>jonic website</title> -->
    <title>@yield('title', 'Default Title')</title>
    <!-- favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo1.jpg') }}" type="image/x-icon">

    <!-- tailwind -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- animate css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.min.css') }}" />

    <!-- swiper css  -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" />

    <!-- Swiper CSS (from CDN) -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body class="relative font-[Poppins] bg-[#fff] h-screen">

    <!-- Header -->
    @include('snippets.header')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('snippets.footer')

    <!-- Swiper JS (from CDN) -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- swiper bundle  -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 
    <script>
        const navLinks = document.querySelector('.nav-links')

        function toggleMenu(e) {
            e.name = e.name === 'menu-outline' ? 'close' : 'menu-outline';

            navLinks.classList.toggle('top-[9%]')
        }



        // Initialize Swiper
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: true
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            },
        });

        var swiper2 = new Swiper(".mySwiper2", {
            effect: "cards",
            grabCursor: true,
            // loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            }
        });
    </script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script> -->
</body>

</html>