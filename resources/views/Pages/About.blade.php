@extends('Layout.App')
@section('title')
    About Us
@endsection

@section('body')
    <div class="w-full mt-6">
        <p class="!text-gray-900 text-center !text-2xl !font-normal">
            ABOUT US
        </p>
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-10 justify-start items-start mt-6">
            <div class="w-[300px] lg:w-[600px] mx-auto !rounded-lg ">
                <img src="./assets/assets_frontend/about_image.png" alt="about_image" class="w-full h-full !rounded-lg"></img>
            </div>

            {{-- ALL OF THE TEXT  --}}
            <div class="w-full space-y-4">
                <p class="!text-sm !text-gray-700 !font-semibold lg:!text-md">
                    Welcome to Prescripto, your trusted partner in managing your
                    healthcare needs conveniently and efficiently. At Prescripto, we
                    understand the challenges individuals face when it comes to
                    scheduling doctor appointments and managing their health records
                </p>

                <p class="!text-sm !text-gray-700 !font-semibold lg:!text-md">
                    Prescripto is committed to excellence in healthcare technology. We
                    continuously strive to enhance our platform, integrating the latest
                    advancements to improve user experience and deliver superior
                    service. Whether you're booking your first appointment or managing
                    ongoing care, Prescripto is here to support you every step of the
                    way.
                </p>
                <div class="w-full space-y-1">
                    <p class="!text-black !font-semibold">Our Vision</p>
                    <p class="!text-sm !text-gray-700 !font-semibold lg:!text-md">
                        Our vision at Prescripto is to create a seamless healthcare
                        experience for every user. We aim to bridge the gap between
                        patients and healthcare providers, making it easier for you to
                        access the care you need, when you need it.
                    </p>
                </div>
            </div>
        </div>

        <div class="w-full mt-6 mb-[150px] ">
            <p class="!text-xl !font-semibold">WHY CHOOSE US</p>
            <div class="w-full flex flex-col lg:flex-row mt-3">
                <div
                    class="w-full !bg-white border-[1px] border-slate-200 hover:!bg-blue-600 hover:cursor-pointer px-7 py-[30px] lg:py-[80px] space-y-4 transition duration-1000 ease-in-out">
                    <p class="text-[#1F2937] !text-lg !font-semibold uppercase">Efficiency</p>
                    <p class="text-gray-600 !text-sm !font-medium">Streamlined appointment scheduling that fits into your
                        busy lifestyle.</p>
                </div>
                <div
                    class="w-full !bg-white border-[1px] border-slate-200 hover:!bg-blue-600 hover:cursor-pointer hover:!text-white px-7 py-[30px] lg:py-[80px] space-y-4 transition duration-1000 ease-in-out">
                    <p class="text-[#1F2937] !text-lg !font-semibold uppercase">Convenience</p>
                    <p class="text-gray-600 !text-sm !font-medium">Access to a network of trusted healthcare professionals
                        in your area.</p>
                </div>
                <div
                    class="w-full !bg-white border-[1px] border-slate-200 hover:!bg-blue-600 hover:cursor-pointer hover:!text-white px-7 py-[30px] lg:py-[80px] space-y-4 transition duration-1000 ease-in-out">
                    <p class="text-[#1F2937] !text-lg !font-semibold uppercase">Personalization</p>
                    <p class="text-gray-600 !text-sm !font-medium">Tailored recommendations and reminders to help you stay
                        on top of your health.</p>
                </div>

            </div>

        </div>
    </div>
@endsection
