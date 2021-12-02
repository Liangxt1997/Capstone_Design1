@switch($type)
    @case('image')
        <td>
            <img src="{{$slot}}" width="200" alt="">点击图片试试
        </td>
        @break
    @case('bool')
        @if ($value)
            <td class="td-status">
                    <span class="layui-btn layui-btn-normal layui-btn-mini">
                        {{ $slot }}
                    </span>
            </td>
        @else
            <td class="td-status">
                    <span class="layui-btn layui-btn-danger layui-btn-mini">
                        {{ $slot }}
                    </span>
            </td>
        @endif
        @break
    @default
        <td>
            {{ $slot }}
        </td>
@endswitch
