<!DOCTYPE html>
<html>

@extends('layouts.page')

@section('content')
        <div class="x-body">
            <form class="layui-form">
                @foreach($fields as $field)
                    @component('components.form_item', ['name'=> $field['name'], 'type'=>$field['type'],'description'=>$field['description'],'value'=>$data[ $field['name']]])
                    @endcomponent
                @endforeach
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="save" lay-submit="">
                        추가
                    </button>
                </div>
            </form>
        </div>
@endsection

@push('scripts')
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
            var form = layui.form()
                ,layer = layui.layer;

            //监听提交
            form.on('submit(save)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                $.ajax({
                    url: '{{route('users.update', [$data->id])}}',
                    type: 'POST',
                    dataType: 'html',
                    data: $('form').serialize()
                }).done((result) => {
                    //发异步，把数据提交给php
                    layer.alert("추가 성공", {icon: 6}, function () {
                        // 获得frame索引
                        var index = parent.layer.getFrameIndex(window.name);
                        //关闭当前frame
                        parent.layer.close(index);
                    });
                }).error(function () {
                    console.log("error");
                }).always(function () {
                });
                return false;
            });


        });
    </script>
@endpush
