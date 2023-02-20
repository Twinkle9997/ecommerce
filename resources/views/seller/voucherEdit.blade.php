@extends('includes/master')
@section('body')
    <x-admin.navbar />

    <div class="w-[calc(100%-40px)] md:max-w-[500px] shadow-xl my-5 mx-auto rounded p-4 mx-auto">
        <div class="text-center mb-3 text-textRed text-[calc(15px+1vw)] font-semibold">
            Update Voucher
        </div>
        <form id="formSubmit" action="{{ route('seller.voucher.update') }}" method="POST" class="flex flex-col gap-2">
            @csrf

            <input type="hidden" name="id" value="{{ $data->id }}" />

            <x-common.input-with-label type="text" placeholder="Coupon" warningText=" (Coupon Code)" name='coupon'
                value="{{ $data->name }}" label="Create Coupon" />


            <x-common.input-with-label type="text" placeholder="In Percentage" warningText=" (In Percentage)"
                value="{{ $data->discount }}" name='percent' label="Percent" />

            <div>
                <label for="category" class="text-sm sm:text-base">
                    Coupon Start
                </label>
                <select name="start"
                    class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                    id="category">
                    <option value=""> Select </option>
                    <option value="1" @if ($data->start == 1) selected @endif> Yes </option>
                    <option value="0" @if ($data->start == 0) selected @endif> No </option>
                </select>
            </div>

            <x-common.input-with-label type="datetime-local" placeholder="" warningText=" (Coupon start date)"
                name='startDate' value="{{ $data->startDate }}" label="Coupon Start Date" />

            <x-common.input-with-label type="datetime-local" placeholder="" warningText=" (Coupon end date)" name='endDate'
                value="{{ $data->endDate }}" label="Coupon End Date" />


            <div class="text-center">
                <x-common.button-second type="Submit" title="Create" />
            </div>
        </form>
    </div>
@endsection
