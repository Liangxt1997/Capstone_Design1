<button class="layui-btn" onclick="add('추가','<?php echo e(route($route)); ?>','600','500')"><i
        class="layui-icon">&#xe608;</i>추가
</button>

<?php $__env->startPush('scripts'); ?>
    <script>
        /*추가*/
        function add(title, url, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\used_product_students\used_product_student\resources\views/components/action_add.blade.php ENDPATH**/ ?>