<?php switch($type):
    case ('image'): ?>
        <td>
            <img src="<?php echo e($slot); ?>" width="200" alt="">点击图片试试
        </td>
        <?php break; ?>
    <?php case ('bool'): ?>
        <?php if($value): ?>
            <td class="td-status">
                    <span class="layui-btn layui-btn-normal layui-btn-mini">
                        <?php echo e($slot); ?>

                    </span>
            </td>
        <?php else: ?>
            <td class="td-status">
                    <span class="layui-btn layui-btn-danger layui-btn-mini">
                        <?php echo e($slot); ?>

                    </span>
            </td>
        <?php endif; ?>
        <?php break; ?>
    <?php default: ?>
        <td>
            <?php echo e($slot); ?>

        </td>
<?php endswitch; ?>
<?php /**PATH D:\other_work\book_product_project\book_product_admin\resources\views/components/columns.blade.php ENDPATH**/ ?>