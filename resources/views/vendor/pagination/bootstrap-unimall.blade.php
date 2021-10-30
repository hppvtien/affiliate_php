
    @if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item pagan active">
                                <a class="page-link" href="javascript:;">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link apang" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>
    @endif

<style>
    .pagan.active .page-link{
        background: #0b2d25!important;
    }
    a.apang{
        color: #0b2d25!important;
    }
</style>
