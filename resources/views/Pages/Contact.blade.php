@extends('Layout.App')
@section('title')
    Contact Us
@endsection


@section('body')
    <div class="w-full mt-6">
        <div class="!text-gray-900 text-center !text-2xl !font-normal">
            CONTACT US
        </div>

        <div class="flex flex-col lg:flex-row gap-4 lg:gap-10 justify-start items-start mt-6">
            <div class="w-[300px] lg:w-[600px] mx-auto !rounded-lg ">
                <img src="./assets/assets_frontend/contact_image.png" alt="about_image"
                    class="w-full h-full !rounded-lg"></img>
            </div>

            {{-- ALL OF THE TEXT --}}
            <div class="w-full !space-y-8">
                <p class="!text-sm !text-gray-700 !font-semibold lg:!text-md">
                    OUR OFFICE
                </p>

                <p class="!text-sm !text-gray-700 !font-semibold lg:!text-md">
                    00000 Willms Station
                    Suite 000, Washington, USA
                </p>
                <p class="!text-black !font-semibold">Tel: (000) 000-0000
                    Email: greatstackdev@gmail.com</p>
                <p class="!text-sm !text-gray-700 !font-semibold lg:!text-md">
                    CAREERS AT PRESCRIPTO
                </p>
                <p>Learn more about our teams and job openings.</p>

                <button class="!rounded-none !bg-white !px-4 !text-black !border-[1px] !border-black">Explore
                    Jobs</button>
            </div>
        </div>
    </div>
@endsection
