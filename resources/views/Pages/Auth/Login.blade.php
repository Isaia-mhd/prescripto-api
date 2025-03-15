@extends('Layout.App')

@section('title')
    Login
@endsection

@section('body')
    {{-- LOGIN FIELD --}}
    <div class="w-full">
        <div class="w-[35%] mt-12 bg-white  rounded-2xl py-[50px] shadow-xl px-10 space-y-2">

            <p class="!text-2xl !text-gray-700 !font-semibold">Login</p>

            <p class="!text-gray-700 !text-sm !font-semibold">
                Please log in to book appointment
            </p>

            {{-- Input Field --}}
            <form class="w-full space-y-3" action="" method="POST">
                {{-- Email --}}
                <div class="space-y-1">
                    <label htmlFor="mail" class="text-sm text-gray-700 font-semibold">
                        Email
                    </label>
                    <input type="email"
                    id="mail"
                    name="email"
                    class="w-full py-1 px-3 bg-white border-2 rounded-md outline-none"
                    />
                </div>

                {{-- Password --}}
                <div class="space-y-1">
                    <label htmlFor="pass" class="text-sm text-gray-700 font-semibold">
                        Password
                    </label>
                    <input type="password"
                    id="pass"
                    name="password"
                    class="w-full py-1 px-3 bg-white border-2 rounded-md outline-none"
                    />
                </div>

                {{-- Submit --}}
                <div class="!mt-6 !mb-6">
                    <button type="submit"
                        class="w-full bg-blue-600 py-3 px-2 text-white text-sm font-semibold rounded-lg shadow-lg">
                        Login
                    </button>
                </div>

            </form>

            <p class="!text-gray-700 !text-sm !font-semibold">
                Create an new account?
                <a href="{{ route("register") }}" class="text-myblue underline cursor-pointer"
                    >
                    Click here
                </a>
            </p>
        </div>
    </div>
@endsection
