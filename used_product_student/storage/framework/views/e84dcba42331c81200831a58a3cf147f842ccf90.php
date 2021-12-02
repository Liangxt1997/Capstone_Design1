<?php $__env->startSection('content'); ?>
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="hero-banner center" style="background:#93d4f0;">
        <div class="container">
            <h1><span class="count">57422</span> 我们平台的用户数目</h1>
            <p class="lead">为您提供海量的最好的二手商品</p>
            <form class="mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="banner-search style-1">
                            <div class="input-group">

                                <form method="get" action="<?php echo e(route('/')); ?>">
                                    <input type="text" name="keyword" value="<?php echo e($keyword); ?>" class="form-control lio-rad" placeholder="按照关键字搜索">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn bt-round"><i class="ti-search"></i></button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Category Section Start ==================================== -->
    <section class="p-0 overlio-top">
        <div class="container">
            <div class="row">

                <!-- Single Category -->
                <?php $__currentLoopData = $tagList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="urip_cated shadow">
                            <div class="urip_cated_avater">
                                <img src="<?php echo e($item['icon']); ?>" class="img-fluid" alt="" />
                            </div>
                            <div class="urip_cated_caps">
                                <h3 class="cats_urip_title"><a href="#"><?php echo e($item['name']); ?></a></h3>
                                <span><?php echo e($item['num']); ?> 下载量</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- ============================ Category Section End ==================================== -->

    <!-- ============================ Newest Designs Start ==================================== -->
    <section class="min-sec">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9">
                    <div class="sec-heading">
                        <h2><?php echo e(isset($list[0])?$list[0]['name']:''); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Items -->
                <?php if(isset($list[0])): ?><?php $__currentLoopData = $list[0]['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="item_group">
                            <img class="trending_item" alt="Trending" src="assets/img/trending-new.svg">
                            <div class="item_group_thumb">
                                <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="item-figure">
                                    <img src="<?php echo e($item['url']); ?>" class="img-fluid" alt="" />
                                </a>
                            </div>
                            <div class="item_group_caption">
                                <h3 class="item_title_bmb"><a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>"><?php echo e($item['name']); ?></a></h3>
                                <div class="item_info_bmc"><i> 所属分类: </i><a class="author_bmv" href="#"><?php echo e($item['category']); ?></a><span> </span><a class="cate_mnb" href="#"></a></div>

                                <div class="item_inner-caption">
                                    <div class="item_inner-last">
                                        <div class="item_list_links">
                                            <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="link link_prview">详情</a>
                                            <a href="#" class="link link_cart"><i class="fa fa-download"></i></a>
                                            <a href="#" class="link link_save"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <!-- ============================ Newest Designs End ==================================== -->

    <!-- ============================ Featured Themes Start ==================================== -->
    <section class="light-w">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9">
                    <div class="sec-heading">
                        <h2><?php echo e(isset($list[1])?$list[1]['name']: ''); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme middle-arrow-hover" id="theme-slide">

                        <!-- Single Items -->
                        <?php if(isset($list[1])): ?><?php $__currentLoopData = $list[1]['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="themes-slides">
                                <div class="item_group shadow-0 m-0">
                                    <img class="trending_item" alt="Trending" src="assets/img/trending-new.svg">
                                    <div class="item_group_thumb">
                                        <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="item-figure">
                                            <img src="<?php echo e($item['url']); ?>" class="img-fluid" alt="" />
                                        </a>
                                    </div>
                                    <div class="item_group_caption">
                                        <h3 class="item_title_bmb"><a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>"><?php echo e($item['name']); ?></a></h3>
                                        <div class="item_info_bmc"><i> 所属分类： </i><a class="author_bmv" href="#"><?php echo e($item['category']); ?></a><span> </span><a class="cate_mnb" href="#"></a></div>
                                        <div class="item_rating">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <span class="rat-info_cvl">(<?php echo e($item['num']); ?> 访问量)</span>
                                        </div>

                                        <div class="item_inner-caption">
                                            <div class="item_inner-last">
                                                <div class="item_list_links">
                                                    <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="link link_prview">详情</a>
                                                    <a href="#" class="link link_save"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Featured Themes End ==================================== -->

    <!-- ============================ News Updates Start ==================================== -->
    <section class="min-sec">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9">
                    <div class="sec-heading">
                        <h2><?php echo e(isset($list[2])? $list[2]['name']: ''); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Items -->
                <?php if(isset($list[2])): ?><?php $__currentLoopData = $list[2]['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="item_group">
                            <img class="trending_item" alt="Trending" src="assets/img/trending-new.svg">
                            <div class="item_group_thumb">
                                <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="item-figure">
                                    <img src="<?php echo e($item['url']); ?>" class="img-fluid" alt="" />
                                </a>
                            </div>
                            <div class="item_group_caption">
                                <h3 class="item_title_bmb"><a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>"><?php echo e($item['name']); ?></a></h3>
                                <div class="item_info_bmc"><i> 所属分类: </i><a class="author_bmv" href="#"><?php echo e($item['category']); ?></a><span> </span><a class="cate_mnb" href="#"></a></div>

                                <div class="item_inner-caption">
                                    <div class="item_inner-last">
                                        <div class="item_list_links">
                                            <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="link link_prview">详情</a>
                                            <a href="#" class="link link_cart"><i class="fa fa-download"></i></a>
                                            <a href="#" class="link link_save"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <!-- ============================ News Updates End ==================================== -->
    <section class="min-sec">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9">
                    <div class="sec-heading">
                        <h2><?php echo e(isset($list[3])?$list[3]['name']: ''); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Items -->
                <?php if(isset($list[3])): ?><?php $__currentLoopData = $list[3]['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="item_group">
                            <img class="trending_item" alt="Trending" src="assets/img/trending-new.svg">
                            <div class="item_group_thumb">
                                <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="item-figure">
                                    <img src="<?php echo e($item['url']); ?>" class="img-fluid" alt="" />
                                </a>
                            </div>
                            <div class="item_group_caption">
                                <h3 class="item_title_bmb"><a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>"><?php echo e($item['name']); ?></a></h3>
                                <div class="item_info_bmc"><i> 所属分类: </i><a class="author_bmv" href="#"><?php echo e($item['category']); ?></a><span> </span><a class="cate_mnb" href="#"></a></div>

                                <div class="item_inner-caption">
                                    <div class="item_inner-last">
                                        <div class="item_list_links">
                                            <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="link link_prview">详情</a>
                                            <a href="#" class="link link_cart"><i class="fa fa-download"></i></a>
                                            <a href="#" class="link link_save"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/index.blade.php ENDPATH**/ ?>