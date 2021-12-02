<?php $__env->startSection('content'); ?>
    <!-- ============================ Header Start================================== -->
    <div class="_agt_dash dark" style="background:#675bca url(assets/img/tag-light.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="_capt9oi">
                        <h1 class="text-light">新闻公告</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================== Header header ============================= -->


    <!-- ========================== FAQ's Elements ============================= -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="_faqs9oi87">

                        <!-- Single -->
                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="_sin98ufaq">
                                <h4><?php echo e($item['title']); ?></h4>
                                <p><?php echo e($item['content']); ?></p>
                                <p>发布时间: <?php echo e($item['created_at']); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== FAQ's Elements ============================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/news.blade.php ENDPATH**/ ?>