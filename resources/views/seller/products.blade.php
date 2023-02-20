@extends('includes/master')
@section('body')
    <x-admin.navbar />
    <div class="shadow-xl w-[calc(100%-4vw)] my-[20px] rounded mx-auto text-center my-5 py-2 overflow-x-auto">
        <table class="w-full text-center">
            <thead class="h-12 rounded font-semibold">
                <tr>
                    <td class="p-3"> Sno. </td>
                    <td class="p-3"> Name </td>
                    <td class="p-3"> Files </td>
                    <td class="p-3"> Price </td>
                    <td class="p-3"> Coupon </td>
                    <td class="p-3"> Category </td>
                    <td class="p-3"> Material </td>
                    <td class="p-3"> Action </td>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-gray-100 even:bg-gray-200 hover:bg-gray-500 hover:text-textWhite h-12 duration-200">
                    <td>1</td>
                    <td class="p-3 min-w-[250px] md:w-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, consectetur.
                    </td>
                    <td class="p-3 min-w-[250px] md:w-auto">

                        <img src="{{ asset('assets/') }}" alt="">
                    </td>
                    <td class="p-3"> 200 </td>
                    <td class="p-3"> Yes </td>
                    <td class="p-3"> Silk </td>
                    <td class="p-3"> Material </td>
                    <td>
                        <div class="flex wrap justify-center items-center flex-col md:flex-row gap-2 p-1 px-2">
                            <a href=""
                                class=" bg-bgRed text-white text-sm h-8 flex justify-center items-center w-8 shadow hover:bg-white hover:text-textRed rounded duration-300">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                            <a href=""
                                class=" bg-bgGreen text-white text-sm h-8 flex justify-center items-center w-8 shadow hover:bg-white hover:text-textGreen rounded duration-300">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a href=""
                                class=" bg-blue-700 text-white text-sm h-8 flex justify-center items-center w-8 shadow hover:bg-white hover:text-blue-700 rounded duration-300">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
