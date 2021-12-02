@extends('layouts.page')
<div class="x-body">
    <form class="layui-form">
        @foreach($fields as $field)
            @if(false)
{{--                <div class="layui-form-item">--}}
{{--                    <label class="layui-form-label"><span class="x-red">*</span>{{$field['description']}}</label>--}}
{{--                    <div class="layui-input-inline" required>--}}
{{--                        <select name="{{$field['name']}}">--}}
{{--                            @foreach($field['options'] as $supplier)--}}
{{--                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>--}}
{{--                                @if($value == $supplier->id)--}}
{{--                                    <option selected="selected" value="{{$supplier->id}}">{{$supplier->name}}</option>--}}
{{--                                @else--}}
{{--                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
            @else
                @component('components.form_item', ['name'=> $field['name'], 'type'=>$field['type'],'description'=>$field['description'],'value'=>'', 'options'=>$field['options'] ?? []])
                @endcomponent
            @endif
        @endforeach
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
            </label>
            <button class="layui-btn" lay-filter="add" lay-submit="">
                추가
            </button>
        </div>
    </form>
</div>
@push('scripts')
    <script>
        layui.use(['form', 'layer'], function () {
            $ = layui.jquery;
            var form = layui.form()
                , layer = layui.layer;

            //监听提交
            form.on('submit(add)', function (data) {
                $.ajax({
                    url: '{{route('products.store')}}',
                    type: 'POST',
                    dataType: 'html',
                    data: $('form').serialize(),
                    success:function (result) {
                        layer.msg('추가 성공', {
                            icon: 1,
                            time: 2000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            // 获得frame索引
                            var index = parent.layer.getFrameIndex(window.name);
                            //关闭当前frame
                            parent.layer.close(index);
                            window.parent.location.reload()
                        });
                        // layer.alert("추가 성공", {icon: 6, time:1000}, function () {
                        //
                        // });
                    }
                })
                return false;
            });
        });
    </script>
@endpush
