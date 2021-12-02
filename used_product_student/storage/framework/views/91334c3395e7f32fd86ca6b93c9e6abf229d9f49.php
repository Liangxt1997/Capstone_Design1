<a title="삭제" href="javascript:;" onclick="del(this,'<?php echo e(route($route, [$id])); ?>')"
   style="text-decoration:none">
    <i class="layui-icon">&#xe640;</i>
</a>

<?php $__env->startPush('scripts'); ?>
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
<?php $__env->stopPush(); ?>
<?php /**PATH D:\used_product_students\used_product_student\resources\views/components/action_delete.blade.php ENDPATH**/ ?>