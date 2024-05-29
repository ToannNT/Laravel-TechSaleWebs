<!-- resources/views/vendor/pagination/custom.blade.php -->
@if ($paginator->hasPages())
    <ul class="pagination d-flex justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true"><span class="page-link">Trước</span></li>
        @else
            <li class="page-item"><a class="page-link text-dark fw-medium" href="{{ $paginator->previousPageUrl() }}"
                    rel="prev">Trước</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span
                                class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link text-dark fw-medium"
                                href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link text-dark fw-medium" href="{{ $paginator->nextPageUrl() }}"
                    rel="next">Sau</a></li>
        @else
            <li class="page-item disabled" aria-disabled="true"><span class="page-link">Sau</span></li>
        @endif
    </ul>
@endif
