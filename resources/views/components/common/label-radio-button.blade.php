@php
    $rand = rand(0, 9999);
    // $rand2 = "peer-checked/size$rand:bg-red-100";
    // $rand3 = "peer/size$rand";
@endphp

<input type="radio" name="size" id="mobile{{ $rand }}" class="{{ $inputClass }}" />
<label for="mobile{{ $rand }}" class="border w-[50px] flex justify-center rounded {{ $labelClass }}">
    55in
</label>
