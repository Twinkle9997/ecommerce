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

            <div>
                <label for="category" class="text-sm sm:text-base">
                    Coupon Start
                </label>
                <select name="start"
                    class="border block w-full rounded px-2 py-[2px] focus:outline-none focus:outline-none capitalize "
                    id="category">
                    <option value=""> Select </option>
                    <option value="1"> Yes </option>
                    <option value="0"> No </option>
                </select>
            </div>

            <x-common.input-with-label type="datetime-local" placeholder="" warningText=" (Coupon start date)"
                name='startDate' label="Coupon Start Date" />

            <x-common.input-with-label type="datetime-local" placeholder="" warningText=" (Coupon end date)" name='endDate'
                label="Coupon End Date" />



            <div class="text-center">
                <x-common.button-second type="Submit" title="Create" />
            </div>
        </form>
    </div>



    <div class="mt-[50px] flex flex-col mb-5 max-w-[calc(100%-40px)] md:w-[auto] w-full my-4 rounded  shadow mx-auto">
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
                    <td> Start </td>
                    <td> Start Date </td>
                    <td> End Date </td>
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
                            @if ($data['start'] == 0)
                                <span class='bg-bgRed px-1 text-sm rounded text-white'> No </span>
                            @else
                                <span class='bg-bgGreen px-1 text-sm rounded text-white'> Yes </span>
                            @endif

                        </td>
                        <td>
                            @if ($data['startDate'])
                                {{ $data['startDate'] }}
                            @else
                                <i class="fa-solid fa-xmark"></i>
                            @endif
                        </td>
                        <td>
                            @if ($data['endDate'])
                                {{ $data['endDate'] }}
                            @else
                                <i class="fa-solid fa-xmark"></i>
                            @endif
                        </td>

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

    <div class="min-w-full">
        {{ $voucher->links() }}
    </div>
@endsection
