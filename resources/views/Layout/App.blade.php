<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title") | {{ config("app.name") }} </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

        <header class="w-full bg-gray-100 shadow-2 py-4 ">
            <div class="w-full flex justify-between max-w-[90%] mx-auto">

                <div class="">
                    <img src="../assets/assets_frontend/logo.svg" alt="Logo" class="cursor-pointer">
                </div>

                <div class="flex items-center justify-center gap-5">
                  <a
                    href="/"
                    class="text-xs uppercase font-bold py-2 border-b-2 border-transparent"
                  >
                    Home
                  </a>
                  <a
                    href="/doctors"
                    class="text-xs uppercase font-bold py-2 border-b-2 border-transparent"
                  >
                    All doctors
                  </a>
                  <a
                    href="/about"
                    class="text-xs uppercase font-bold py-2 border-b-2 border-transparent"
                  >
                    About
                  </a>
                  <a
                    href="/contact"
                    class="text-xs uppercase font-bold py-2 border-b-2 border-transparent"
                  >
                    Contact
                  </a>

                </div>


                <div class="">
                    <a
                      href="/login"
                      class="py-3 bg-blue-600 text-white text-sm rounded-sm px-4"
                    >Create account</a>

                </div>

            </div>
        </header>


    <section class="w-full max-w-[90%] mx-auto">
        @yield("body")
    </section>
</body>
</html>
