@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Hero Section with Image Slider -->
<main class="relative w-full h-[85vh] overflow-hidden hero1 bg-[#fff]">

    <!-- Swiper -->
    <div class="absolute swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide relative min-h-screen flex items-center swipeS">
                <!-- Image as background -->
                <img src="{{ asset('assets/images/products/image1.jpg') }}" alt="Background Image" class="absolute inset-0 object-cover w-full h-full z-0 ">


                <!-- Content (Text + Form) stacked on top -->
                <div class="relative z-10 flex flex-col sm:flex-row justify-evenly items-center px-6 sm:px-16 h-full w-full">
                    <div class="sm:w-1/3 text-white text-left">

                    </div>
                    <!--  Card -->
                    <div class="relative lg:w-1/3 w-full ml-14 mb-16 bg-[#7fc9a0] p-8 rounded-lg shadow-lg">
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
                <img src="{{ asset('assets/images/products/image11.jpg') }}" alt="Background Image" class="absolute inset-0 object-cover w-full h-full z-0 ">

                <!-- Content (Text + Form) stacked on top -->
                <div class="relative z-10 flex flex-col sm:flex-row justify-evenly items-center px-6 sm:px-16 h-full w-full">
                    <div class="sm:w-1/2 text-white text-left">

                    </div>
                    <!--  Card -->
                    <div class="relative lg:w-1/3 w-full ml-14 mb-16 bg-[#7fc9a0] p-8 rounded-lg shadow-lg">
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
                <div class="relative z-10 flex flex-col sm:flex-row justify-evenly items-center px-6 sm:px-16 h-full w-full">
                    <div class="sm:w-1/2 text-white text-left">

                    </div>
                    <!--  Card -->
                    <div class="relative lg:w-1/3 w-full ml-14 mb-16 bg-[#7fc9a0] p-8 rounded-lg shadow-lg">
                        <div class="sm:w-1/2 text-white text-left">
                            <h1 class="text-5xl sm:text-6xl font-bold leading-tight">
                                Jonic<br />
                                <span class="text-4xl  bg-[#d9261c] bg-clip-text text-transparent">
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
<section class="hero2 flex relative w-full h-screen justify-center items-center overflow-hidden  flex-col lg:h-screen md:h-[80%]  lg:flex-row lg:items-center md:flex-col p-2 ">
    <div class="left w-full h-[40%] lg:w-[45%] lg:h-full md:w-full md:h-[40%] flex justify-center items-center mt-11 lg:mt-0 sm:mt-20">

        <div class="absolute swiper mySwiper2 w-[250px] h-[280px] lg:w-[340px] lg:h-[420px] md:w-[500px] md:h-[300px] ">
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

    <div class="right w-full h-[60%] lg:w-[55%] lg:h-full md:w-full md:h-[55%]  overflow-hidden">

        <div class="relative flex flex-col w-full h-full pt-2 items-center lg:p-6 overflow-hidden lg:h-[70%] md:h-[85%] lg:mt-8 md:mt-0  ">

            <div class="absolute text-black text-left flex flex-col h-full justify-around">
                <div class="flex flex-col justify-around mt-4 lg:m-2 md:m-2">
                    <p class="text-sm sm:text-lg text-justify lg:pl-6 md:pl-4  pl-4">ABOUT US</p>
                    <h2 class="text-2xl sm:text-4xl font-bold text-justify lg:pl-6 md:pl-4  pl-4 leading-tight text-[#7fc9a0]">
                        WHO ARE WE
                        </h1>
                </div>

                <p class="relative text-sm sm:text-lg text-justify p-0 pl-4 pr-4 sm:pt-0 sm:pl-6 sm:pr-6 sm:m-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil iste temporibus maiores similique. Maiores laboriosam accusamus ab esse similique excepturi quo dolore ipsum exercitationem ipsa, eaque vitae velit inventore itaque rem at harum, illo vero minus repudiandae, cumque sequi. Iusto facere deserunt, totam impedit iste id ullam incidunt repellendus eius? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero voluptatem deleniti iure? In officiis saepe consectetur ad tempora non vel! 
                </p>

                <button class=" bg-[#7fc9a0]  transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 text-white px-5 py-2 rounded justify-self-center hover:bg-[#427157]  lg:m-4 md:m-2 btn">Read More</button>
            </div>
        </div>
    </div>
</section>


@endsection