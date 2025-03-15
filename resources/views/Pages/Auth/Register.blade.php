@extends('Layout.App')
@section('title')
    Register
@endsection

@section('body')
    {{-- CREATE ACCOUNT FIELD  --}}
    <div class="w-[35%] bg-white rounded-2xl mt-12 mb-[100px] flex flex-col justify-start items-start shadow-xl py-[50px] px-10 space-y-2">

        <p class="!text-2xl !text-gray-700 !font-semibold">
            Create account
        </p>

        <p class="!text-gray-700 !text-sm !font-semibold mb-6">
            Please create account to book appointment
        </p>

        {{-- Input Field --}}
        <form class="w-full space-y-3" action="" method="POST">

            {{-- Name --}}
            <div class="space-y-1">
                <label htmlFor="name" class="text-sm text-gray-700 font-semibold">
                    Full Name
                </label>
                <input type="text" id="name" name="name"
                    class="w-full py-1 px-3 bg-white border-2 rounded-md outline-none" />
            </div>

            {{-- Email --}}
            <div class="space-y-1">
                <label htmlFor="mail" class="text-sm text-gray-700 font-semibold">
                    Email
                </label>
                <input type="email" id="mail" name="email"
                    class="w-full py-1 px-3 bg-white border-2 rounded-md outline-none" />
            </div>

            {{-- Password --}}
            <div class="space-y-1">
                <label htmlFor="pass" class="text-sm text-gray-700 font-semibold">
                    Password
                </label>
                <input type="password" id="pass" name="password"
                    class="w-full py-1 px-3 bg-white border-2 rounded-md outline-none" />
            </div>

            {{-- Submit --}}
            <div class="!mt-6 !mb-6">
                <button type="submit"
                    class="w-full bg-blue-600 cursor-pointer py-3 px-2 text-white text-sm font-semibold rounded-lg shadow-lg">
                    Create account
                </button>
            </div>
        </form>

        <p class="text-gray-700 !text-sm !font-semibold">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 underline cursor-pointer">
                Login here
            </a>
        </p>
    </div>


    </div>
@endsection
