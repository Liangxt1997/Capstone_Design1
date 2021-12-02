@if ($paginator->hasPages())
    <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-0">
        @if ($paginator->onFirstPage())
        @else
            <a href="javascript:;" class="layui-laypage-prev" data-page="1">
                <em>&lt;</em></a>
        @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="layui-laypage-curr">
                        <em class="layui-laypage-em"></em>
                        <em>{{ $element }}</em>
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="layui-laypage-curr">
                                <em class="layui-laypage-em"></em>
                                <em>{{ $page }}</em>
                            </span>
                        @else
                            <a href="javascript:;" href="{{ $url }}" data-page="{{ $page }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <span href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')" >…</span>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>

                <a href="javascript:;" disabled class="layui-laypage-next" data-page="@lang('pagination.next')">
                    <em>&gt;</em>
                </a>
            @endif
    </div>
{{--    <nav>--}}
{{--        <ul class="pagination">--}}
{{--            --}}{{-- Previous Page Link --}}
{{--            @if ($paginator->onFirstPage())--}}
{{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                    <span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"--}}
{{--                       aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--                </li>--}}
{{--            @endif--}}

{{--            --}}{{-- Pagination Elements --}}
{{--            @foreach ($elements as $element)--}}
{{--                --}}{{-- "Three Dots" Separator --}}
{{--                @if (is_string($element))--}}
{{--                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>--}}
{{--                    </li>--}}
{{--                @endif--}}

{{--                --}}{{-- Array Of Links --}}
{{--                @if (is_array($element))--}}
{{--                    @foreach ($element as $page => $url)--}}
{{--                        @if ($page == $paginator->currentPage())--}}
{{--                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            @endforeach--}}

{{--            --}}{{-- Next Page Link --}}
{{--            @if ($paginator->hasMorePages())--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"--}}
{{--                       aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                    <span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </nav>--}}
@endif
