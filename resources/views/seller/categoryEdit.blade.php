@extends('includes/master')
@section('body')
    <x-admin.navbar />

    <div class="mt-[50px] my-5 max-w-[calc(100%-40px)] w-full sm:w-[500px] my-4 rounded shadow-xl mx-auto bg-bgWhite p-4">

        <p class="text-center text-[calc(15px+.8vw)] font-semibold text-textRed mb-4">
            Update Category
        </p>

        <form id="formSubmit" action="{{ route('seller.category.update', ['id' => $cat->id]) }}" method="post"
            class="flex flex-col gap-2 capitalize">
            @csrf
            @method('post')
            <x-common.input-with-label type="text" placeholder="Coupon" warningText=" (Coupon Code)" name='category'
                label="Create Coupon" value="{{ $cat->name }}" />

            <input type="hidden" name="id" value="{{ $cat->id }}">
            <div class="text-center">
                <x-common.button-second type="Submit" title="Create" />
            </div>

        </form>
    </div>
@endsection
