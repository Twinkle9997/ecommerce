<div class="grid grid-cols-1 sm:grid-cols-2 my-5 bg-gray-100 py-5" dir="{{ $dir ? $dir : 'ltr' }}">
    <div class="m-auto p-3" dir="ltr">
        <x-common.heading title="{{ $title }}" class="text-textMehandi" />
        <p>
            {{ $text }}
        </p>
        <div class="mt-4 flex justify-around px-2">
            <x-common.button title="{{ $buttonTextOne }}" url="{{ $urlOne }}" />
            <x-common.button title="{{ $buttonTextTwo }}" url="{{ $urlTwo }}" />
        </div>
    </div>
    <div class="m-auto p-3" dir="ltr">
        <img src="{{ asset($img) }}" alt="first products">
    </div>
</div>
