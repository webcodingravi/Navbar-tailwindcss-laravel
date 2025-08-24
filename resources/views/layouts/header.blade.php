<!-- Navbar -->
<nav id="navbar"
    class="fixed top-0 left-0 bg-slate-100  w-full flex items-center justify-between px-4 md:px-16 lg:px-24 xl:px-32 transition-all duration-500 z-[9999] py-4 md:py-6 border border-b border-slate-300 border-r-0">

    <!-- Logo -->
    <a href="#" class="flex items-center gap-2">
        <img id="logo" src={{ asset('image/logo.webp') }} alt="logo" class="h-11">
    </a>

    <!-- Desktop Nav -->
    <div class="hidden md:flex items-center gap-4 lg:gap-8 text-gray-700">
        <a href="/" class="group flex flex-col gap-0.5">Home
            <div class="bg-slate-400 h-0.5 w-0 group-hover:w-full transition-all duration-300"></div>
        </a>
        <a href="/" class="group flex flex-col gap-0.5">About Us
            <div class="bg-slate-400  h-0.5 w-0 group-hover:w-full transition-all duration-300"></div>
        </a>
        <a href="/" class="group flex flex-col gap-0.5">Services
            <div class="bg-slate-400  h-0.5 w-0 group-hover:w-full transition-all duration-300"></div>
        </a>
        <a href="/" class="group flex flex-col gap-0.5">Contact Us
            <div class="bg-slate-400  h-0.5 w-0 group-hover:w-full transition-all duration-300"></div>
        </a>

    </div>



    <!-- Mobile Menu Button -->
    <div class="flex items-center gap-3 md:hidden">

        <button id="menuBtn" class="absolute top-4 right-4">
            <i class="ri-menu-3-line text-2xl"></i>

        </button>


    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="fixed top-0 left-0 w-full h-screen bg-slate-100 flex flex-col md:hidden items-center justify-center gap-6 font-medium text-gray-800 transition-all duration-500 -translate-x-full z-[9999]">
        <button id="closeMenu" class="absolute top-4 right-4">
            <i class="ri-close-large-line text-2xl"></i>
        </button>

        <a href="/">Home</a>
        <a href="/">About Us</a>
        <a href="/">Services</a>
        <a href="/">Contact Us</a>

    </div>
</nav>
