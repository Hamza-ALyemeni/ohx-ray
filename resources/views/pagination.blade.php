@if ($paginator->hasPages())
    <tfoot>
    <tr>
        <th colspan="6">
            <div class="ui right floated pagination menu">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a class="icon item" href="#">
                        <i class="left chevron icon"></i>
                    </a>
                @else
                    <a class="icon item" href="{{ $paginator->previousPageUrl() }}">
                        <i class="left chevron icon"></i>
                    </a>
                @endif
                {{-- Pagination Elements --}}

                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <a class="page-link">{{ $element }}</a>
                    @endif
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a class="item">{{ $page }}</a>
                            @else
                                <a class="item" href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="icon item" href="{{ $paginator->nextPageUrl() }}">
                        <i class="right chevron icon"></i>
                    </a>
                @else
                    <a class="icon item" href="#">
                        <i class="right chevron icon"></i>
                    </a>
                @endif
            </div>
        </th>
    </tr>
    </tfoot>
@endif
