@extends('layouts.page')

@section('nav')
    <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>홈페이지</cite></a>
              <a><cite>사용자 관리</cite></a>
              <a><cite>주문 리스트</cite></a>
            </span>
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
           href="javascript:location.replace(location.href);" title="새로고침"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
@endsection

@section('content')
    <div class="x-body">
        @if ($isSearch)
            @component('components.search_bar', ['search_fields' => $searchFields])
            @endcomponent
        @endif
        <xblock>
            @if ($isCreate)
                @component('components.action_add', ['route'=>'orders.add'])
                @endcomponent
            @endif
            <span class="x-right" style="line-height:40px">총:  {{$list->total()}} 개</span></xblock>
        <table class="layui-table">
            <thead>
            <tr>
                @foreach($titles as $title)
                    <th>
                        @if (is_array($title))
                            {{$title['name']}}
                        @else
                            {{$title}}
                        @endif
                    </th>
                @endforeach
                <th>
                    변경
                </th>
            </tr>
            </thead>
            <tbody id="x-img">
            @foreach($list as $data)
                <tr>
                    @foreach($titles as $name => $title)
                        @if (is_array($title))
                            @component('components.columns', ['type'=>$title['type']])
                                {{$data[$name]}}
                            @endcomponent
                        @else
                            @component('components.columns', ['type'=>'text'])
                                {{$data[$name]}}
                            @endcomponent
                        @endif

                    @endforeach
                    <td class="td-manage">

                        @foreach($data['extensionActions'] as $action)
                            @component('components.action', ['route'=>$action['route'],'icon'=>$action['icon'],'model'=>$action['model'], 'id'=>$data->id])
                            @endcomponent
                        @endforeach

                        @if ($isEdit && $data->status > 1 && $data->status != 98 && $data->status != 99)
                            @component('components.action_edit', ['route'=>'orders.edit', 'id'=>$data->id])
                            @endcomponent
                            状态
                        @endif

{{--                            @if ($data->status == 2)--}}
{{--                                @component('components.action_falish', ['route'=>'orders.filish', 'id'=>$data->id])--}}
{{--                                @endcomponent--}}
{{--                            @endif--}}

                            &nbsp;

                        @if ($data['isDelete'])
                            @component('components.action_delete', ['route'=>'orders.delete', 'id'=>$data->id])
                            @endcomponent
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div id="page">
            {{ $list->links() }}
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        layui.use(['laydate', 'element', 'laypage', 'layer'], function () {
            $ = layui.jquery;//jquery
            laydate = layui.laydate;//日期插件
            lement = layui.element();//面包导航
            laypage = layui.laypage;//分页
            layer = layui.layer;//弹出层

            //以上模块根据需要引入

            layer.ready(function () { //为了layer.ext.js加载完毕再执行
                layer.photos({
                    photos: '#x-img'
                    //,shift: 5 //0-6的选择，指定弹出图片动画类型，默认随机
                });
            });

        });
    </script>
@endpush
