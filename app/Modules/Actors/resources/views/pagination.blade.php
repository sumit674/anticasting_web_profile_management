@if ($paginator->hasPages())
<ul class="pager">
    @if ($paginator->onFirstPage())
        {{-- <li class="disabled"><span>← Previous</span></li> --}}
        <li class="page-item">
            <a class="page-link disabled" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a>
        </li>
    @else
        {{-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li> --}}
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"> <span aria-hidden="true" class="font-weight-bold">&lt;</span> <span class="sr-only">Previous</span> </a>
        </li>
    @endif
    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active my-active"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    @if ($paginator->hasMorePages())
        {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li> --}}
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a>
        </li>
    @else
        {{-- <li class="disabled"><span>Next →</span></li> --}}
        <li class="page-item">
            <a class="page-link disabled" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"> <span aria-hidden="true" class="font-weight-bold">&gt;</span> <span class="sr-only">Next</span> </a>
        </li>
    @endif
</ul>
@endif 