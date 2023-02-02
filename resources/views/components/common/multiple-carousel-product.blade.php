<div
    class="multipleCarouselProductCardWrapper xl:min-w-[20%] xl:px-2 lg:min-w-[25%] lg:px-3 md:min-w-[33.33%] md:px-3 sm:min-w-[50%] sm:px-4 xs:min-w-[50%] xs:px-1">
    {{-- min-w-[100%] px-[calc(10px+2.5vw)] --}}
    <a href=""
        class="min-h-[calc(305px+8vw)] w-full rounded shadow-lg flex flex-col py-1 border-1 border-green-500 snap-scroll duration-700 hover:shadow-none">

        <div class="h-[calc(150px+6vw)] w-full flex justify-center items-center p-1 ">
            <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="w-auto h-auto max-h-[calc(150px+6vw)]"
                alt="productName">
        </div>

        <div class="detailsCard flex flex-col sm:p-2 px-2 h-[calc(155px+2vw)] text-gray-800">

            <span class="productTitle text-[calc(13px+.3vw)]">
                {{ $title }}
            </span>

            <div class="rating flex justify-between font-bold capitalize mt-[8px] text-textGreen">
                <span> rating </span>
                <x-common.star-rating />
            </div>

            <div class="price flex gap-3 justify-center mt-[8px]">
                <span class="font-bold text-[calc(18px+.3vw)] text-textGreen"> ₹ 200 </span>
                <del class="my-auto text-gray-500"> ₹ 200 </del>
            </div>

            <div class="title flex justify-center mt-[8px] text-gray-600">
                Lorem, ipsum dolor.
            </div>
        </div>
    </a>
</div>
