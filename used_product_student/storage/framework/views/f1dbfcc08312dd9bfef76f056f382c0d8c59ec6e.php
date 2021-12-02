<?php $__env->startSection('content'); ?>

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>

                </ul>
            </div>
        </div>
    </div>


    <section class="ptb-54">
        <div class="container">
            <div class="main-content-text">
                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3><?php echo e(trans('index.product_name')); ?>：<?php echo e($item['product_name']); ?></h3>
                <p><?php echo e(trans('index.comment')); ?>: <?php echo $item['description']; ?></p>
                <p><?php echo e(trans('index.reply')); ?>: <?php echo $item['reply']; ?></p>
                <div class="gap-20"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\used_product_students\used_product_student\resources\views/home/comment.blade.php ENDPATH**/ ?>