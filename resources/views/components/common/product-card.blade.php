<a href="#"
    class="w-full border-transparent border h-auto hover:border-gray-300 rounded-b shadow-md hover:shadow-none  duration-300">
    <div class=" h-[calc(120px+4vw)] sm:h-[calc(141px+8vw)] flex justify-center items-center p-1 sm:p-3">
        <img src="{{ asset('/assets/images/products/fir.jpg') }}"
            class="max-h-[calc(110px+4vw)] sm:max-h-[calc(131px+8vw)]" alt="">
    </div>
    <div class="p-1 sm:p-3 flex flex-col gap-0 sm:gap-2 text-[calc(13px+.5vw)]">
        <p class="text-gray-600 font-semibold">
            Product Name
        </p>

        <p class="textLimit text-textMehandi font-light leading-[calc(15px+1vw)]" style="--numOfLines: 2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quod amet nam modi? Quibusdam minus voluptatum
            dolorem suscipit, nam aliquid delectus quam, velit accusamus, vel quis doloribus repudiandae odio placeat.
        </p>
        <p class="text-sm text-gray-500 capitalize my-1 sm:block" style="--numOfLines: 1">
            about product in 5 words
        </p>
        <div class="flex sm:flex-row text-textGreen justify-between items-center font-medium text-[15px]">
            <p> Rating </p>
            <div class="text-[calc(11px+.4vw)] sm:text-auto">
                <x-common.star-rating />
            </div>
        </div>
        <div class="flex gap-1 mt-1 sm:mt-0 sm:gap-2 items-center font-semibold justify-around text-textGreen">
            <p> ₹ 4000 </p>
            <del class="text-[calc(12px+.4vw)] text-gray-500"> ₹ 12000 </del>
        </div>
    </div>


</a>
