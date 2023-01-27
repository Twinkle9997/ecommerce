@extends('includes/master')
@section('body')
    <div class="flex flex-col justify-center items-center px-3 my-auto md:h-[calc(100vh)] ">

        <div class="text-center">
            <span class="text-[calc(20px+.8vw)] text-textMehandi font-semibold">
                Login
            </span>
        </div>


        <div class="flex flex-col md:flex-row h-auto my-5 shadow-xl max-w-[350px] md:max-w-[calc(500px+10vw)] w-full">


            {{-- logo wrapper --}}
            <div
                class="md:w-1/2 max-w-[350px] p-[40px] h-auto flex justify-center items-center bg-bgMehandi rounded-t md:rounded-l md:rounded-tr-none">
                <img src="{{ asset('/assets/images/logo/temp.jpg') }}"
                    class="max-w-[calc(120px+5vw)] max-h-[calc(120px+5vw)] rounded-full" alt="logo" />
            </div>




            {{-- Login form wrapper --}}
            <div class="md:w-1/2 max-w-[350px] p-4 h-auto flex justify-center items-center  rounded-b md:rounded-r">
                <form action="{{ route('buyer.login') }}" method="post" class="flex flex-col gap-5 w-full">
                    @csrf

                    <div class="text-textRed font-bold">
                        @if (session()->get('success'))
                            {{ session()->get('success') }}
                        @endif
                    </div>

                    <div class="flex flex-col">
                        <label for="email"> Email </label>
                        <input type="email" name="email" class="focus:outline-none w-full rounded h-12 px-2"
                            placeholder="xyz@gmail.com" />
                        @error('email')
                            <span class="text-xs text-textRed"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="password"> Password </label>
                        <input type="password" name="password" class="focus:outline-none w-full rounded h-12 px-2"
                            placeholder="xyz@gmail.com" />
                        @error('password')
                            <span class="text-xs text-textRed"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="flex justify-center">
                        <x-common.button-second type="submit" title="Login" />
                    </div>
                </form>

            </div>
        </div>


        <div class="text-center flex items-center gap-2">
            <span type="button" class="text-textMehandi font-semibold">
                if you don't have an account please Signup
            </span>

            <a href="{{ route('unRegistered.signup') }}" class="bg-bgRed p-0 px-2 text-white rounded shadow">
                Here!
            </a>

        </div>

    </div>
@endsection
