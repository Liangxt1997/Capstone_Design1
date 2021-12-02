<?php $__env->startSection('user_content'); ?>

    <!-- ============================ Dashboard Header Start================================== -->
    <!-- Dashboard Header Navigation -->
    <div class="_dash_navigation_wraps">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="_dash_navigation">
                        <ul>
                            <li class="active"><a href="<?php echo e(route('collection')); ?>">我收藏的<span class="_counts"><?php echo e($num); ?></span></a></li>
                            <li><a href="<?php echo e(route('download')); ?>">我下载的</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================== Dashboard Header header ============================= -->


    <!-- ========================== Dashboard Elements ============================= -->
    <section class="gray-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="_the_capt5t">

                        <div class="row">
                            <!-- Single Item -->
                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="item_group">
                                    <img class="trending_item" alt="Trending" src="<?php echo e(asset('assets/img/trending-new.svg')); ?>">
                                    <div class="item_group_thumb">
                                        <a href="<?php echo e(route('detail', ['id' => $item['product_id']])); ?>" class="item-figure">
                                            <img src="<?php echo e($item['pic']); ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="item_group_caption">
                                        <h3 class="item_title_bmb"><a href="item-detail.html"><?php echo e($item['product_name']); ?></a></h3>
                                        <div class="item_info_bmc"><i> by </i><a class="author_bmv" href="#"><?php echo e($item['tag']); ?></a><span>  </span><a class="cate_mnb" href="#"></a></div>

                                        <div class="item_inner-caption">
                                            <div class="item_inner-last">
                                                <div class="item_list_links">
                                                    <a href="<?php echo e(route('detail', ['id' => $item['product_id']])); ?>" class="link link_prview">详情</a>
                                                    <a href="<?php echo e(route('detail', ['id' => $item['product_id']])); ?>" class="link link_cart"><i class="fa fa-plus-circle"></i></a>
                                                    <a href="<?php echo e(route('detail', ['id' => $item['product_id']])); ?>" class="link link_save"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========================== Dashboard Elements ============================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/collections.blade.php ENDPATH**/ ?>