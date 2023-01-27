@extends('includes/master')
@section('body')
    <x-common.navbar />

    <div class="grid grid-cols-2 lg:grid-cols-7">
        <div class="col-span-4">
            <x-cart.cart-product />
            <x-cart.cart-product />
            <x-cart.cart-product />
            <x-cart.cart-product />
        </div>

        <div class="col-span-3  text-textGray px-3">
            <div class="h-auto flex flex-col w-full p-3 sticky top-[60px] shadow">
                <h3 class="text-[calc(15px+.5vw)]"> Price Details </h3>
                <hr />
                <div class="flex justify-between text-[calc(15px+.5vw)] my-2">
                    <span class=""> Price </span>
                    <span class=""> ₹55,555 </span>
                </div>
                <div class="flex justify-between text-[calc(15px+.5vw)] my-2">
                    <span class=""> Discount </span>
                    <span class="text-textGreen"> -₹636 </span>
                </div>
                <div class="flex justify-between text-[calc(15px+.5vw)] my-2">
                    <span class=""> Delivery Charges </span>
                    <span class="text-textGreen"> Free </span>
                </div>
                <hr />
                <div class="flex justify-between my-1 text-[calc(17px+.5vw)]">
                    <span class="font-semibold"> Total Amount </span>
                    <span class="text-textMehandi font-semibold"> 123456 </span>
                </div>

            </div>
        </div>

    </div>
@endsection
