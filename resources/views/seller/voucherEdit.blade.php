@extends('includes/master')
@section('body')
    <x-admin.navbar />

    <div class="w-[calc(100%-40px)] md:max-w-[500px] shadow-xl my-5 mx-auto rounded p-4 mx-auto">
        <div class="text-center mb-3 text-textRed text-[calc(15px+1vw)] font-semibold">
            Update Voucher
        </div>
        <form id="formSubmit" action="{{ route('form.voucher.updated') }}" method="POST" class="flex flex-col gap-2">
            @csrf

            <input type="hidden" name="id" value="{{ $data->id }}" />
            <x-common.input-with-label type="text" placeholder="Coupon" warningText=" (Coupon Code)" name='coupon'
                value="{{ $data->name }}" label="Create Coupon" />

            <x-common.input-with-label type="text" placeholder="In Percentage" warningText=" (In Percentage)"
                value="{{ $data->discount }}" name='percent' label="Percent" />

            <div class="text-center">
                <x-common.button-second type="Submit" title="Create" />
            </div>
        </form>
    </div>
@endsection
