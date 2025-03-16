@extends('Layout.App')
@section('title')
    Doctors
@endsection


@section('body')
    <div class="w-full pt-6">
        <p class="!text-gray-600  text-center lg:text-start !text-sm !font-semibold ">
            Browse through the doctors specialist.
        </p>

        <div class="w-full flex justify-center lg:justify-start items-start gap-4">
            <div class="w-[20%] hidden md:flex flex-col justify-start items-start gap-3 pt-6">


                <a href="#"
                    class="truncate !bg-white shadow-sm !text-black !w-full !border-[1px] !py-1 !px-4 !border-gray-300 !rounded-md focus:!bg-[#EAEFFF] ">
                    Geologist
                </a>



            </div>
            <div class="w-[80%]">
                @include('components.DoctorsBox')
            </div>
        </div>
    </div>
@endsection
