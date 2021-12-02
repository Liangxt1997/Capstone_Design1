<?php $__env->startSection('content'); ?>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">

            </div>
        </div>
    </div>


    <section class="featured-products-area ptb-54">
        <div class="container">
            <div class="section-title text-center">
                <h2><?php echo e($name); ?></h2>
            </div>
            <div class="row justify-content-center">
                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-sm-6">
                    <div class="single-products">
                        <div class="product-img">
                            <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>">
                                <img src="<?php echo e($item['pic']); ?>" alt="Image">
                            </a>
                        </div>
                        <div class="product-content">
                            <a href="<?php echo e(route('detail', ['id' => $item['id']])); ?>" class="title">
                                <?php echo e($item['title']); ?>

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
                                        (<?php echo e($item['view_num']); ?> 访问量)
                                    </a>
                                </li>
                            </ul>
                            <ul class="products-price">
                                <li>
                                    <?php echo e(trans('index.price_2')); ?>：<?php echo e(trans('index.price_logo')); ?><?php echo e($item['price']); ?>

                                    <Del><?php echo e(trans('index.price_logo')); ?><?php echo e($item['origin_price']); ?></Del></li>
                            </ul>
                            <ul class="products-cart-wish-view">
                                <li>
                                    <a href="<?php echo e(route('want', ['product_id' => $item['id']])); ?>" class="wish-btn">
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
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/home/category.blade.php ENDPATH**/ ?>