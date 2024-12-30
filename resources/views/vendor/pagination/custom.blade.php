@if ($paginator->hasPages())
    <ul class="pagination pagination-rounded m-0">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link"><i class='bx bx-left-arrow-alt'></i></span>
            </li>
        @else
            <li class="page-item">
                <a href="#" class="page-link" wire:click="previousPage" wire:loading.attr="disabled">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <span class="page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a href="#" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a href="#" class="page-link" wire:click="nextPage" wire:loading.attr="disabled">
                    <i class='bx bx-right-arrow-alt'></i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link"><i class='bx bx-right-arrow-alt'></i></span>
            </li>
        @endif
    </ul>
@endif
