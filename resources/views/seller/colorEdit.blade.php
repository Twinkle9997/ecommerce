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

        <form action="{{ route('colorupdate.seller') }}" method="POST" class="flex flex-col gap-2">
            @csrf

            <x-common.input-with-label type="color" placeholder="Category of the product" warningText="" name='color'
                label="Color you choosen" value="{{ old('color') ?? $col->name }}" />
            <input type="hidden" name="id" value="{{ $col->id }}">
            {{-- <x-common.input-with-label type="text" placeholder="Category of the product" warningText="" name='color_name'
                label="Create Color Name" value="{{ old('color_name') ?? '#e0115f' }}" /> --}}

            <div class="text-center">
                <x-common.button-second type="Submit" title="Create" />
            </div>

        </form>
    </div>
@endsection
