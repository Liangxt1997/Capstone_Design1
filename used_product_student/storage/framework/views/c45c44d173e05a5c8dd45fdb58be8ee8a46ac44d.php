<?php $__env->startSection('content'); ?>

    <!-- ============================ Dashboard Header Start================================== -->
    <!-- Dashboard Header Navigation -->
    <?php echo $__env->yieldContent('user_content'); ?>
    <!-- ============================ Call To Action Start ================================== -->
    <section class="call-to-act" style="background:#5d47dd url(assets/img/landing-bg.png) no-repeat">
        <div class="container">
            <div class="row justify-content-center">
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/home/user.blade.php ENDPATH**/ ?>