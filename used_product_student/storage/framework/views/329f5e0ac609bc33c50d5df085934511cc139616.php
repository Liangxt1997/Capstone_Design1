<a title="정보 관리" href="javascript:;" onclick="banner_edit('정보 관리','<?php echo e(route($route,[$id])); ?>','4','','510')"
   class="ml-5" style="text-decoration:none">
    <i class="layui-icon">&#xe60a;</i>
</a>

<?php $__env->startPush('scripts'); ?>
    <script>
        // 编辑
        function banner_edit(title, url, id, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\used_product_students\used_product_student\resources\views/components/action_information.blade.php ENDPATH**/ ?>