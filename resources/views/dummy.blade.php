<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav
        class="flex items-center justify-between md:px-32 px-6 border-b border-slate-200 py-4 bg-slate-100 transition-all duration-500 sticky top-0 left-0 z-[999]">
        <img src={{ asset('image/logo/logo.svg') }} class=" cursor-pointer" alt="Logo">
        {{-- dasktop menu --}}
        <div class="space-x-8 md:block hidden">
            <a href="#" class="hover:text-indigo-500">Home</a>
            <a href="#" class="hover:text-indigo-500">Cars</a>
            <a href="#" class="hover:text-indigo-500">MyBookings</a>
            <a href="#" class="hover:text-indigo-500">Dashboard</a>
            <button
                class="bg-indigo-500 px-8 py-2 text-white rounded hover:bg-indigo-600 cursor-pointer transition-all duration-200">Login</button>
        </div>

        <button id="menu-btn" class="cursor-pointer md:hidden block">Menu</button>



        {{-- mobile menu --}}

        <div class="w-full bg-slate-100 h-screen border-b border-slate-200 fixed top-0 left-0 flex flex-col items-center justify-center gap-8 transition-all duration-500 -translate-x-full"
            id="mobile-menu">

            <a href="#" class="hover:text-indigo-500">Home</a>
            <a href="#" class="hover:text-indigo-500">Cars</a>
            <a href="#" class="hover:text-indigo-500">MyBookings</a>
            <a href="#" class="hover:text-indigo-500">Dashboard</a>
            <button
                class="bg-indigo-500 px-8 py-2 text-white rounded hover:bg-indigo-600 cursor-pointer transition-all duration-200">Login</button>
            <button class="cursor-pointer md:hidden block absolute top-8 right-8" id="close-menu">x</button>

        </div>

    </nav>


    <main>
        <section class="hero bg-slate-100 w-full flex flex-col justify-center items-center min-h-screen p-7 md:p-0">
            <div class="flex flex-col gap-4 max-w-3xl text-center">
                <h1 class="text-5xl font-bold">Luxury cars on Rent</h1>
                <div
                    class="bg-white shadow-xl rounded-2xl p-9 flex md:gap-7 md:flex-row flex-col gap-6 md:items-center justify-center items-start my-8">
                    <div class="flex flex-col gap-1 items-start">
                        <label>Location</label>
                        <select name="" class="border border-slate-300 px-3 py-2 rounded-md focus:outline-none">
                            <option value="">Select Location...</option>
                            <option value="delhi-ncr">Delhi NCR</option>
                            <option value="uttar Pradesh">Uttar Pradesh</option>
                        </select>

                    </div>


                    <div class="flex flex-col gap-1 items-start">
                        <label>Pickup Date</label>
                        <input type="date" class="border border-slate-300 px-3 py-2 rounded-md focus:outline-none">

                    </div>

                    <div class="flex flex-col gap-1 items-start">
                        <label>Return Date</label>
                        <input type="date" class="border border-slate-300 px-3 py-2 rounded-md focus:outline-none">
                    </div>


                    <div class="md:mt-6">
                        <button type="submit"
                            class="bg-indigo-500 px-9 rounded text-white hover:bg-indigo-600 py-2 cursor-pointer transition-all duration-200">Search</button>
                    </div>
                </div>
            </div>



            <img src="{{ asset('image/main_car.png') }}" class="md:h-85 h-45 md:mt-10" alt="">
            </div>
        </section>


        {{-- Featured Vehicles Section --}}
        <section class="py-28">
            <div class="flex flex-col gap-3 items-center text-center">
                <h2 class="text-3xl md:text-[40px] font-bold">Featured Vehicles</h2>
                <p class="max-w-2xl text-sm md:text-base text-gray-500/90 px-5 md:px-0">Explore our selection of
                    premium
                    vehicles
                    available for your next adventure.</p>
            </div>

            <div class="grid md:grid-cols-4 grid-cols-1 gap-8 md:px-32 p-6 mt-8">
                <div
                    class="shadow-lg rounded-xl overflow-hidden group hover:-translate-y-1 transition-all duration-500 cursor-pointer">

                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('image/car_image1.png') }}" alt="car image"
                            class="w-full h-full object-cover transition-transform group-hover:scale-105" />
                        <p class="absolute top-4 left-4 bg-indigo-500 text-white text-xs px-2.5 py-1 rounded-full">
                            Available Now</p>

                        <div
                            class="px-3 py-2 rounded-lg text-white absolute right-4 bottom-4 bg-black/40 backdrop-blur-sm">
                            <span class="font-semibold">$160</span>
                            <span class="font-semibold text-white/80 text-sm">/day</span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-lg font-medium">BMW X5</h3>
                                <p class="text-sm text-muted-forground">SUV • 2006</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 mt-4 gap-y-2 text-gray-600">
                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Seats</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Hybrid</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Semi-Automatic</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Delhi</span>
                            </div>


                        </div>
                    </div>
                </div>

                <div
                    class="shadow-lg rounded-xl overflow-hidden group hover:-translate-y-1 transition-all duration-500 cursor-pointer">

                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('image/car_image2.png') }}" alt="car image"
                            class="w-full h-full object-cover transition-transform group-hover:scale-105" />
                        <p class="absolute top-4 left-4 bg-indigo-500 text-white text-xs px-2.5 py-1 rounded-full">
                            Available Now</p>

                        <div
                            class="px-3 py-2 rounded-lg text-white absolute right-4 bottom-4 bg-black/40 backdrop-blur-sm">
                            <span class="font-semibold">$160</span>
                            <span class="font-semibold text-white/80 text-sm">/day</span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-lg font-medium">BMW X5</h3>
                                <p class="text-sm text-muted-forground">SUV • 2006</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 mt-4 gap-y-2 text-gray-600">
                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Seats</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Hybrid</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Semi-Automatic</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Delhi</span>
                            </div>


                        </div>
                    </div>
                </div>
                <div
                    class="shadow-lg rounded-xl overflow-hidden group hover:-translate-y-1 transition-all duration-500 cursor-pointer">

                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('image/car_image3.png') }}" alt="car image"
                            class="w-full h-full object-cover transition-transform group-hover:scale-105" />
                        <p class="absolute top-4 left-4 bg-indigo-500 text-white text-xs px-2.5 py-1 rounded-full">
                            Available Now</p>

                        <div
                            class="px-3 py-2 rounded-lg text-white absolute right-4 bottom-4 bg-black/40 backdrop-blur-sm">
                            <span class="font-semibold">$160</span>
                            <span class="font-semibold text-white/80 text-sm">/day</span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-lg font-medium">BMW X5</h3>
                                <p class="text-sm text-muted-forground">SUV • 2006</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 mt-4 gap-y-2 text-gray-600">
                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Seats</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Hybrid</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Semi-Automatic</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Delhi</span>
                            </div>


                        </div>
                    </div>
                </div>

                <div
                    class="shadow-lg rounded-xl overflow-hidden group hover:-translate-y-1 transition-all duration-500 cursor-pointer">

                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset('image/car_image4.png') }}" alt="car image"
                            class="w-full h-full object-cover transition-transform group-hover:scale-105" />
                        <p class="absolute top-4 left-4 bg-indigo-500 text-white text-xs px-2.5 py-1 rounded-full">
                            Available Now</p>

                        <div
                            class="px-3 py-2 rounded-lg text-white absolute right-4 bottom-4 bg-black/40 backdrop-blur-sm">
                            <span class="font-semibold">$160</span>
                            <span class="font-semibold text-white/80 text-sm">/day</span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-lg font-medium">BMW X5</h3>
                                <p class="text-sm text-muted-forground">SUV • 2006</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 mt-4 gap-y-2 text-gray-600">
                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Seats</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Hybrid</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Semi-Automatic</span>
                            </div>

                            <div class="flex items-center text-sm text-muted-forground">
                                <img src="" alt="">
                                <span>Delhi</span>
                            </div>

                        </div>
                    </div>
                </div>
        </section>

        {{-- Banner section --}}
        <section
            class="banner bg-gradient-to-r from-[#615fff] to [#A9CFFF]  rounded-2xl overflow-hidden flex flex-col md:flex-row md:items-start items-center justify-between  pt-10 mx-6 md:mx-32 px-8">
            <div class="text-white">
                <h2 class="text-3xl font-medium">Do You Own a Luxury Car?</h2>
                <p class="mt-2">Mentize your vehicle effortlessly by listing it on CarRental.</p>
                <p class='mb-9'>We take care of insurance, driver verification and secure payments - so you can
                    earn passive income, stress-free</p>

                <a href=""
                    class="cursor-ponter bg-indigo-600 px-5 py-2.5 rounded-md shadow-2xl hover:bg-indigo-700 transition-all duration-200">List
                    Your
                    Car</a>

            </div>

            <img src="{{ asset('image/banner_car_image.png') }}" class="max-h-35 mt-10" alt="car">

        </section>


        {{-- Testimonials --}}
        <section class="testimonials py-28">
            <div class="flex flex-col gap-3 items-center text-center">
                <h2 class="text-3xl md:text-[40px] font-bold px-5 md:px-0">What Our Customers Say</h2>
                <p class="max-w-2xl text-sm md:text-base text-gray-500/90">Discover why discerning travelers
                    choose StayVenture for their luxury accommodations around the world.</p>
            </div>

            <div class="grid md:grid-cols-4 grid-cols-1 gap-12 mt-18 md:px-32 px-6">
                <div class="bg-white p-6 rounded-xl shadow-lg hover:-translate-y-1 transition-all duration-500">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('image/testimonial_image_1.png') }}" class="h-12 w-12 rounded-full" />
                        <div class="flex flex-col items-start">
                            <p class="text-xl">Kajal Kumari</p>
                            <p class="text-gray-500 text-sm">New Delhi</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-1 mt-4">
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                    </div>
                    <p class="text-gray-500 max-w-90 mt-4 font-light">I highly recommend CarRental! Their
                        fleet is
                        amazing, and I always feel like I'm getting the best
                        deal with excellent service.</p>
                </div>


                <div class="bg-white p-6 rounded-xl shadow-lg hover:-translate-y-1 transition-all duration-500">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('image/testimonial_image_1.png') }}" class="h-12 w-12 rounded-full" />
                        <div class="flex flex-col items-start">
                            <p class="text-xl">Kajal Kumari</p>
                            <p class="text-gray-500 text-sm">New Delhi</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-1 mt-4">
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                    </div>
                    <p class="text-gray-500 max-w-90 mt-4 font-light">I highly recommend CarRental! Their
                        fleet is
                        amazing, and I always feel like I'm getting the best
                        deal with excellent service.</p>
                </div>


                <div class="bg-white p-6 rounded-xl shadow-lg hover:-translate-y-1 transition-all duration-500">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('image/testimonial_image_1.png') }}" class="h-12 w-12 rounded-full" />
                        <div class="flex flex-col items-start">
                            <p class="text-xl">Kajal Kumari</p>
                            <p class="text-gray-500 text-sm">New Delhi</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-1 mt-4">
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                    </div>
                    <p class="text-gray-500 max-w-90 mt-4 font-light">I highly recommend CarRental! Their
                        fleet is
                        amazing, and I always feel like I'm getting the best
                        deal with excellent service.</p>
                </div>


                <div class="bg-white p-6 rounded-xl shadow-lg hover:-translate-y-1 transition-all duration-500">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('image/testimonial_image_1.png') }}" class="h-12 w-12 rounded-full" />
                        <div class="flex flex-col items-start">
                            <p class="text-xl">Kajal Kumari</p>
                            <p class="text-gray-500 text-sm">New Delhi</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-1 mt-4">
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                        <span>*</span>
                    </div>
                    <p class="text-gray-500 max-w-90 mt-4 font-light">I highly recommend CarRental! Their
                        fleet is
                        amazing, and I always feel like I'm getting the best
                        deal with excellent service.</p>
                </div>

            </div>



        </section>

        {{-- Newslater --}}
        <section class="newslater py-28">
            <div class="flex flex-col items-center justify-center text-center space-y-2 my-10 mb-40 max-md:px-4">
                <h1 class="text-2xl font-bold md:text-4xl">Never Miss a Deal !</h1>
                <p class="text-gray-500/70 pb-8 md:text-lg"> Subscribe to get the latest offers, new arrivals, and
                    exclusive discounts</p>
                <form action="" method="post"
                    class="flex items-center justify-between w-full h-12 md:h-13 max-w-4xl">
                    <input type="text"
                        class="border border-gray-300 rounded-md h-full outline-none border-r-none px-3 text-gray-500 w-full"
                        placeholder="Enter Your Email Id" Required />

                    <button
                        class="px-8 md:px-12 text-white bg-indigo-500 hover:bg-indigo-600 cursor-pointer h-full transition-all duration-200">Subscribe</button>
                </form>

            </div>

        </section>

    </main>


    {{-- Footer --}}
    <footer>

    </footer>

</body>


<script>
    const menuBtn = document.querySelector("#menu-btn")
    const MobileMenu = document.querySelector("#mobile-menu");
    const closeMenu = document.querySelector("#close-menu")

    menuBtn.addEventListener("click", () => {
        MobileMenu.classList.remove("-translate-x-full")
    })

    closeMenu.addEventListener("click", () => {
        MobileMenu.classList.add("-translate-x-full")
    })
</script>


</html>
