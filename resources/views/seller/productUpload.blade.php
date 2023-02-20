@extends('includes/master')
@section('body')
    <x-admin.navbar />

    {{-- file repeater --}}
    <div class="hidden" id="fileRepeater">
        <div class="flex justify-center items-center md:gap-2 flex-col md:flex-row">
            <img class="imgPreview my-2 max-h-[180px] md:max-h-[100px] md:max-w-[100px] fileRecord " src=""
                alt="">
            <div class="flex flex-col gap-3 justify-center items-center relative mt-3 ">
                <input type="file" name="productImg[]"
                    class="file:border-none file:bg-bgRed cursor-pointer file:text-white file:px-[calc(5px+1vw)] file:mr-[calc(5px+.5vw)] file:py-1 file:rounded"
                    accept="image/*" onchange="previewThis(event, this)" required />
                <span
                    class="h-8 w-8 text-white bg-bgRed flex justify-center items-center rounded shadow cursor-pointer hover:border hover:border-textRed hover:bg-white hover:text-textRed duration-300 absolute top-auto right-0"
                    onclick="deleteFile(this)">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </div>
        </div>
    </div>
    {{-- file repeater --}}





    <form action="{{ route('seller.form.upload') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="flex flex-col my-5">
            {{-- file  --}}
            <div class="mb-5">
                <p class="text-[calc(15px+1vw)] text-textRed flex gap-2 font-semibold ml-[4vw]">
                    Files
                    <i class="fas fa-image my-auto text-blue-500"></i>
                </p>

                <div class="mb-5 shadow-lg p-4 h-auto flex flex-col mx-auto w-[calc(100%-7vw)]">

                    @if (session('success'))
                        <p class="bg-green-200 rounded w-full text-center text-xl py-1">
                            {{ session('success') }}
                        </p>
                    @endif

                    <div class="flex flex-col gap-3 justify-center items-center relative mt-3 pb-3">

                        {{-- <input type="file" name="productImg[]"
                            class="file:border-none file:bg-bgRed cursor-pointer file:text-white file:px-[calc(5px+1vw)] file:mr-[calc(5px+.5vw)] file:py-1 file:rounded"
                            accept="image/*" /> --}}

                        <span
                            class="h-8 w-8 text-white bg-bgRed flex justify-center items-center rounded-full shadow cursor-pointer hover:border hover:border-textRed hover:bg-white hover:text-textRed duration-300 absolute top-auto right-0"
                            id="addFileField">
                            <i class="fa-solid fa-plus"></i>
                        </span>
                    </div>
                    <div id="dynamicField"></div>

                </div>
            </div>

            {{-- Product Details --}}
            <div class="mt-5">

                <p class="text-[calc(15px+1vw)] text-textRed flex gap-2 font-semibold ml-[4vw]">
                    Product Details
                    <i class="fa-solid fa-asterisk my-auto text-blue-500"></i>
                </p>

                {{-- Product Description --}}
                <div class="mb-5 shadow-lg p-4 h-auto flex flex-col mx-auto w-[calc(100%-7vw)]">
                    {{-- Product Title --}}
                    <div>
                        <x-admin.label-text-with-alert type="text" label="Product Name And Short Discription"
                            name="title" placeholder="Product Name" tooltip="In 150 characters" peerName="peer/title12323"
                            peerCondition="peer-focus/title12323:block" required="required" />
                    </div>

                    {{-- product Category and material --}}
                    <div class="mt-3 w-full flex flex-col justify-between md:flex-row">
                        <div class="sm:w-[calc(50%-5px)]">
                            <label for="category" class="text-sm sm:text-base">
                                Product Category
                                <span class="text-textRed"> * </span>
                            </label>
                            <select name="category"
                                class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                                id="category" required>
                                <option value=""> Select Category </option>
                                @foreach ($cat as $cat)
                                    <option value="{{ $cat->id }}"> {{ $cat->name }} </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="w-full md:w-[calc(50%-5px)]">
                            <label for="fab">
                                Material
                                <span class="text-xs text-textRed">
                                    (Fabric of the product)
                                </span>
                            </label>
                            <select name="material"
                                class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                                id="category" required>

                                <option value=""> Select Material </option>
                                @foreach ($mat as $mat)
                                    <option value="{{ $mat->id }}">
                                        {{ $mat->material }}
                                    </option>
                                @endforeach

                            </select>
                        </div>


                    </div>

                    {{-- Size and Color --}}
                    <div class="mt-3 w-full flex flex-col justify-between md:flex-row">
                        <div class="sm:w-[calc(50%-5px)]">
                            <label for="category" class="text-sm sm:text-base">
                                Size
                                <span class="text-textRed"> * </span>
                            </label>
                            <select name="size"
                                class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                                id="size" required>
                                <option value=""> Select Sizes Multiple </option>
                                @foreach ($size as $size)
                                    <option value="{{ $size->id }}">
                                        {{ $size->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="w-full md:w-[calc(50%-5px)]">
                            <label for="fab">
                                Color
                                <span class="text-xs text-textRed">
                                    (Not Mandetory)
                                </span>
                            </label>
                            <select name="color"
                                class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                                id="color" required>

                                <option value=""> Select Material </option>
                                @foreach ($color as $color)
                                    <option value="{{ $color->id }}">
                                        <div class="flex gap-1">
                                            <div class="w-6 h-6 rounded-full" style="background: red">
                                            </div>
                                            {{ $color->name }}
                                        </div>
                                    </option>
                                @endforeach

                            </select>
                        </div>


                    </div>



                    {{-- texteditor --}}
                    <div class="mt-3">
                        <x-admin.texteditor />
                    </div>

                    {{-- Price & discounted Price --}}
                    <div class="flex flex-wrap justify-between w-full mt-3">
                        <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                            <x-admin.label-text-with-alert type="number" label="Actual Price" name="actualPrice"
                                placeholder="Actual Price" tooltip="Actual price before any discount" peerName="peer/ap"
                                peerCondition="peer-focus/ap:block" required="required" />
                        </div>
                        <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                            <x-admin.label-text-with-alert type="number" label="Discounted Price" name="discountedPrice"
                                placeholder="Discounted Price" tooltip="at this price you are ready to sell your product"
                                peerName="peer/dp" peerCondition="peer-focus/dp:block" required="required" />
                        </div>
                    </div>

                    {{-- Product Category dropdown --}}
                    <div class="mt-3 flex flex-col justify-between sm:flex-row">

                        <div class="w-full mt-2 md:mt-0 md:w-[calc(50%-5px)]">
                            <label for="fab">
                                Special Product
                                <span class="text-xs text-textRed">
                                    (This product appear on home screen in carousel)
                                </span>
                            </label>
                            <select name="special"
                                class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                                id="category" required="required">
                                <option value=""> Select Fabric </option>
                                <option value="0"> No </option>
                                <option value="1"> Yes </option>

                            </select>
                        </div>



                        <div class="sm:w-[calc(50%-5px)]">
                            <x-admin.label-text-with-alert type="number" label="Quantity" name="quantity"
                                placeholder="Total Number Of Quantity"
                                tooltip="we will notify you when quantity will lesser than 25%" peerName="peer/quantity"
                                peerCondition="peer-focus/quantity:block" required="required" />
                        </div>
                    </div>


                </div>

            </div>


            {{-- courier details --}}
            <div class="mt-5">
                <p class="text-[calc(15px+1vw)] text-textRed flex gap-2 font-semibold ml-[4vw]">
                    Couries Details
                    <i class="fa-solid fa-boxes-stacked my-auto text-blue-500"></i>
                </p>
                <div class="mb-5 shadow-lg p-4 h-auto flex flex-col mx-auto w-[calc(100%-7vw)]">
                    {{-- Weight and Return --}}
                    <div class="flex flex-wrap w-full gap-[10px] mt-3">
                        <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                            <x-admin.label-text-with-alert type="number" label="Weight" name="weight"
                                placeholder="Total Weight of the product in grams"
                                tooltip="Total weight of the product (if applicable)" peerName="peer/weight"
                                peerCondition="peer-focus/weight:block"
                                required="required" />
                        </div>
                        <div class="w-full sm:w-[calc(50%-5px)] min-w-[250px]">
                            <label for="return" class="text-sm sm:text-base">
                                Return applicable
                                <span class="text-textRed"> * </span>
                            </label>
                            <select name="return"
                                class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                                id="category" required="required">
                                <option value=""> Return Applicable </option>
                                <option value="1"> Yes </option>
                                <option value="0"> No </option>
                            </select>
                        </div>
                    </div>

                    {{-- Courier Charges & Return Applicable --}}
                    <div class="flex flex-wrap justify-between w-full gap-[10px] mt-0 sm:mt-3">
                        <div class="w-full min-w-[250px] sm:w-[calc(50%-5px)]">
                            <x-admin.label-text-with-alert type="number" label="Courier Charges" name="courier"
                                placeholder="Courier Charges"
                                tooltip="Courier charges if applicable (if you leave this empty means seller providing free delivery)"
                                peerName="peer/courier" peerCondition="peer-focus/courier:block" 
                                required="required" />
                        </div>
                        <div class="w-full min-w-[250px] sm:w-[calc(50%-5px)]">
                            <x-admin.label-text-with-alert type="number" label="Delivery in days" name="delivery_days"
                                placeholder="Delivery in days"
                                tooltip="How many days will you take in deliver this product" peerName="peer/ddate"
                                peerCondition="peer-focus/ddate:block"
                                required="required" />
                        </div>

                    </div>
                </div>
            </div>

            {{-- coupon code --}}
            <div class="mt-5">
                <p class="text-[calc(15px+1vw)] text-textRed flex gap-2 font-semibold ml-[4vw]">
                    Coupon Details
                    <i class="fa-solid fa-asterisk my-auto text-blue-500"></i>
                </p>
                <div class="mb-5 shadow-lg p-4 h-auto flex flex-col mx-auto w-[calc(100%-7vw)]">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div class="w-full sm:w-[calc(50%-5px)] mt-3 sm:mt-0 min-w-[250px]">
                            <label for="category" class="text-sm sm:text-base">
                                Coupon Code
                            </label>
                            <select name="voucher"
                                class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                                id="category">

                                <option value=""> Select </option>
                                @foreach ($vo as $vo)
                                    <option value="{{ $vo->id }}">
                                        {{ $vo->name }} &nbsp; ({{ $vo->discount }})
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="w-full sm:w-[calc(50%-5px)] mt-3 sm:mt-0 min-w-[250px]">
                            <label for="category" class="text-sm sm:text-base">
                                Do you want to start Coupon till now??
                            </label>
                            <select name="coupon_start"
                                class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                                id="category">
                                <option value=""> Select </option>
                                <option value="1"> Yes </option>
                                <option value="0"> No </option>
                            </select>
                        </div>
                    </div>


                </div>
                {{-- submit button --}}
                <div class="flex justify-center mt-5">
                    <input type="submit"
                        class="bg-bgRed px-5 shadow-xl py-1 text-white rounded text-[calc(15px+.5vw)] cursor-pointer hover:bg-bgWhite hover:text-textRed duration-300 hover:shadow-none"
                        value="Submit" />
                </div>
            </div>

        </div>
    </form>
@endsection









@section('js')
    <script src="{{ asset('assets/js/codeEditor.js') }}"></script>
@endsection

@section('JS')
    <script>
        $data = 1;
        $(document).ready(function() {
            $("#addFileField").click(function() {
                if ($data < 6) {
                    console.log($data);
                    $field = $('#fileRepeater').html();
                    document.getElementById('dynamicField').outerHTML += $field;
                }
                if ($data === 5) {
                    $("#addFileField").css("display", 'none');
                }
                $data++;

            });
        });

        function deleteFile(e) {
            $data--;
            e.parentElement.parentElement.remove();
            $("#addFileField").css("display", "flex");
        }


        // preview image bbefore upload

        function previewThis(e, t) {
            let file = t.parentElement.parentElement.children[0];

            let imgFile = e.target.files[0];
            $(file).attr('src', URL.createObjectURL(imgFile));


        }
    </script>
@endsection
