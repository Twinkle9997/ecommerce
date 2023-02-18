@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex gap-2 flex-col">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="bg-bgGray text-white h-8 w-28 flex justify-center items-center rounded">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="bg-bgRed shadow-lg hover:bg-bgGray hover:shadow-none hover:text-black duration-300  text-white h-8 w-28 flex justify-center items-center rounded">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="bg-bgRed shadow-lg hover:bg-bgGray hover:shadow-none hover:text-black duration-300  text-textWhite h-8 w-28 flex justify-center items-center rounded">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="bg-bgGray text-white text-white h-8 w-20 flex justify-center items-center rounded">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="flex flex-col gap-2">
            <div>
                <p class="flex justify-center gap-1">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="flex justify-center flex-row gap-2">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span class="bg-bgGray text-white h-8 w-8 flex justify-center items-center rounded-full"
                            aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="block" aria-hidden="true">
                                <i class="fa-solid fa-chevron-left"></i>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            class="bg-bgRed shadow-lg hover:bg-bgGray hover:shadow-none hover:text-black duration-300 text-white h-8 w-8 flex justify-center items-center rounded-full"
                            aria-label="{{ __('pagination.previous') }}">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true"
                                class="bg-bgGray text-white shadow-lg hover:bg-bgGray hover:shadow-none hover:text-black duration-300  text-white h-8 w-8 flex justify-center items-center rounded-full">
                                <span class="">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page"
                                        class="bg-bgGray text-white  h-8 w-8 flex justify-center items-center rounded-full">
                                        <span class="">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}"
                                        class="bg-bgRed shadow-lg hover:bg-bgGray hover:shadow-none hover:text-black duration-300  text-white h-8 w-8 flex justify-center items-center rounded-full"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            class="bg-bgRed text-white shadow-lg hover:bg-bgGray hover:shadow-none hover:text-black duration-300 h-8 w-8 flex justify-center items-center rounded-full"
                            aria-label="{{ __('pagination.next') }}">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <div class="bg-bgGray text-white h-8 w-8 flex justify-center items-center rounded-full"
                                aria-hidden="true">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
