<a title="완성" href="javascript:;" onclick="falish(this,'{{route($route, [$id])}}')"
   style="text-decoration:none">
    确认完成
</a>

@push('scripts')
    <script>
        /*删除*/
        function falish(obj, url) {
            layer.confirm('确认要完成吗？', {title: '정보',btn: ['확인', '취소']},(index) => {
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'html',
                    data:{}
                }).done((result) => {
                    //发异步，把数据提交给php
                    layer.msg('已删除!', {icon: 1, time: 1000});
                    window.location.reload();
                }).error(function () {
                    console.log("error");
                }).always(function () {
                });
                //发异步删除数据
            });
        }
    </script>
@endpush
