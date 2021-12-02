<?php $__env->startSection('content'); ?>
    <section class="hero-slider-area hero-slider-area-style-two">
        <div class="hero-slider-two owl-carousel owl-theme">
            <div class="slider-item bg-4">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="hero-slider-content">
                                <span><?php echo e(trans('index.title')); ?></span>
                                <h1><?php echo e(trans('index.title01')); ?></h1>
                                <p><?php echo e(trans('index.title02')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item bg-5">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="hero-slider-content">
                                <h1><?php echo e(trans('index.title01')); ?></h1>
                                <p><?php echo e(trans('index.title03')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-categories-area pt-54 pb-30">
        <div class="container">
            <div class="section-title">
                <h2><?php echo e(trans('index.title04')); ?></h2>
            </div>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $tagList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-2 col-sm-6 col-md-4">
                        <div class="single-popular-categories">
                            <a href="/">
                                <img width="100" src="<?php echo e(asset('assets/images/icon/icon.jpg')); ?>" alt="Image">
                                <span><?php echo e($item['name']); ?></span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>


    <section class="best-seller-area pb-30">
        <div class="container">
            <div class="section-title">
                <h2><?php echo e(trans('index.title05')); ?></h2>
            </div>
            <div class="best-product-slider owl-carousel owl-theme">
                <?php $__currentLoopData = $newProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="single-products">
                    <div class="product-img">
                        <a href="<?php echo e(route('detail', ['id' => $item_new['id']])); ?>">
                            <img src="<?php echo e($item_new['pic']); ?>" alt="Image">
                        </a>
                        <span class="hot">new</span>
                    </div>
                    <div class="product-content">
                        <a href="<?php echo e(route('detail', ['id' => $item_new['id']])); ?>" class="title">
                            <?php echo e($item_new['title']); ?>

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
                                <a href="<?php echo e(route('detail', ['id' => $item_new['id']])); ?>">
                                    (<?php echo e($item_new['view_num']); ?> views)
                                </a>
                            </li>
                        </ul>
                        <ul class="products-price">
                            <li>
                                <?php echo e(trans('index.price_2')); ?>:<?php echo e($item_new['price']); ?><?php echo e(trans('index.price_logo')); ?>

                                <Del><?php echo e(trans('index.price')); ?>：<?php echo e($item_new['origin_price']); ?><?php echo e(trans('index.price_logo')); ?></Del>
                            </li>
                        </ul>
                        <ul class="products-cart-wish-view">
                            <li>
                                <a href="<?php echo e(route('want', ['product_id' => $item_new['id']])); ?>" class="wish-btn">
                                    <i class="ri-heart-line"></i>
                                </a>
                            </li>
                            <li>
                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>


    <section class="featured-products-area rs-used pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-title pt-0 ">
                        <h2><?php echo e(isset($list[0])?$list[0]['name']: ''); ?></h2>
                    </div>
                    <div class="featured-product-wrap">
                        <div class="featured-product-slider owl-carousel owl-theme">
                            <?php if(isset($list[0])): ?><?php $__currentLoopData = $list[0]['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_0): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-products">
                                <div class="product-img">
                                    <a href="<?php echo e(route('detail', ['id' => $item_0['id']])); ?>">
                                        <img src="<?php echo e($item_0['pic']); ?>" alt="Image">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a href="product-details.html" class="title">
                                        <?php echo e($item_0['title']); ?>

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
                                            <a href="<?php echo e(route('detail', ['id' => $item_0['id']])); ?>">
                                                (<?php echo e($item_0['view_num']); ?> views)
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="products-price">
                                        <li>
                                            <?php echo e(trans('index.price_2')); ?>:<?php echo e($item_0['price']); ?><?php echo e(trans('index.price_logo')); ?>

                                            <Del><?php echo e(trans('index.price')); ?>：<?php echo e($item_0['origin_price']); ?><?php echo e(trans('index.price_logo')); ?></Del>
                                        </li>
                                    </ul>
                                    <ul class="products-cart-wish-view">
                                        <li>
                                            <a href="<?php echo e(route('want', ['product_id' => $item_0['id']])); ?>" class="wish-btn">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-product-img bg-3">
                        <div class="featured-product-content">
                            <span class="best"><?php echo e(trans('index.title')); ?></span>
                            <h3><?php echo e(trans('index.title01')); ?></h3>
                            <span class="offer"><?php echo e(trans('index.title02')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sale-discount-area pb-54">
        <div class="container">
            <div class="sale-discount-bg">
                <div class="discount-content">
                    <h5></h5>
                    <h3><?php echo e(trans('index.title06')); ?></h3>
                </div>
            </div>
        </div>
    </section>

    <section class="new-arrivals-area pb-30">
        <div class="container">
            <div class="section-title">
                <h2><?php echo e(isset($list[1])?$list[1]['name']: ''); ?></h2>
            </div>
            <div class="row">
                <?php if(isset($list[1])): ?><?php $__currentLoopData = $list[1]['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-products new-arrivals">
                        <div class="product-img">
                            <a href="<?php echo e(route('detail', ['id' => $item_2['id']])); ?>">
                                <img src="<?php echo e($item_2['pic']); ?>" alt="Image">
                            </a>
                        </div>
                        <div class="product-content">
                            <a href="<?php echo e(route('detail', ['id' => $item_2['id']])); ?>" class="title">
                                <?php echo e($item_2['title']); ?>

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
                                    <a href="product-details.html">
                                        (<?php echo e($item_2['view_num']); ?> view)
                                    </a>
                                </li>
                            </ul>
                            <ul class="products-price">
                                <li>
                                    <?php echo e(trans('index.price_2')); ?>:<?php echo e($item_2['price']); ?><?php echo e(trans('index.price_logo')); ?>

                                    <Del><?php echo e(trans('index.price')); ?>：<?php echo e($item_2['origin_price']); ?><?php echo e(trans('index.price_logo')); ?></Del>
                                </li>
                            </ul>
                            <ul class="products-cart-wish-view">
                                <li>

                                </li>
                                <li>
                                    <a href="<?php echo e(route('want', ['product_id' => $item_2['id']])); ?>" class="wish-btn">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/home/index.blade.php ENDPATH**/ ?>