<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }} </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">

    <header class="w-full  shadow-2 py-4 border-b-1 max-w-[80%]  mx-auto border-slate-400">
        <div class="w-full flex justify-between items-center ">

            <div class="">
                <img src="../assets/assets_frontend/logo.svg" alt="Logo" class="cursor-pointer">
            </div>

            <div class="flex items-center justify-center gap-5">
                <a href="/" class="text-xs uppercase font-bold py-2 border-b-2 border-transparent">
                    Home
                </a>
                <a href="{{ route("doctors.all") }}" class="text-xs uppercase font-bold py-2 border-b-2 border-transparent">
                    All doctors
                </a>
                <a href="{{ route("about.us") }}" class="text-xs uppercase font-bold py-2 border-b-2 border-transparent">
                    About
                </a>
                <a href="{{ route("contact.us") }}" class="text-xs uppercase font-bold py-2 border-b-2 border-transparent">
                    Contact
                </a>

            </div>


            <div class="">
                <a href="{{ route('register') }}" class="py-2 bg-blue-600 text-white text-sm rounded-sm px-4">Create
                    Account</a>

            </div>

        </div>
    </header>


    <section class="w-full max-w-[80%] mx-auto">
        @yield('body')
    </section>

    <footer class="w-full max-w-[80%]  mx-auto">
        <div class="w-full flex flex-col lg:flex-row gap-12 mt-12 border-b-1 border-slate-400 pb-12">
            <div class="w-full space-y-4">
                <div class="w-[200px] h-[50px]"><img src="../assets/assets_frontend/logo.svg" alt="Logo" class="cursor-pointer"></div>
                <p class="!text-gray-500 !text-sm w-full lg:w-[400px] ">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.
                </p>
            </div>

            {{-- COMPAGNY AND GET IN TOUCH --}}
            <div class="w-full flex justify-start gap-4">
                <div class="w-full">
                    <p class="!text-xl !font-semibold">COMPANY</p>
                    <div class="pt-4 flex flex-col gap-3">
                        <p class="text-gray-500 !text-sm !font-bold ">
                            <a href="/">Home</a>
                        </p>
                        <p class="text-gray-500 !text-sm !font-bold ">
                            <a href="/">About us</a>
                        </p>
                        <p class="text-gray-500 !text-sm !font-bold ">
                            <a href="/">Delivery</a>
                        </p>
                        <p class="text-gray-500 !text-sm !font-bold ">
                            <a href="/">Privacy policy</a>
                        </p>
                    </div>
                </div>
                <div class="w-full ">
                    <p class="!text-xl !font-semibold">GET IN TOUCH</p>
                    <div class="pt-4 flex flex-col gap-3">
                        <p class="text-gray-500 !text-sm !font-bold ">
                            <a href="/">+0-000-000-000</a>
                        </p>
                        <p class="text-gray-500 !text-sm !font-bold ">
                            <a href="/">+0-000-000-000</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-[50px] flex justify-center items-center">
            <p class="text-sm">Copyright 2024 @ Greatstack.dev - All Right Reserved.</p>
        </div>

    </footer>
</body>

</html>
