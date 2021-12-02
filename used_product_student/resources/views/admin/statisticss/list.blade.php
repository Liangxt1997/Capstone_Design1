@extends('layouts.page')

@section('nav')
    <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>统计管理</cite></a>
              <a><cite>销量统计列表</cite></a>
            </span>
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
           href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
@endsection

@section('content')
    <div class="x-body">
        @if ($isSearch)
            @component('components.search_bar', ['search_fields' => $searchFields])
            @endcomponent
        @endif
        <xblock>

            <span class="x-right" style="line-height:40px">共有数据：{{$list->total()}} 条</span></xblock>
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
