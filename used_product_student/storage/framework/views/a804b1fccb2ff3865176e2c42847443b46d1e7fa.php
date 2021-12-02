<?php $__env->startSection('content'); ?>
    <!-- ============================ Item Detail Start ================================== -->
    <section class="gray-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="_uy76_gallery mb-4">
                        <img src="<?php echo e($pic); ?>" class="img-fluid rounded" alt="" />
                    </div>
                    <div class="_uy76_caption">
                        <h4><?php echo e($title); ?></h4>
                        <div class="g6" style="color:#ef1b55">
                            <?php echo e($category); ?>

                        </div>
                        <div class="g6">
                            <?php echo e($description); ?>

                        </div>
                    </div>
                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-md-12 col-sm-12">

                    <!-- Like & Donate -->
                    <div class="urip_follo_link">
                        <ul class="mt-0">
                            <li><a href="#" class="liks light-dark collectionBtn" id="collectionBtn" data-id="<?php echo e($id); ?>"><i class="fa fa-heart mr-1"></i>收藏</a></li>
                            <li><a href="#" class="liks light-red"><i class="fa fa-share mr-1"></i>分享</a></li>
                        </ul>
                    </div>

                    <!-- Author Info -->
                    <div class="urip_widget_wrap shadow_0 mb-4 large">
                        <div class="urip_widget_avater">
                            <a href="author-portfolio.html"><img src="<?php echo e(asset('assets/img/prestashop.png')); ?>" class="img-fluid circle" alt=""></a>
                            <div class="veryfied_author"><img src="<?php echo e(asset('assets/img/verified.svg')); ?>" class="img-fluid" width="15" alt=""></div>
                        </div>
                        <div class="widget_avater_124">
                            <h4 class="avater_name_214"><a href="author-portfolio.html">上传者:<?php echo e($uploader); ?></a></h4>
                        </div>

                        <div class="urip_follo_link">
                            <ul>
                                <li><a href="#" class="liks light-gray">Follow</a></li>
                                <li><a href="#" class="liks gree_button">Donate</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Download Options -->
                    <a class="btn btn-download " data-id="<?php echo e($id); ?>" id="downloadBtn" data-pic="<?php echo e($pic); ?>" type="button">免费下载<i class="ti-angle-down"></i></a>


                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Item Detail End ================================== -->

    <!-- ============================ Related And Tags ================================== -->
    <section>
        <div class="container">

            <div class="row">

            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3>相关 标签</h3>
                </div>
                <div class="col-lg-12 col-md-12">
                    <ul class="iuhyt_list">
                        <li><a href="javascript:void(0);">创意二手商品</a></li>
                        <li><a href="javascript:void(0);">图片下载</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Related And Tags End ================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/detail.blade.php ENDPATH**/ ?>