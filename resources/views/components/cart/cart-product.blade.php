<div class="flex gap-2 h-auto w-auto p-3 border border-gray-100 mx-2 mb-2 rounded shadow">
    <div class="flex flex-col">
        <div class="max-h-[calc(150px+4vw)] max-w-[calc(150px+4vw)] my-auto">
            <img src="{{ asset('/assets/images/products/fir.jpg') }}" class="max-w-auto max-h-auto" alt="product name">
        </div>
        <x-common.counter />
    </div>
    <x-cart.cart-details />
</div>
