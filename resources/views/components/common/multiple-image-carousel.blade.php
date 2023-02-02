<div class="multipleImageCarouselWrapper mt-4">
    <div class="text-center ">
        <h4 class="text-3xl font-medium mt-4 text-colorMehandi"> Krishna Dress </h4>
    </div>

    <div class="multipleCarouselButtons text-gray-900">
        <button type="button"
            class="w-[cal(24px+2vw)] h-[calc(34px+2vw)] rounded-r hover:bg-gray-300 hover:shadow-md duration-500"
            onclick="leftButton(this)">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button"
            class="w-[cal(24px+2vw)] h-[calc(34px+2vw)] rounded-l hover:bg-gray-300 hover:shadow-md duration-500"
            onclick="rightButton(this)">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <div class="flex multipleCarousel duration-700">
        <x-common.multiple-carousel-product title="first first first first first first first first first " />
        <x-common.multiple-carousel-product title="second second second second second second second second second " />
        <x-common.multiple-carousel-product
            title="third third third third third third third third third third third third " />
        <x-common.multiple-carousel-product
            title="fourth fourth fourth fourth fourth fourth fourth fourth fourth fourth fourth " />
        <x-common.multiple-carousel-product
            title="fifth fifth fifth fifth fifth fifth fifth fifth fifth fifth fifth fifth " />
        <x-common.multiple-carousel-product
            title="sixth sixth sixth sixth sixth sixth sixth sixth sixth sixth sixth sixth " />
        <x-common.multiple-carousel-product
            title="seventh seventh seventh seventh seventh seventh seventh seventh seventh seventh seventh " />
        <x-common.multiple-carousel-product
            title="eight eight eight eight eight eight eight eight eight eight eight " />
    </div>

</div>



@section('js')
    <script type="text/javascript">
        var num = 0;
        // console.log("hey");

        function leftButton(event) {
            let containerWidth = event.parentElement.parentElement.children[2];
            var cardWidth = document.getElementsByClassName('multipleCarouselProductCardWrapper');
            let cardSize = cardWidth[0].clientWidth;
            containerWidth.scrollLeft -= cardSize;
            num -= num > 0 ? 1 : 0;
        }

        function rightButton(event) {
            let containerWidth = event.parentElement.parentElement.children[2];
            var cardWidth = document.getElementsByClassName('multipleCarouselProductCardWrapper');
            let cardSize = cardWidth[num].clientWidth;
            containerWidth.scrollLeft += cardSize;
            num += (cardWidth.length - 1) > num ? 1 : 0;
        }
    </script>
@endsection
