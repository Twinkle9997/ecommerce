@extends('includes/master')
@section('body')
    <x-admin.navbar />


    <div class="w-[calc(100%-40px)] md:max-w-[500px] shadow-xl my-5 mx-auto rounded p-4 mx-auto">
        <div class="text-center mb-3 text-textRed text-[calc(15px+1vw)] font-semibold">
            Create Size
        </div>

        @if (session('success'))
            <div class="py-1 my-2 bg-green-100 rounded w-full text-center">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="py-1 my-2 bg-green-100 rounded w-full text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('seller.size') }}" method="POST" class="flex flex-col gap-2">

            @csrf

            <x-common.input-with-label type="text" placeholder="Measurement quantity"
                warningText="Measurement quantity (like: Meter, Centimeter, Feet, Liter, Barrel etc)" name='measurement'
                label="Measurement Units" value="{{ old('measurement') }}" />

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
                    <td> Size </td>
                    <td> Action </td>
                </tr>
            </thead>
            <tbody>
                @php
                    $a = 1;
                @endphp
                @forelse ($size as $data)
                    <tr class="odd:bg-gray-100 even:bg-gray-200 h-12">
                        <td>
                            {{ $a++ }}
                        </td>
                        <td class="capitalize">
                            {{ $data['name'] }}
                        </td>
                        <td>
                            <div class="flex justify-center gap-2">
                                <form action="{{ route('seller.size.delete', ['id' => $data->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="Submit"
                                        class="p-2 bg-red-700 shadow fas fa-trash text-white rounded text-sm">
                                    </button>
                                </form>

                                <!-- <form action="{{route('seller.size.edit')}}" method="get">
                                    @csrf
                                    @method('get')
                                    <button type="Submit"
                                        class="p-2 bg-green-600 shadow fas fa-edit text-white rounded text-sm">
                                    </button>
                                </form> -->

                            </div>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <p> No Record Found </p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="p-2">
            {{ $size->links() }}
        </div>

    </div>
@endsection
