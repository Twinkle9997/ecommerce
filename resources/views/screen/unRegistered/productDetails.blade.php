@extends('includes/master')
@section('body')
    <x-common.navbar />
    <div class="flex flex-col md:flex-row relative px-0 gap-4 md:gap-3 relative py-4">

        <div
            class="col-span-2 flex flex-col flex-col-reverse md:flex-row gap-5 md:gap-3 md:max-w-[calc(300px+15vw)] w-full md:sticky md:top-[64px] md:left-0 h-auto md:h-[calc(350px+13vw)] md:px-1">
            <div class="flex justify-center items-center gap-1">

                <div class="flex md:flex-col gap-1 w-full md:w-[120px] h-[80px] md:h-full overflow-y-auto md:overflow-x-auto p-1 scroller pb-3"
                    id="thumbnailWrapper">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                    <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="hover:shadow-lg duration-500"
                        alt="">
                </div>
            </div>
            <div class="flex flex-row h-[calc(280px+13vw)] py-2 m-auto">
                <img src="{{ asset('/assets/images/products/ver.jpg') }}"
                    class="max-h-[calc(280px+13vw)] h-auto max-w-auto m-auto" alt="product name">
            </div>
        </div>

        {{-- product description --}}
        {{-- product description --}}
        <div class="w-full md:relative px-3">
            <x-common.steppers />
            <h2 class="text-[calc(16px+1vw)] font-medium md:mt-5 leading-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique vel impedit ex, id sequi hic.
            </h2>
            <div class="flex flex-wrap items-center mt-3 gap-2">
                <x-common.star-rating />
                <div class="text-sm text-gray-500">
                    4.6 Rating and 1300 Reviews
                </div>
            </div>

            <div class="flex flex-wrap items-center mt-3 gap-2 font-medium text-gray-700">
                <h3 class="text-3xl"> ₹500 </h3>
                <h4 class="text-2xl"> <del> ₹1500 </del> </h4>
                <h5 class="text-2xl text-textGreen"> 66% saving </h5>
            </div>

            <div class="my-5">
                <form action="" method="post">
                    <div class="flex flex-wrap font-medium text-gray-700 items-center gap-2">
                        <input type="number" class="border-b border-gray-800 h-10 w-auto px-2 focus:outline-none"
                            name="" id="search" placeholder="check pincode">
                        <input type="submit" class="bg-bgRed text-white px-3 rounded h-auto py-1 cursor-pointer"
                            value="Check" />
                    </div>
                </form>

                {{-- sizes tab --}}
                <div class="flex flex-col gap-2 mt-3">
                    <span class="text-textGray font-semibold"> Available Sizes:
                    </span>
                    <div class="flex flex-wrap gap-2">
                        @php
                            $a = rand(0, 9999);
                        @endphp
                        <x-common.label-radio-button inputClass="hidden peer/time"
                            labelClass="peer-checked/time:bg-bgRed peer-checked/time:text-white peer-checked/time:shadow-lg" />

                        <x-common.label-radio-button inputClass="hidden peer/time1"
                            labelClass="php peer-checked/time1:bg-bgRed peer-checked/time1:text-white peer-checked/time1:shadow-lg" />

                        <x-common.label-radio-button inputClass="hidden peer/time2"
                            labelClass="php peer-checked/time2:bg-bgRed peer-checked/time2:text-white peer-checked/time2:shadow-lg" />


                    </div>
                </div>

                <div class="flex flex-col gap-2 mt-3">
                    <span class="text-textGray font-semibold"> Available Colors:
                    </span>
                    <div class="flex gap-2">

                        <button type="button" class="bg-red-700 w-4 h-4 rounded-full">
                        </button>

                        <button type="button" class="bg-red-300 w-4 h-4 rounded-full">
                        </button>

                        <button type="button" class="bg-green-800 w-4 h-4 rounded-full">
                        </button>

                    </div>
                </div>

            </div>

            <div class="flex flex-wrap gap-3 mt-3 w-100">
                <x-common.icon-button url="#" title="Add To Cart" icon="fa-solid fa-cart-shopping" />
                <x-common.icon-button url="#" title="Buy Now" icon=" fa-solid fa-bolt" />
            </div>

            <h1 class="mt-4 font-semibold">
                Available Offers-
            </h1>

            <div class="flex gap-2 items-center mt-2 font-semibold">

                <i class="fa fa-gift text-textGreen"></i>
                <p class="text-gray-700">
                    5% extra discount on ₹1000 shopping
                </p>
            </div>
            <div class="flex gap-2 text-textGreen items-center mt-2 font-semibold">
                <i class="fa fa-gift text-textGreen"></i>
                <p class="text-gray-700">
                    15% extra discount on ₹2000 shopping
                </p>
            </div>

            <div class="flex gap-2 items-center mt-2 font-semibold text-textRed">
                <i class="fas fa-comment-dots"></i>
                <p class="capitalize text">
                    All Over india delivery free
                </p>
            </div>

            <div class="flex flex-col gap-1 mt-2">
                <p class="capitalize text font-semibold">
                    Description-
                </p>
                <ul class="list-disc px-3 flex flex-col gap-2">
                    <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, nemo!
                    </li>
                    <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, nemo!
                    </li>
                    <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, nemo!
                    </li>
                    <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, nemo!
                    </li>
                    <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, nemo!
                    </li>
                    <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, nemo!
                    </li>
                    <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, nemo!
                    </li>
                    <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, nemo!
                    </li>
                </ul>
                <a href="#" class="font-semibold text-blue-600"> View Full Details </a>
            </div>


            <p class="capitalize text font-semibold mt-4 text-textGreen">
                Rate & Reviews -
            </p>
            <x-product-details.reviews />
            <x-product-details.reviews />
            <x-product-details.reviews />
            <x-product-details.reviews />
            <a href="#" class="font-semibold text-blue-600"> Load More Reviews </a>
        </div>
        {{-- product description --}}
        {{-- product description --}}

    </div>



    <hr class="mt-5">

    <div class="">

    </div>

    <div class="flex flex-col px-2 text-textMehandi mt-3">
        <h1 class="text-[calc(20px+1vw)]">
            Suggestion:
        </h1>
        <p class="font-semibold capitalize text-textGreen">
            you should buy these items also
        </p>
    </div>
    <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-4 gap-x-2 px-3 my-3">
        <x-common.product-card />
        <x-common.product-card />
        <x-common.product-card />
        <x-common.product-card />
        <x-common.product-card />
        <x-common.product-card />
        <x-common.product-card />
        <x-common.product-card />
    </div>
@endsection
@section('js')
    <script>
        $num = 0;
        $imgsCount = $("#thumbnailWrapper").children();
        $clH = $("#thumbnailWrapper")[0].clientHeight;


        // $proH = $imgsCount[0].clientHeight;
    </script>
@endsection
