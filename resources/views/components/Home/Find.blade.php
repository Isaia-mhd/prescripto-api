<div id="specialty" class="w-full mt-12 mb-6">
    <p class="!text-center !text-3xl !font-semibold">
      Find by Speciality
    </p>
    <div class="w-[300px] mx-auto flex justify-center items-center pt-3">
      <p class="!text-center !text-sm !text-gray-800 !font-semibold">
        Simply browse through our extensive list of trusted doctors, schedule
        your appointment hassle-free.
      </p>
    </div>
    <div class="w-full lg:max-w-[70%] mx-auto flex gap-3 pt-6 overflow-x-auto scrollbar-none ">

        <div class="w-full flex flex-col justify-between items-center  ">
          <div class="rounded-full flex gap-4">
            {{-- <img src="" alt="image" class=""></img> --}}
            <?php
                    $imgs = [
                        "Gastroenterologist" => "../assets/assets_frontend/Gastroenterologist.svg",
                        "Neurologist" => "../assets/assets_frontend/Neurologist.svg",
                        "Pediatricians" => "../assets/assets_frontend/Pediatricians.svg",
                        "Gynecologist" => "../assets/assets_frontend/Gynecologist.svg",
                        "General_physician" => "../assets/assets_frontend/General_physician.svg",
                        "Dermatologist" => "../assets/assets_frontend/Dermatologist.svg",
                    ]

            ?>
                @foreach ($imgs as $key => $img )

                    <img src="{{ $img }}" alt="image" class="w-[100px] h-[100px] cursor-pointer hover:-translate-y-4 !transition !duration-500 !ease-in-out"></img>

                @endforeach


          </div>
          <p class="!text-xs !text-gray-800 !font-semibold truncate">


          </p>
        </div>
    </div>
  </div>
