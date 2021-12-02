<button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除
</button>

@push('scripts')
    <script>
        //批量删除提交
        function delAll() {
            layer.confirm('삭제하시겠습니까?', function (index) {
                //捉到所有被选中的，发异步进行删除
                layer.msg('삭제되었습니다!', {icon: 1});
            });
        }
    </script>
@endpush
