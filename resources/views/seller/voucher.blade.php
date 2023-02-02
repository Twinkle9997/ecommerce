@extends('includes/master')
@section('body')
    <x-admin.navbar />

    <div class="w-[calc(100%-40px)] md:max-w-[500px] shadow-xl my-5 mx-auto rounded p-4 mx-auto">
        <div class="text-center mb-3 text-textRed text-[calc(15px+1vw)] font-semibold">
            Create Voucher
        </div>
        <form id="formSubmit" action="{{ route('form.voucher') }}" method="post" class="flex flex-col gap-2">
            @csrf
            <x-common.input-with-label type="text" placeholder="Coupon" warningText=" (Coupon Code)" name='coupon'
                label="Create Coupon" />

            <x-common.input-with-label type="text" placeholder="In Percentage" warningText=" (In Percentage)"
                name='percent' label="Percent" />

            <div class="text-center">
                <x-common.button-second type="Submit" title="Create" />
            </div>
        </form>
    </div>



    <div class="mt-[50px] mb-5 max-w-[calc(100%-40px)] md:w-[500px] w-full my-4 rounded  shadow mx-auto">
        @if (session('deleted'))
            <p class="py-1 w-full text-center bg-red-100 my-2">
                {{ session('deleted') }}
            </p>
        @endif

        <table class="table-auto w-full text-center rounded">
            <thead class="w-full h-12">
                <tr>
                    <td> Sno. </td>
                    <td> Name </td>
                    <td> Discount </td>
                    <td> Action </td>
                </tr>
            </thead>
            <tbody>
                @php
                    $a = 1;
                @endphp
                @foreach ($voucher as $data)
                    <tr class="odd:bg-gray-100 even:bg-gray-200 h-12">
                        <td> {{ $a++ }} </td>
                        <td> {{ $data['name'] }} </td>
                        <td> {{ $data['discount'] }} </td>
                        <td>
                            <div class="flex justify-center gap-2">
                                <form action="{{ route('voucher.delete', ['id' => $data->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="p-2 bg-red-700 shadow fas fa-trash text-white rounded text-sm">
                                    </button>
                                </form>

                                <form action="{{ route('form.voucher.edit', ['id' => $data->id]) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button class="p-2 bg-green-600 shadow fas fa-edit text-white rounded text-sm">
                                    </button>
                                </form>

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
