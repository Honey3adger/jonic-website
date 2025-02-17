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
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }}" />

    <!-- swiper css  -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" />




    <!-- Swiper CSS (from CDN) -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">



    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</head>

<body class="relative font-sans bg-gray-100">
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] mx-auto ">
            <div class="">
                <img class="w-10" src="{{ asset('assets/images/logo1.jpg') }}" alt="...">
            </div>
            <div class="nav-links duration-500 md:static absolute md:min-h-fit bg-white min-h-[40vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li><a class="hover:text-gray-500" href="#">Home</a></li>
                    <li><a class="hover:text-gray-500" href="#">About</a></li>
                    <li><a class="hover:text-gray-500" href="#">Services</a></li>
                    <li><a class="hover:text-gray-500" href="#">Contact</a></li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <button class="bg-[#d9261c] text-white px-5 py-2 rounded-full hover:bg-[#7fc9a0]">sign in</button>
                <ion-icon onclick="toggleMenu(this)" name="menu-outline" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>




    <!-- Hero Section with Image Slider -->
    <div class="relative w-full h-screen overflow-hidden">

    <h1 class="absolute z-40">Welcome to My Website</h1>

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
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

        

        <!-- <div class="absolute inset-0 flex transition-transform duration-700 ease-in-out" id="slider">
            <img class="w-screen h-screen object-cover" src="{{ asset('assets/images/products/image1.jpg') }}" alt="Slide 1">
            <img class="w-full h-screen object-cover" src="{{ asset('assets/images/products/image14.jpg') }}" alt="Slide 2">
            <img class="w-full h-screen object-cover" src="{{ asset('assets/images/products/image9.jpg') }}" alt="Slide 3">
            <img class="w-full h-screen object-cover" src="{{ asset('assets/images/products/image31.jpg') }}" alt="Slide 4">
            <img class="w-full h-screen object-cover" src="{{ asset('assets/images/products/image23.jpg') }}" alt="Slide 5">
        </div>

        <div class="absolute inset-0 flex flex-col justify-center items-center text-white bg-black bg-opacity-50 px-6 text-center">
            <h1 class="text-5xl font-bold mb-4">Take Your Business to the Next Level</h1>
            <p class="text-lg max-w-xl">Discover the power of content creation and how you can be the talk of your city!</p>
            <button class="mt-6 bg-blue-500 px-6 py-3 rounded-full text-white hover:bg-blue-600 transition">Get Started</button>
        </div>

        <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-3 rounded-full text-black" onclick="prevSlide()">&#10094;</button>
        <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white p-3 rounded-full text-black" onclick="nextSlide()">&#10095;</button> -->
    </div>

    <!-- Swiper -->


    <!-- 
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script> -->

    <!-- <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");

        const swiperEl = document.querySelector("swiper-container");
        swiperEl.addEventListener("autoplaytimeleft", (e) => {
            const [swiper, time, progress] = e.detail;
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        });
    </script> -->


    <!-- <script>
        const slider = document.getElementById('slider');
        let currentIndex = 0;

        function showSlide(index) {
            const slides = slider.children;
            if (index >= slides.length) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = slides.length - 1;
            } else {
                currentIndex = index;
            }
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        setInterval(nextSlide, 5000); // Auto-slide every 5 seconds
    </script> -->


    <!-- Swiper JS (from CDN) -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- swiper bundle  -->
    <!-- <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> -->

    <!-- Initialize Swiper -->
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
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