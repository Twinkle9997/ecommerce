<div class="w-full h-[calc(60px+1vw)] bg-bgRed shadow-xl flex justify-between items-center px-3">
    <div class="max-h-[calc(50px+1vw)]">
        <img src="{{ asset('assets/images/logo/temp.jpg') }}" alt="best med" class="max-h-[calc(50px+1vw)] rounded-full">
    </div>
    <div class="flex gap-4 items-center text-white font-semibold hidden md:flex">

        <a href="{{ route('sellers.uploadForm') }}">
            Home
        </a>
        <a href="{{ route('material') }}">
            Materials
        </a>
        <a href="{{ route('voucher') }}">
            Vouchers
        </a>
        <a href="{{ route('category') }}">
            Categories
        </a>
        <a href="{{ route('size') }}">
            Size
        </a>
        <a href="{{ route('color') }}">
            Color
        </a>
        <a href="{{ route('seller.products') }}">
            Products
        </a>

        <div class="group relative pb-4 mt-4">
            <img src="{{ asset('assets/images/profilePic/user.jpg') }}" alt="best med"
                class="max-h-[calc(35px+1vw)] rounded-full cursor-pointer">

            <div
                class="h-auto flex-col w-48 absolute top-full right-0 shadow-lg bg-white text-gray-800 hidden group-hover:flex py-3 rounded z-[100]">

                <a href="" class="hover:px-3 hover:bg-gray-100 hover:text-textRed  p-2 duration-500">
                    Profile
                </a>
                <a href="" class="hover:px-3 hover:bg-gray-100 hover:text-textRed p-2 duration-500">
                    Change Password
                </a>

                <a href="" class="hover:px-3 hover:bg-gray-100 hover:text-textRed p-2  duration-500">
                    Logout
                </a>
            </div>

        </div>

    </div>
</div>
