<button class="layui-btn" onclick="add('添加','<?php echo e(route($route)); ?>','600','500')"><i
        class="layui-icon">&#xe608;</i>添加
</button>

<?php $__env->startPush('scripts'); ?>
    <script>
        /*添加*/
        function add(title, url, w, h) {
            x_admin_show(title, url, w, h);
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\student_other_work\used_book_project\used_book_admin\resources\views/components/action_add.blade.php ENDPATH**/ ?>