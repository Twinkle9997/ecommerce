<div
    class="w-[100%] h-[calc(50px+1vw)] bg-bgMehandi flex justify-between items-center px-[calc(10px+1vw)] drop-shadow-md fixed top-0 left-0 z-[9999] ">
    <div class="w-[calc(35px+1vw)] h-[calc(35px+1vw)]">
        <img src="{{ asset('/assets/images/logo/temp.jpg') }}" class="w-[calc(35px+1vw)] h-[calc(35px+1vw)] rounded-full"
            alt="logo">
    </div>

    <div class="flex gap-4 capitalize text-textWhite hidden sm:flex font-bold">
        <a href="" class="my-auto hover:text-textWhite duration-500"> home </a>

        @if (Auth::User())
            <a href="{{ route('logout') }}" class="my-auto hover:text-textWhite duration-500"> logout </a>
        @endif

        <a href="" class="my-auto hover:text-textWhite duration-500"> home </a>
        <a href="" class="my-auto hover:text-textWhite duration-500"> home </a>
        <a href="" class="my-auto hover:text-textWhite duration-500"> home </a>
        <div class="flex gap-1">
            <input type="search" class="h-8 rounded px-2 focus:outline-none text-textMehandi" placeholder="Search" />
            <button class="bg-bgWhite rounded px-2">
                <i class="fas fa-search text-textMehandi"></i>
            </button>
        </div>
    </div>
    <div class="flex flex-col h-6 w-8 my-auto cursor-pointer sm:hidden">
        <span class="h-1 w-full bg-white rounded my-0.5 hover:bg-bgMehandi duration-500"> </span>
        <span class="h-1 w-full bg-white rounded my-0.5 hover:bg-bgMehandi duration-500"> </span>
        <span class="h-1 w-full bg-white rounded my-0.5 hover:bg-bgMehandi duration-500"> </span>
    </div>
</div>
<div class="h-16"></div>
