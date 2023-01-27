@php
    $random = rand(1000, 9999);
    if (!$id) {
        $id = "id$random";
    }
@endphp

<div>

    <div class="flex gap-x-2 mt-1">
        <input type="{{ $type }}" class=" border rounded h-8 w-auto max-w-[190px] px-2 {{ $inputClass }}"
            name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" />
        <label for="{{ $id }}" class="my-auto"> {{ $label }} </label>
    </div>
</div>
