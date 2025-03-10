<header class="md:sticky md:top-0 bg-white z-50">
    <nav class="flex justify-between items-center w-[92%] mx-auto">
        <div class="">
            <img class="w-10" src="{{ asset('assets/images/logo1.jpg') }}" alt="...">
        </div>
        <div class="nav-links duration-500 md:static absolute md:min-h-fit bg-white min-h-[40vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5 z-50">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                <li><a class="hover:text-gray-500" href="#">Home</a></li>
                <li><a class="hover:text-gray-500" href="#">About</a></li>
                <li><a class="hover:text-gray-500" href="#">Services</a></li>
                <li><a class="hover:text-gray-500" href="#">Contact</a></li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <button class="bg-[#7fc9a0] transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#427157] text-white px-5 py-2 rounded ">sign in</button>
            <ion-icon onclick="toggleMenu(this)"  name="menu-outline" class="text-3xl cursor-pointer md:hidden"></ion-icon>
        </div>
    </nav>
</header>