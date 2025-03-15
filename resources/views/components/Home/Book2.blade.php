<div class="w-full  bg-blue-600 rounded-xl mt-12 mb-6 md:pt-[20px] lg:pt-[20px] ">
    <div class="md:flex gap-3 w-full h-full max-w-[95%] md:max-w-[90%] mx-auto ">

        {{-- the Left Box --}}
        <div class="w-full lg:w-[80%] pt-3 pb-12 md:pb-24 flex flex-col items-center justify-center lg:items-start  ">
            <p class="!text-3xl text-center md:text-left md:!text-5xl  !font-semibold !text-white space-y-0">
                Book Appointment With 100+ Trusted Doctors
            </p>

            <div class="w-full flex flex-col md:flex-row justify-start items-center gap-3 pt-6 pb-6">
                <div>
                    <img src="../assets/assets_frontend/group_profiles.png" class="w-full"></img>
                </div>
                <p class="!text-white !text-sm text-center md:text-left">
                    Simply browse through our extensive list of trusted doctors,
                    <br />
                    schedule your appointment hassle-free.
                </p>
            </div>

            {{-- BUTTON to book --}}
            <div class="w-[250px] pt-6">
                <a href="{{ route("register") }}" class=" bg-white px-10 py-3 hover:cursor-pointer rounded-full !text-gray-500 !font-semibold">Create
                account</a>
            </div>
        </div>

        {{-- The Right Image --}}
        <p class="flex justify-center items-end">
        <p><img src="./assets/assets_frontend/appointment_img.png" alt="header_image" class=""></img></p>
        </p>
    </div>
</div>
