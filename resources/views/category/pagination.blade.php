@foreach ($elements as $element)
<nav aria-label="navigation">
    <ul class="pagination mt-50 mb-70" >
        <!-- пагинация -->
    <!-- проверка на кол-во стр(...) -->
    @if (is_string($element))
            <li class="disabled" style="margin-left: 0px; margin-right:0px ; padding-left:0px; padding-right:0px ;"><a href="" class="page-link">{{ $element }}</a></li>
    @endif
    <!-- проверяем на массив -->
    @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active" style="margin-left: 0px; margin-right:0px ; padding-left:0px; padding-right:0px ;"><a href="" class="page-link" style="background-color:#d12cc1;border-radius: 7px; color:white;">{{ $page }}</a></li>
                @else
                    <li class="page-item" style="margin-left: 0px; margin-right:0px ; padding-left:0px; padding-right:0px ;"><a class="page-link" href="{{ $url }}" style="border-radius: 7px;">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    </ul>
</nav>
@endforeach