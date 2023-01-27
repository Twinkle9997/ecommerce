@extends('includes/master')
@section('body')
    <div class="flex flex-col justify-center items-center px-3 my-5 lg:h-screen md:my-[30px]">

        <div class="text-center">
            <span class="text-[calc(20px+.8vw)] text-textMehandi font-semibold">
                User Signup
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
            <div class="md:w-1/2 max-w-[350px] p-4 h-auto flex flex-col justify-center items-center  rounded-b md:rounded-r">

                <form action="{{ route('buyer/signup') }}" method="post" class="flex flex-col gap-5 w-full">
                    @csrf
                    <div class="flex flex-col">
                        <label for="username"> Username </label>
                        <input type="text" name="username" class="focus:outline-none w-full rounded h-12 px-2 shadow"
                            placeholder="Your full Name" value="{{ old('username') }}" />
                        @error('username')
                            <span class="text-xs text-textRed">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="flex flex-col">
                        <label for="email"> Email </label>
                        <input type="email" name="email" class="focus:outline-none w-full rounded h-12 px-2 shadow"
                            placeholder="xyz@gmail.com" value="{{ old('email') }}" />
                        @error('email')
                            <span class="text-xs text-textRed">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="password"> Password </label>
                        <input type="password" name="password" class="focus:outline-none w-full rounded h-12 px-2 shadow "
                            placeholder="xyz@gmail.com" />
                        @error('password')
                            <span class="text-xs text-textRed">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="mobile"> Mobile </label>
                        <input type="number" name="mobile" class="focus:outline-none w-full rounded h-12 px-2 shadow "
                            value="{{ old('mobile') }}" placeholder="xyz@gmail.com" />
                        @error('mobile')
                            <span class="text-xs text-textRed">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-center">
                        <x-common.button-second type="submit" title="Signup" />
                    </div>
                </form>

                <div class="flex justify-end gap-2 mt-3">
                    <button type="button"
                        class="bg-bgRed text-white w-8 h-8 rounded-full hover:bg-bgMehandi duration-500 hover:shadow-lg"
                        title="Login with Gmail">
                        <i class="fa-brands fa-google"></i>
                    </button>

                    <button type="button"
                        class="bg-bgRed text-white w-8 h-8 rounded-full hover:bg-bgMehandi duration-500 hover:shadow-lg"
                        title="Login with facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </button>

                    <button type="button"
                        class="bg-bgRed text-white w-8 h-8 rounded-full hover:bg-bgMehandi duration-500 hover:shadow-lg"
                        title="Login with linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </button>
                </div>

            </div>
        </div>


        <div class="text-center flex items-center gap-2">
            <span type="button" class="text-textMehandi font-semibold">
                if you already have an account please click
            </span>

            <a href="{{ route('unRegistered.login') }}" class="bg-bgRed p-0 px-2 text-white rounded shadow">
                Here!
            </a>

        </div>

    </div>
@endsection
