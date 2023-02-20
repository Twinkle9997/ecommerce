@extends('includes/master')
@section('body')
    <x-admin.navbar />


    <div class="w-[calc(100%-40px)] md:max-w-[500px] shadow-xl my-5 mx-auto rounded p-4 mx-auto">
        <div class="text-center mb-3 text-textRed text-[calc(15px+1vw)] font-semibold">
            Create Color
        </div>

        @if (session('success'))
            <div class="py-1 my-2 bg-green-100 rounded w-full text-center">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="py-1 my-2 bg-red-200 rounded w-full text-center">
                {{ session('error') }}
            </div>
        @endif
        {{-- id="main_form" --}}
        <form action="{{ route('seller.color') }}" method="POST" class="flex flex-col gap-2">
            @csrf

            <x-common.input-with-label type="color" placeholder="Category of the product" warningText="" name='color'
                label="Create Color" value="{{ old('color') ?? '#e0115f' }}" />

            {{-- <x-common.input-with-label type="text" placeholder="Category of the product" warningText="" name='color_name'
                label="Create Color Name" value="{{ old('color_name') ?? '#e0115f' }}" /> --}}

            <div class="text-center">
                <x-common.button-second type="Submit" title="Create" />
            </div>

        </form>
    </div>


    <div class="mt-[50px] mb-5 max-w-[calc(100%-40px)] w-full sm:w-[500px] my-4 rounded shadow mx-auto bg-bgWhite">

        @if (session('deleted'))
            <div class="py-1 my-2 bg-red-100 rounded w-full text-center">
                {{ session('deleted') }}
            </div>
        @endif

        <table class="table-auto w-full text-center rounded">
            <thead class="w-full h-12">
                <tr>
                    <td> Sno. </td>
                    <td> Name </td>
                    <td> Action </td>
                </tr>
            </thead>
            <tbody>
                @php
                    $a = 1;
                    // echo '<pre>';
                    // echo Auth::user()->id;
                    // print_r($category);
                @endphp
                @forelse ($color as $data)
                    <tr class="odd:bg-gray-100 even:bg-gray-200 h-12">
                        <td> {{ $a++ }} </td>
                        <td class="flex justify-center items-center">
                            <div class="w-8 h-8 mt-2 rounded-full" title="{{ $data->name }}"
                                style="background: {{ $data->name }}"></div>
                        </td>
                        <td>
                            <div class="flex justify-center gap-2">
                                <form action="{{ route('seller.color.delete') }}/{{ $data->id }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <button type="Submit"
                                        class="p-2 bg-red-700 shadow fas fa-trash text-white rounded text-sm">
                                    </button>
                                </form>

                                <form action="{{ route('seller.color.edit') }}" method="post">
                                    @csrf
                                    @method('get')
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <button type="Submit"
                                        class="p-2 bg-green-600 shadow fas fa-edit text-white rounded text-sm">
                                    </button>
                                </form>

                            </div>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <p> No Record Found </p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="p-2">
            {{ $color->links() }}
        </div>

    </div>
@endsection
@section('JS')
    <script>
        $(document).ready(function() {

            $("#color").change(function() {
                var col = $("#color").val();
                $("#color_name").val(col);
            });

            // $("#color_name").change(function() {
            //     var col = $("#color_name").val();
            //     $("#color").val(col);
            // });

        });
    </script>
@endsection
