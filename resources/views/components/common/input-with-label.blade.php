<div>
    <label for="{{ $name }}">
        {{ $label }}
        @if ($warningText !== '')
            <span class="text-xs text-textRed">
                {{ $warningText }}
            </span>
        @endif
    </label>
    <input type="{{ $type }}" name="{{ $name }}"
        class="w-full focus:outline-none h-8 rounded border-[1px] px-2" value="{{ $value }}"
        placeholder="{{ $placeholder }}" />
    @error($name)
        <span class="text-xs text-textRed">
            {{ $message }}
        </span>
    @enderror
</div>
