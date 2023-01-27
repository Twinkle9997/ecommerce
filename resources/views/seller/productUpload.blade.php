@extends('includes/master')
@section('body')
    <x-admin.navbar />



    <div class="grid grid-cols-1 mx-auto mt-5 px-[calc(10px+3vw)] mb-[100px]">
        <div class="shadow-lg p-[calc(5px+1vw)] bg-white flex flex-col gap-2">

            <form action="" method="POST" enctype="multipart/form-data">
                {{-- file --}}
                <div class="flex flex-col gap-3 justify-center items-center relative mt-3">
                    <input type="file" name="productImg[]" id=""
                        class="file:border-none file:bg-bgRed cursor-pointer file:text-white file:px-[calc(5px+1vw)] file:mr-[calc(5px+.5vw)] file:py-1 file:rounded"
                        accept="image/*" />

                    <span
                        class="h-8 w-8 text-white bg-bgRed flex justify-center items-center rounded-full shadow cursor-pointer hover:border hover:border-textRed hover:bg-white hover:text-textRed duration-300 absolute top-auto right-0">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                </div>

                {{-- Product Title --}}
                <div class="mt-3">
                    <x-admin.label-text-with-alert type="text" label="Product Name And Short Discription" name="title"
                        placeholder="Product Name" tooltip="In 150 characters" peerName="peer/title12323"
                        peerCondition="peer-focus/title12323:block" />
                </div>




                {{-- Material --}}
                <div class="mt-3">
                    <x-admin.label-text-with-alert type="text" label="Material" name="material"
                        placeholder="The product made of" tooltip="Material of the product" peerName="peer/material"
                        peerCondition="peer-focus/material:block" />
                </div>

                {{-- Product Category dropdown --}}
                <div class="mt-3 flex gap-2">
                    <div class="sm:w-[calc(50%-5px)]">
                        <label for="category" class="text-sm sm:text-base">
                            Product Category <span class="text-textRed"> * </span>
                        </label>
                        <select name=""
                            class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                            id="category">
                            <option value=""> Select Product Category </option>
                            <option value="category"> Category </option>
                            <option value="mala"> Mala </option>
                            <option value="murti"> MUrti </option>
                        </select>
                    </div>

                    <div class="sm:w-[calc(50%-5px)]">
                        <x-admin.label-text-with-alert type="number" label="Quantity" name="quantity"
                            placeholder="Total Number Of Quantity"
                            tooltip="we will notify you when quantity will lesser than 25%" peerName="peer/quantity"
                            peerCondition="peer-focus/quantity:block" />
                    </div>
                </div>



                {{-- code editor  --}}
                <div class="mt-3">
                    <x-admin.texteditor />
                </div>

                {{-- Price & discounted Price --}}
                <div class="flex flex-wrap w-full mt-3 gap-[10px]">
                    <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                        <x-admin.label-text-with-alert type="number" label="Actual Price" name="actualPrice"
                            placeholder="Actual Price" tooltip="Actual price before any discount" peerName="peer/ap"
                            peerCondition="peer-focus/ap:block" />
                    </div>
                    <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                        <x-admin.label-text-with-alert type="number" label="Discounter Price" name="discountedPrice"
                            placeholder="Discounted Price" tooltip="at this price you are ready to sell your product"
                            peerName="peer/dp" peerCondition="peer-focus/dp:block" />
                    </div>
                </div>

                {{-- Dimentions --}}
                <div class="flex flex-col">
                    <label for="Dimentions" class="mt-3 text-center text-xl">
                        Dimentions
                        <span class="text-xs text-textRed">
                            If applicable
                        </span>
                    </label>
                    <div class="flex flex-wrap w-full gap-[10px]">
                        <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                            <x-admin.label-text-with-alert type="number" label="Width" name="width"
                                placeholder="width of the product" tooltip="Total width of the product"
                                peerName="peer/width" peerCondition="peer-focus/width:block" />
                        </div>
                        <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                            <x-admin.label-text-with-alert type="number" label="Height" name="height"
                                placeholder="Height of the product" tooltip="Total height of the product"
                                peerName="peer/height" peerCondition="peer-focus/height:block" />
                        </div>
                    </div>
                </div>

                {{-- Weight and Return --}}
                <div class="flex flex-wrap w-full gap-[10px] mt-3">

                    <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                        <x-admin.label-text-with-alert type="number" label="Weight" name="weight"
                            placeholder="Total Weight of the product in grams"
                            tooltip="Total weight of the product (if applicable)" peerName="peer/weight"
                            peerCondition="peer-focus/weight:block" />
                    </div>
                    <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                        <label for="return" class="text-sm sm:text-base">
                            Return applicable
                            <span class="text-textRed"> * </span>
                        </label>
                        <select name=""
                            class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                            id="category">
                            <option value=""> Return Applicable </option>
                            <option value="1"> Yes </option>
                            <option value="0"> No </option>
                        </select>
                    </div>
                </div>

                {{-- Courier Charges & Return Applicable --}}
                <div class="flex flex-wrap w-full gap-[10px] mt-3">
                    <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                        <x-admin.label-text-with-alert type="number" label="Courier Charges" name="courier"
                            placeholder="Courier Charges"
                            tooltip="Courier charges if applicable (if you leave this empty means delivery charges applicable)"
                            peerName="peer/courier" peerCondition="peer-focus/courier:block" />
                    </div>
                    <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                        <x-admin.label-text-with-alert type="text" label="Coupon Code" name="height"
                            placeholder="Coupon Code" tooltip="Coupon Code if applicable" peerName="peer/cc"
                            peerCondition="peer-focus/cc:block" />
                    </div>
                </div>

                {{-- submit button --}}
                <div class="flex justify-center mt-5">
                    <input type="submit"
                        class="bg-bgRed px-5 shadow-xl py-1 text-white rounded text-[calc(15px+.5vw)] cursor-pointer hover:bg-bgWhite hover:text-textRed duration-300 hover:shadow-none"
                        value="Submit" />
                </div>

            </form>

        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('assets/js/codeEditor.js') }}"></script>
@endsection
