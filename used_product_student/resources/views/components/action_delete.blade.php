<a title="삭제" href="javascript:;" onclick="del(this,'{{route($route, [$id])}}')"
   style="text-decoration:none">
    <i class="layui-icon">&#xe640;</i>
</a>

@push('scripts')
    <script>
        /*删除*/
        function del(obj, url) {
            layer.confirm('삭제하시겠습니까?', {title: '정보', btn: ['확인', '취소']},(index) => {
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'html',
                    data:{_method:"DELETE"}
                }).done((result) => {
                    //发异步，把数据提交给php
                    $(obj).parents("tr").remove();
                    layer.msg('삭제되었습니다!', {icon: 1, time: 1000});
                }).error(function () {
                    console.log("error");
                }).always(function () {
                });
                //发异步删除数据
            });
        }
    </script>
@endpush
