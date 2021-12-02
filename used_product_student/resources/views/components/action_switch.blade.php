<a style="text-decoration:none" onclick="switch_stop(this,'{{$id}}')" href="javascript:;" title="不显示">
    <i class="layui-icon">&#xe601;</i>
</a>

@push('scripts')
    <script>
        /*停用*/
        function switch_stop(obj, id) {
            layer.confirm('确认不显示吗？', function (index) {
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="switch_start(this,id)" href="javascript:;" title="显示"><i class="layui-icon">&#xe62f;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">不显示</span>');
                $(obj).remove();
                layer.msg('不显示!', {icon: 5, time: 1000});
            });
        }

        /*启用*/
        function switch_start(obj, id) {
            layer.confirm('确认要显示吗？', function (index) {
                //发异步把用户状态进行更改
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="switch_stop(this,id)" href="javascript:;" title="不显示"><i class="layui-icon">&#xe601;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已显示</span>');
                $(obj).remove();
                layer.msg('已显示!', {icon: 6, time: 1000});
            });
        }
    </script>
@endpush
