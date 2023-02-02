@extends('includes/master')
@section('body')
    <x-common.navbar />

    <div class="flex justify-between w-full relative mt-[20px] px-2">
        <div class="hidden lg:block min-w-[250px] max-w-[250px] hidden max-h-[560px] sticky top-20 text-textMehandi">

            <div class="flex justify-between font-bold py-2 px-3">
                <span> Filter </span>
                <a href=""> Clear All </a>
            </div>

            <form action="#" method="POST" class="p-2 mt-2 flex flex-col border rounded">
                <label for="price"> Price </label>
                <x-common.label-input type="number" name="min" id="min" placeholder="Min Value" label="Min"
                    inputClass="" />

                <x-common.label-input type="number" name="max" id="max" placeholder="Max Value" label="Max"
                    inputClass="" />

                <div class="text-center mt-1">
                    <x-common.submit-button value="Submit" class="" />
                </div>
            </form>

            <div class="p-2 mt-2 flex flex-col border rounded">
                <label for="title"> Colors </label>
                <div class="h-52 overflow-y-auto">

                    <x-common.labelCheckbox type="checkbox" name='red' label="Red" value="red" />

                    <x-common.labelCheckbox type="checkbox" name='green' label="Green" value="red" />

                    <x-common.labelCheckbox type="checkbox" name='blue' label="Blue" value="blue" />

                    <x-common.labelCheckbox type="checkbox" name='yellow' label="Yellow" value="yellow" />

                    <x-common.labelCheckbox type="checkbox" name='pink' label="Pink" value="pink" />

                    <x-common.labelCheckbox type="checkbox" name='orange' label="Orange" value="orange" />

                    <x-common.labelCheckbox type="checkbox" name='violet' label="violet" value="violet" />
                </div>
            </div>

            <div class="p-2 mt-2 flex flex-col border rounded">
                <label for="title"> Rating </label>
                <x-common.labelCheckbox type="checkbox" name='fourStar' label="4 star & above" value="4" />
                <x-common.labelCheckbox type="checkbox" name='threeStar' label="3 star & above" value="3" />
            </div>



        </div>

        <div class="xl:col-span-4 md:col-span-3 w-full lg:w-[calc(100%-250px)] lg:pl-5">
            <div class="grid grid-cols-2 xs:grid-cols-2 sm:grid-cols-2  md:grid-cols-3 xl:grid-cols-4 gap-2">
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
                <x-common.product-card />
            </div>
        </div>

    </div>
@endsection
