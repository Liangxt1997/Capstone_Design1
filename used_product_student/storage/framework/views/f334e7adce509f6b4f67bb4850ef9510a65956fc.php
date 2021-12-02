<?php $__env->startSection('content'); ?>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li class="active"><?php echo e(trans('index.all')); ?></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="categories-area pt-54">
        <div class="container">
            <div class="categories-wrap tab products-details-tab">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="section-title">
                            <h2><?php echo e(trans('index.all')); ?></h2>
                        </div>
                        <ul class="tabs">
                            <?php $__currentLoopData = $cateList['cate']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <?php echo e($item); ?>

                            </li>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab_content">
                            <?php $__currentLoopData = $cateList['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tabs_item">
                                <div class="categories-slider owl-carousel owl-theme">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-products new-arrivals">
                                        <div class="product-img">
                                            <a href="<?php echo e(route('detail', ['id' => $value['id']])); ?>">
                                                <img src="<?php echo e($value['pic']); ?>" alt="Image">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a href="<?php echo e(route('detail', ['id' => $value['id']])); ?>" class="title">
                                                <?php echo e($value['title']); ?>

                                            </a>
                                            <ul class="products-rating">
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <i class="ri-star-fill"></i>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(route('detail', ['id' => $value['id']])); ?>">
                                                        (<?php echo e($value['view_num']); ?> view)
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="products-price">
                                                <li>
                                                    <?php echo e(trans('index.price_2')); ?>：<?php echo e($value['price']); ?><?php echo e(trans('index.price_logo')); ?>

                                                    <Del><?php echo e($value['origin_price']); ?><?php echo e(trans('index.price_logo')); ?></Del>
                                                </li>
                                            </ul>
                                            <ul class="products-cart-wish-view">
                                                <li>
                                                    <a href="<?php echo e(route('want', ['product_id' => $value['id']])); ?>" class="wish-btn">
                                                        <i class="ri-heart-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <button class="eye-btn" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="popular-categories-area ptb-54">
        <div class="container">
            <div class="section-title">
                <h2><?php echo e(trans('index.title05')); ?></h2>
            </div>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $newList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-categories">
                        <a href="<?php echo e(route('detail', ['id' => $item_n['id']])); ?>">
                            <img src="<?php echo e($item_n['pic']); ?>" alt="Image">
                        </a>
                        <h3>
                            <a href="<?php echo e(route('detail', ['id' => $item_n['id']])); ?>">
                                <?php echo e($item_n['title']); ?>

                            </a>
                        </h3>
                        <span><?php echo e(trans('index.price_2')); ?> <?php echo e($item_n['price']); ?></span>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\used_product_students\used_product_student\resources\views/home/categories.blade.php ENDPATH**/ ?>