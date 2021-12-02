<a title="수정" href="javascript:;" onclick="banner_edit('수정','<?php echo e(route($route,[$id])); ?>','4','','510')"
   class="ml-5" style="text-decoration:none">
    <i class="layui-icon">&#xe642;</i>
</a>

<?php $__env->startPush('scripts'); ?>
    <script>
        // 수정
        function banner_edit(title, url, id, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\used_product_students\used_product_student\resources\views/components/action_edit.blade.php ENDPATH**/ ?>