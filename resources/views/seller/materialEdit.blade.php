@extends('includes/master')
@section('body')
    <x-admin.navbar />

    <div class="w-[calc(100%-40px)] md:max-w-[500px] shadow-xl my-5 mx-auto rounded p-4 mx-auto">
        <div class="text-center mb-3 text-textRed text-[calc(15px+1vw)] font-semibold">
            Update Material
        </div>

        @if (session('success'))
            <div class="py-1 my-2 bg-green-100 rounded w-full text-center">
                {{ session('success') }}
            </div>
        @endif

        <form id="formSubmit" action="{{ route('form.material.updated') }}" method="post" class="flex flex-col gap-2">
            @csrf

            <x-common.input-with-label type="text" placeholder="Coupon" warningText="(Coupon Code)" name='material'
                value="{{ $mat->material }}" label="Create Coupon" />

            <input type="hidden" name="id" value="{{ $mat->id }}">

            <div class="text-center">
                <x-common.button-second type="Submit" title="Create" />
            </div>
        </form>
    </div>
@endsection
