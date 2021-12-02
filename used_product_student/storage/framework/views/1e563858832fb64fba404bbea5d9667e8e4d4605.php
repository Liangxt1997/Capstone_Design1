<a title="操作" href="javascript:;" onclick="banner_edit('操作','<?php echo e(route('actions.open',[$id])); ?>?route=<?php echo e($route); ?>&model=<?php echo e($model); ?>&key=<?php echo e($key); ?>','4','','510')"
    class="layui-btn layui-btn-mini ml-5" style="text-decoration:none">
    <?php echo e($icon); ?>

</a>

<?php $__env->startPush('scripts'); ?>
    <script>
        // 编辑
        function banner_edit(title, url, id, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\other_work\book_product_project\book_product_admin\resources\views/components/action.blade.php ENDPATH**/ ?>