<?php $__env->startSection('content'); ?>
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="hero-banner bg-cover center" style="background:#93d4f0 url(assets/img/banner.jpg) no-repeat;" data-overlay="4">
        <div class="container">
            <h1 class="small"><?php echo e($name); ?></h1>
            <p class="lead">这里有海量的、具有创新意识的、您所需要的所有二手商品</p>
            <form class="mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="banner-search style-1">
                            <div class="input-group">
                                <input type="text" class="form-control lio-rad" placeholder="按照二手商品名字搜索">
                                <div class="input-group-append">
                                    <button type="button" class="btn bt-round"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->


    <!-- ============================ All Images List Start ================================== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="urip_column_wrap">
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="urip_column_single">
                            <!-- Single Image Product -->
                            <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="urip_column_three">
                                    <div class="item_image_urip">
                                        <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="urip_link download"><i class="fa fa-download"></i></a>
                                        <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="item-img">
                                            <img src="<?php echo e($item['pic']); ?>" class="img-fluid" alt="" />
                                        </a>
                                        <div class="image_urip_caption">
                                            <div class="urip_caption_flex">
                                                <div class="urip_author">
                                                    <div class="urip_avater_place">
                                                        <h3 class="urip_title"><a href="#"><?php echo e($item['title']); ?></a></h3>
                                                        <span><?php echo e($item['tag']); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="urip_caption_last">
                                                <div class="item_list_links">
                                                    <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="urip_link"><i class="fa fa-plus-circle"></i></a>
                                                    <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="urip_link"><i class="fa fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/categories.blade.php ENDPATH**/ ?>