<a title="删除" href="javascript:;" onclick="del(this,'<?php echo e(route($route, [$id])); ?>')"
   style="text-decoration:none">
    <i class="layui-icon">&#xe640;</i>
</a>

<?php $__env->startPush('scripts'); ?>
    <script>
        /*删除*/
        function del(obj, url) {
            layer.confirm('确认要删除吗？',  (index) => {
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'html',
                    data:{_method:"DELETE"}
                }).done((result) => {
                    //发异步，把数据提交给php
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000});
                }).error(function () {
                    console.log("error");
                }).always(function () {
                });
                //发异步删除数据
            });
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/components/action_delete.blade.php ENDPATH**/ ?>