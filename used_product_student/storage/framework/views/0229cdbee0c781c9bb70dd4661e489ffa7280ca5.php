<?php $__env->startSection('content'); ?>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li class="active"><?php echo e(trans('index.about')); ?></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="about-area ptb-54">
        <div class="container">
            <div class="about-content">
                <?php echo trans('index.fuwu'); ?>

            </div>
            <div class="gap-30"></div>
            <div class="gap-30"></div>
            <div class="about-content">
                <?php echo trans('index.cate'); ?>

            </div>
            <div class="gap-30"></div>
            <div class="partner-wrap">
                <div class="partner-slider owl-carousel owl-theme">
                    <div class="partner-item">
                        <img src="assets/images/partners/partner-1.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/images/partners/partner-2.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/images/partners/partner-3.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/images/partners/partner-4.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/images/partners/partner-5.png" alt="Image">
                    </div>
                    <div class="partner-item">
                        <img src="assets/images/partners/partner-6.png" alt="Image">
                    </div>
                </div>
            </div>
            <div class="gap-30"></div>
            <div class="gap-30"></div>
            <div class="about-content">
               <?php echo trans('index.mem'); ?>

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/home/about.blade.php ENDPATH**/ ?>