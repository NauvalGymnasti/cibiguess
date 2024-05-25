<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CibiGuess</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-[#002230] text-white overflow-x-hidden">
    <nav class="bg-[#002230]/40 border-b border-gray-700 backdrop-blur-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex items-center gap-5">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CibiGuess</span>
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="{{ url('/') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Play
                                Now</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-cyan-700 md:p-0 dark:text-white md:dark:hover:text-cyan-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Support
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button id="hamburger-btn" data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="gap-2 hidden w-full md:flex md:w-auto">
                <a class="inline-flex items-center gap-2 text-white border border-white bg-transparent hover:bg-cyan-600 hover:border-cyan-200 focus:ring-4 focus:ring-cyan-600 font-medium rounded-md text-sm px-5 py-2.5 focus:outline-none transition ease-in-out duration-75"
                    href="#">
                    Sign In
                </a>
                <a class="inline-flex items-center gap-2 text-white border border-cyan-200 bg-cyan-400 hover:bg-cyan-600 focus:ring-4 focus:ring-cyan-600 font-medium rounded-md text-sm px-5 py-2.5 focus:outline-none transition ease-in-out duration-75"
                    href="#">
                    Log In
                </a>
            </div>
            <!-- MOBILE MENU -->
            <div class="hidden transition-all ease-in-out w-0 h-0 [&.block]:w-full [&.block]:h-auto"
                id="navbar-hamburger">
                <ul class="flex flex-col mt-4 rounded-lg">
                    <li>
                        <a href="{{ url('/') }}"
                            class="block py-2 px-3 rounded hover:bg-cyan-500 transition-colors ease-in-out duration-100"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}"
                            class="block py-2 px-3 rounded hover:bg-cyan-500 transition-colors ease-in-out duration-100">Play
                            Now</a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}"
                            class="block py-2 px-3 rounded hover:bg-cyan-500 transition-colors ease-in-out duration-100">Support
                            Us</a>
                    </li>
                </ul>
                <div class="grid grid-cols-2 gap-2 w-full mt-4">
                    <a class="inline-flex justify-center items-center gap-2 text-white border border-white bg-transparent hover:bg-cyan-600 hover:border-cyan-200 focus:ring-4 focus:ring-cyan-600 font-medium rounded-md text-sm px-5 py-2.5 focus:outline-none transition ease-in-out duration-75"
                        href="{{ url('/') }}">
                        Sign In
                    </a>
                    <a class="inline-flex justify-center items-center gap-2 text-white border border-cyan-200 bg-cyan-400 hover:bg-cyan-600 focus:ring-4 focus:ring-cyan-600 font-medium rounded-md text-sm px-5 py-2.5 focus:outline-none transition ease-in-out duration-75"
                        href="{{ url('/') }}">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="container max-w-6xl mx-auto h-full relative p-4 md:p-2">
        <div class="absolute right-80 -top-60 p-64 -z-10">
            <div
                class="relative flex place-items-center before:absolute before:h-[240px] before:w-[800px] before:rounded-full before:bg-gradient-to-br before:from-white/25 before:to-transparent before:blur-3xl before:content-[''] before:-z-20 after:absolute after:-z-20 after:h-[580px] after:w-[1300px] after:rounded-full after:-translate-x-1/3 after:blur-3xl after:bg-gradient-to-br after:from-purple-600/45 after:via-purple-800/35 after:content-[''] before:lg:h-[540px]">
            </div>
        </div>

        <div class="max-w-2xl mx-auto text-center my-12">
            <p
                class="font-bold tracking-tighter bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-cyan-900 via-cyan-500 to-cyan-100 leading-snug bg-clip-text text-transparent text-4xl sm:text-5xl md:text-6xl">
                Play and Explore with Joy
            </p>
            <p class="my-4 text-sm sm:text-base">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a
                type specimen book.
            </p>
            <div class="flex justify-center gap-2">
                <a class="inline-flex items-center gap-2 text-white border border-white bg-transparent hover:bg-cyan-600 hover:border-cyan-200 focus:ring-4 focus:ring-cyan-600 font-medium rounded-md text-sm px-5 py-2.5 focus:outline-none transition ease-in-out duration-75"
                    href="#about">
                    Learn More
                </a>
                <a class="inline-flex items-center gap-2 text-white border border-cyan-200 bg-cyan-400 hover:bg-cyan-600 focus:ring-4 focus:ring-cyan-600 font-medium rounded-md text-sm px-5 py-2.5 focus:outline-none transition ease-in-out duration-75"
                    href="main-menu.html">
                    Play Now
                </a>
            </div>
        </div>

        <img src="{{ asset('images/laptop.png') }}" alt="Preview Tampilan Game" />
    </section>

    <section id="about" class="container max-w-6xl mx-auto h-full relative p-4 my-20 md:p-2">
        <div class="text-center">
            <p class="font-semibold tracking-tighter text-2xl md:text-4xl">
                What&#39;s CibiGuess
            </p>
            <p class="text-sm sm:text-base">
                Here&#39;s sneak peek and some information about CibiGuess
            </p>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div
                    class="swiper-slide bg-gray-800/80 border border-gray-700 backdrop-blur-md mt-8 p-4 rounded-lg md:!flex items-center gap-4 md:max-w-[800px]">
                    <img src="{{ asset('images/spot.jpg') }}" alt="Spot"
                        class="rounded-lg h-[400px] w-full md:h-[500px] md:w-[400px] object-cover" />
                    <div>
                        <p class="font-semibold tracking-tighter text-2xl">
                            Get to know about UPI in Cibiru
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ab magni natus consequatur
                            vero explicabo, rerum debitis blanditiis,
                            sapiente, rem provident sunt eos voluptate nihil
                            quisquam eius esse aperiam. Alias sunt
                            architecto quaerat quae laboriosam quasi
                            deserunt, illo commodi magni iste fugiat. Rem
                            dolore esse nesciunt exercitationem numquam
                            ipsum assumenda blanditiis.
                        </p>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-gray-800/80 border border-gray-700 backdrop-blur-md mt-8 p-4 rounded-lg md:!flex items-center gap-4 md:max-w-[800px]">
                    <img src="{{ asset('images/spot.jpg') }}" alt="Spot"
                        class="rounded-lg h-[400px] w-full md:h-[500px] md:min-w-[400px] object-cover" />
                    <div>
                        <p class="font-semibold tracking-tighter text-2xl">
                            Get to know about UPI in Cibiru
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ab magni natus consequatur
                            vero explicabo, rerum debitis blanditiis,
                            sapiente, rem provident sunt eos voluptate nihil
                            quisquam eius esse aperiam. Alias sunt
                            architecto quaerat quae laboriosam quasi
                            deserunt, illo commodi magni iste fugiat. Rem
                            dolore esse nesciunt exercitationem numquam
                            ipsum assumenda blanditiis.
                        </p>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-gray-800/80 border border-gray-700 backdrop-blur-md mt-8 p-4 rounded-lg md:!flex items-center gap-4 md:max-w-[800px]">
                    <img src="{{ asset('images/spot.jpg') }}" alt="Spot"
                        class="rounded-lg h-[400px] w-full md:h-[500px] md:min-w-[400px] object-cover" />
                    <div>
                        <p class="font-semibold tracking-tighter text-2xl">
                            Get to know about UPI in Cibiru
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Ab magni natus consequatur
                            vero explicabo, rerum debitis blanditiis,
                            sapiente, rem provident sunt eos voluptate nihil
                            quisquam eius esse aperiam. Alias sunt
                            architecto quaerat quae laboriosam quasi
                            deserunt, illo commodi magni iste fugiat. Rem
                            dolore esse nesciunt exercitationem numquam
                            ipsum assumenda blanditiis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container max-w-6xl mx-auto h-full relative p-4 my-20 md:p-2">
        <div class="text-center mb-5">
            <p class="font-semibold tracking-tighter text-2xl md:text-4xl">
                Meet Our Team
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <div class="bg-white rounded-lg relative overflow-hidden h-[300px] md:h-[600px] md:col-span-2">
                <img src="{{ asset('images/team-akwan.jpg') }}" alt="Photo Profile"
                    class="w-full h-full object-cover object-center bg-center" />
                <div
                    class="bg-gradient-to-b from-transparent to-cyan-700 w-full flex items-center p-2 absolute bottom-0 h-1/3">
                    <div>
                        <p class="font-semibold tracking-tighter text-xl md:text-2xl">
                            Akwan Cakra
                        </p>
                        <p class="text-sm sm:text-base">Developer</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg relative overflow-hidden h-[300px] md:h-[600px] md:col-span-2">
                <img src="{{ asset('images/user-default.jpg') }}" alt="Photo Profile"
                    class="w-full h-full object-cover object-center bg-center" />
                <div
                    class="bg-gradient-to-b from-transparent to-cyan-700 w-full flex items-center p-2 absolute bottom-0 h-1/3">
                    <div>
                        <p class="font-semibold tracking-tighter text-xl md:text-2xl">
                            Lusi Alifatul
                        </p>
                        <p class="text-sm sm:text-base">Developer</p>
                    </div>
                </div>
            </div>
            <div class="bg-cyan-400 h-[600px] rounded-lg hidden md:block"></div>
            <div class="bg-cyan-400 h-[600px] rounded-lg hidden md:block"></div>
            <div class="bg-white rounded-lg relative overflow-hidden h-[300px] md:h-[600px] md:col-span-2">
                <img src="{{ asset('images/user-default.jpg') }}" alt="Photo Profile"
                    class="w-full h-full object-cover object-center bg-center" />
                <div
                    class="bg-gradient-to-b from-transparent to-cyan-700 w-full flex items-center p-2 absolute bottom-0 h-1/3">
                    <div>
                        <p class="font-semibold tracking-tighter text-xl md:text-2xl">
                            Muhammad Akbar
                        </p>
                        <p class="text-sm sm:text-base">Developer</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg relative overflow-hidden h-[300px] md:h-[600px] md:col-span-2">
                <img src="{{ asset('images/user-default.jpg') }}" alt="Photo Profile"
                    class="w-full h-full object-cover object-center bg-center" />
                <div
                    class="bg-gradient-to-b from-transparent to-cyan-700 w-full flex items-center p-2 absolute bottom-0 h-1/3">
                    <div>
                        <p class="font-semibold tracking-tighter text-xl md:text-2xl">
                            Nauval Gymnasti
                        </p>
                        <p class="text-sm sm:text-base">Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full p-3">
        <footer class="rounded-lg shadow bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 CibiGuess™. All Rights
                    Reserved.
                </span>
                <ul
                    class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            loop: false,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    </script>
</body>

</html>
