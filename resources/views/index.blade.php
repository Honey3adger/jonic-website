@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
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
                                Jonic<br />
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



        </div>

        <div class="swiper-pagination"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </div>


</section>
@endsection