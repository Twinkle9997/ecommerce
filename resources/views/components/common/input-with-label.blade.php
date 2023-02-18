<div>
    <label for="{{ $name }}">
        {{ $label }}
        @if ($warningText !== '')
            <span class="text-xs text-textRed">
                {{ $warningText }}
            </span>
        @endif
    </label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
        class="w-full focus:outline-none h-8 rounded border-[1px] px-2" value="{{ $value }}"
        placeholder="{{ $placeholder }}" />

    <span class="text-xs text-textRed error-text {{ $name . '_error' }}">

    </span>

</div>
