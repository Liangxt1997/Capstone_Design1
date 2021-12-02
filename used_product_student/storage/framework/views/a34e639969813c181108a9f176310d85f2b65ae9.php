<?php $__env->startSection('content'); ?>

    <!-- ============================ Dashboard Header Start================================== -->
    <div class="_agt_dash dark" style="background:#675bca url(assets/img/tag-light.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="dash_hyu76">
                        <div class="dash_hyu74">
                            <div class="dash_hyu72">
                                <img src="assets/img/logos.png" class="img-fluid" alt="" />
                            </div>
                            <div class="dash_hyu71">
                                <h4 class="_hyu71_title">用户昵称:<?php echo e($userdata['name']); ?></h4>
                                <span>邮箱: <?php echo e($userdata['email']); ?></span>
                            </div>
                        </div>
                        <div class="dash_hyu75">
                            <div class="_hyu75_1">
                                <div class="_iju7_reviw">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star"></i>
                                    <span>309 访问量</span>
                                </div>
                                <span>欢迎您！</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/user.blade.php ENDPATH**/ ?>