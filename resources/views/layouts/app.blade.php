<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jonic website</title>

    <!-- tailwind -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

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

<body class="relative font-[Poppins] bg-gradient-to-t from-[#7fc9a0] to-[#fff] h-screen">

    <!-- Header -->
    @include('snippets.header')

    <!-- Hero Section with Image Slider -->
    <section class="relative w-full h-screen overflow-hidden hero1">

        <!-- Swiper -->
        <div class="absolute swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative min-h-screen flex items-center">
                    <!-- Image as background -->
                    <img src="{{ asset('assets/images/products/image1.jpg') }}" alt="Background Image" class="absolute inset-0 object-cover w-full h-full z-0 ">

                    <!-- Content (Text + Form) stacked on top -->
                    <div class="relative z-10 flex flex-col sm:flex-row justify-evenly items-center px-6 sm:px-16 h-full">
                        <!-- Text Block -->
                        <div class="sm:w-1/2 text-white text-left">

                        </div>

                        <!--  Card -->
                        <div class="sm:w-1/3 bg-[#7fc9a0] p-8 rounded-lg shadow-lg">
                            <div class="sm:w-1/2 text-white text-left">
                                <h1 class="text-5xl sm:text-6xl font-bold leading-tight">
                                    Take Your Business <br />
                                    <span class="text-4xl bg-gradient-to-br from-blue-500 to-transparent bg-clip-text text-transparent">
                                        To The Next Level
                                    </span>
                                </h1>
                                <p class="mt-4 text-lg">
                                    Discover the power of content creation & how you can be the talk of your city!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Darken the background image -->
                    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
                </div>

                <div class="swiper-slide relative min-h-screen flex items-center">
                    <!-- Image as background -->
                    <img src="{{ asset('assets/images/products/image11.jpg') }}" alt="Background Image" class="absolute inset-0 object-cover w-full h-full z-0 ">

                    <!-- Content (Text + Form) stacked on top -->
                    <div class="relative z-10 flex flex-col sm:flex-row justify-evenly items-center px-6 sm:px-16 h-full">
                        <div class="sm:w-1/2 text-white text-left">

                        </div>
                        <!--  Card -->
                        <div class="sm:w-1/3 bg-[#7fc9a0] p-8 rounded-lg shadow-lg">
                            <div class="sm:w-1/2 text-white text-left">
                                <h1 class="text-5xl sm:text-6xl font-bold leading-tight">
                                    Take Your Business <br />
                                    <span class="text-4xl bg-gradient-to-br from-blue-500 to-transparent bg-clip-text text-transparent">
                                        To The Next Level
                                    </span>
                                </h1>
                                <p class="mt-4 text-lg">
                                    Discover the power of content creation & how you can be the talk of your city!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Darken the background image -->
                    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
                </div>

                <div class="swiper-slide relative min-h-screen flex items-center">
                    <!-- Image as background -->
                    <img src="{{ asset('assets/images/products/image21.jpg') }}" alt="Background Image" class="absolute inset-0 object-cover w-full h-full z-0 ">

                    <!-- Content (Text + Form) stacked on top -->
                    <div class="relative z-10 flex flex-col sm:flex-row justify-evenly items-center px-6 sm:px-16 h-full">
                        <div class="sm:w-1/2 text-white text-left">

                        </div>
                        <!--  Card -->
                        <div class="sm:w-1/3 bg-[#7fc9a0] p-8 rounded-lg shadow-lg">
                            <div class="sm:w-1/2 text-white text-left">
                                <h1 class="text-5xl sm:text-6xl font-bold leading-tight">
                                    Take Your Business <br />
                                    <span class="text-4xl bg-gradient-to-br from-blue-500 to-transparent bg-clip-text text-transparent">
                                        To The Next Level
                                    </span>
                                </h1>
                                <p class="mt-4 text-lg">
                                    Discover the power of content creation & how you can be the talk of your city!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Darken the background image -->
                    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
                </div>



            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="autoplay-progress">
                <svg viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="20"></circle>
                </svg>
                <span></span>
            </div>
        </div>


    </section>

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
            }
        });
    </script>
</body>

</html>