@php
    $rand = rand(0, 9999);
@endphp

{{-- sm:w-[calc(50%-5px)] --}}
<div class="mt-3 sm:mt-0 w-auto relative" aria-multiline="true">
    <label for="{{ 'id' . $rand }}" class="text-sm sm:text-base">
        {{ $label }}
    </label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ 'id' . $rand }}" multiple
        class="border block w-full rounded px-2 py-1 focus:outline-none focus:outline-none {{ $peerName }}"
        placeholder="{{ $placeholder }}" {{ $required }} />
    <span
        class="absolute font-semibold h-auto max-w-[400px] top-full z-10 right-0 bg-bgRed shadow px-2 opacity-80 hidden {{ $peerCondition }} text-sm py-1 rounded text-white">
        {{ $tooltip }}
    </span>
    {{-- peer-focus/sp:block --}}
</div>
