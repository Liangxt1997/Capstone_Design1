@extends('layouts.page')

@section('nav')
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>系统管理</cite></a>
              <a><cite>就餐时间设置</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
@endsection

@section('content')
        <div class="x-body">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
              <ul class="layui-tab-title">
                <li class="layui-this">就餐时间设置</li>
              </ul>
              <div class="layui-tab-content" >
                <div class="layui-tab-item layui-show">
                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item">
                            <label class="layui-form-label"><span class="x-red">*</span>开始时间</label>
                            <div class="layui-input-inline" >
                                <select required="" name="start_time">
                                    @foreach($timers as $time)
                                        @if ($time == $config['start_time'])
                                            <option selected value="{{$time}}">{{$time}}</option>
                                        @else
                                            <option value="{{$time}}">{{$time}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>点整
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><span class="x-red">*</span>结束时间</label>
                            <div class="layui-input-inline" >
                                <select required="" name="end_time">
                                    @foreach($timers as $time)
                                        @if ($time == $config['end_time'])
                                            <option selected value="{{$time}}">{{$time}}</option>
                                        @else
                                            <option value="{{$time}}">{{$time}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>点整
                        </div>
                        <div class="layui-form-item">
                            <button class="layui-btn" lay-submit="" lay-filter="*">
                                保存
                            </button>
                        </div>
                    </form>
                    <div style="height:100px;"></div>
                </div>
              </div>
            </div>
        </div>
@endsection

@push('scripts')
    <script>
        layui.use(['element','layer','form', 'laydate'], function(){
            $ = layui.jquery;//jquery
            lement = layui.element();//面包导航
            layer = layui.layer;//弹出层
            form = layui.form()

            //监听提交
            form.on('submit(*)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                $.ajax({
                    url: '{{route('configs.post')}}',
                    type: 'POST',
                    dataType: 'html',
                    data: $('form').serialize()
                }).done((result) => {
                    //发异步，把数据提交给php
                    layer.alert("保存成功", {icon: 6});
                }).error(function () {
                    console.log("error");
                }).always(function () {
                });
                return false;
            });

        })
    </script>
@endpush
