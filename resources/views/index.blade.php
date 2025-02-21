@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Hero Section with Image Slider -->
<main class="relative w-full h-screen overflow-hidden hero1 bg-[#fff]">

    <!-- Swiper -->
    <div class="absolute swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative min-h-screen flex items-center swipeS">
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
                                Jonic <br />
                                <span class="text-4xl bg-gradient-to-br from-blue-500 to-transparent bg-[#d9261c] bg-clip-text text-transparent">
                                    website
                                </span>
                            </h1>
                            <p class="mt-4 text-lg">
                                Lorem ipsum, dolor .
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Darken the background image -->
                <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
            </div>

            <div class="swiper-slide relative min-h-screen flex items-center swipeS">
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
                                Jonic <br />
                                <span class="text-4xl bg-gradient-to-br from-blue-500 to-transparent bg-[#d9261c] bg-clip-text text-transparent">
                                    website
                                </span>
                            </h1>
                            <p class="mt-4 text-lg">
                                Lorem ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Darken the background image -->
                <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
            </div>

            <div class="swiper-slide relative min-h-screen flex items-center swipeS">
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
                                Jonic<br />
                                <span class="text-4xl bg-gradient-to-br from-[#fff] to-[#d9261c] bg-clip-text text-transparent">
                                    website
                                </span>
                            </h1>
                            <p class="mt-4 text-lg">
                                Lorem ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Darken the background image -->
                <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
            </div>



        </div>

        <div class="swiper-pagination"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </div>


</main>
<!-- End of Hero Section with Image Slider -->


<!-- About Section -->
<section class="relative w-full h-screen hero2 flex flex-row items-center">
    <div class="left h-full flex justify-center items-center">

        <div class="absolute swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image1.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image2.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image3.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image4.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image5.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image6.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image7.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image8.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/products/image9.jpg') }}" alt="">
                    <h3 class="absolute">slide 1</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="right h-full overflow-hidden  ">

        <div class="relative flex flex-col sm:flex-row justify-space-between items-center p-6 sm:px-4 overflow-hidden h-full w-full">

            <div class="text-black text-left flex flex-col justify-around textHolder">
                <h1 class="text-4xl sm:text-6xl font-bold leading-tight h1">
                    About <span class="text-6xl bg-gradient-to-br from-[#7fc9a0] to-transparent bg-clip-text text-transparent text-right">Us</span>
                </h1>
                <p class="text-lg text-justify bg-white p-8 m-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil iste temporibus maiores similique. Maiores laboriosam accusamus ab esse similique excepturi quo dolore ipsum exercitationem ipsa, eaque vitae velit inventore itaque rem at harum, illo vero minus repudiandae, cumque sequi. Iusto facere deserunt, totam impedit iste id ullam incidunt repellendus eius? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptatem deleniti iure? In officiis saepe consectetur ad tempora non vel!
                </p>

                <button class="bg-[#d9261c] text-white px-5 py-2 rounded-full justify-self-center hover:bg-[#7fc9a0]  m-4 btn">Read More</button>
            </div>
        </div>
    </div>
</section>


@endsection