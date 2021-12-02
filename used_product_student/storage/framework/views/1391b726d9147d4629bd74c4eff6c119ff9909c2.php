<a title="조작" href="javascript:;" onclick="banner_edit('조작','<?php echo e(route('actions.open',[$id])); ?>?route=<?php echo e($route); ?>&model=<?php echo e($model); ?>&key=<?php echo e($key); ?>','4','','510')"
    class="layui-btn layui-btn-mini ml-5" style="text-decoration:none">
    <?php echo e($icon); ?>

</a>

<?php $__env->startPush('scripts'); ?>
    <script>
        // 수정
        function banner_edit(title, url, id, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\used_product_students\used_product_student\resources\views/components/action.blade.php ENDPATH**/ ?>