<?php $__env->startSection('content'); ?>

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                </ul>
            </div>
        </div>
    </div>


    <section class="product-details-area ptb-54">
        <div class="container">
            <div class="row align-items-center">
                <div class="product-view-one">
                    <div class="modal-content p-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="product-view-one-image">
                                    <div id="big" class="owl-carousel owl-theme">
                                        <?php $__currentLoopData = $picArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item">
                                            <img src="<?php echo e($item); ?>" alt="Image">
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div id="thumbs" class="owl-carousel owl-theme">
                                        <?php $__currentLoopData = $picArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item">
                                                <img src="<?php echo e($item); ?>" alt="Image">
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-content ml-15">
                                    <h3>
                                        <?php echo e($title); ?>

                                    </h3>
                                    <div class="product-review">
                                        <div class="rating">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                        <a href="#reviews" class="rating-count"><?php echo e($view_num); ?> views</a>
                                    </div>
                                    <div class="price">
                                        <span class="new-price"><?php echo e(trans('index.price_2')); ?>：<?php echo e($price); ?><?php echo e(trans('index.price_logo')); ?> <del><?php echo e(trans('index.price')); ?>：<?php echo e($origin_price); ?><?php echo e(trans('index.price_logo')); ?></del></span>
                                    </div>
                                    <ul class="product-info">
                                        <li>
                                            <p><?php echo $description; ?></p>
                                        </li>
                                        <li>
                                            <span><?php echo e(trans('index.label')); ?>:</span>
                                            <?php echo e($tag_name); ?>

                                        </li>
                                        <li>
                                            <span><?php echo e(trans('index.cate_name')); ?>:</span>
                                            <a href="<?php echo e(route('category', ['category' => $categories_id])); ?>"><?php echo e($category); ?></a>
                                        </li>
                                    </ul>
                                    <div class="wishlist-btn">
                                        <a href="<?php echo e(route('want', ['product_id' => $id])); ?>" class="default-btn">
                                            <i class="ri-heart-line"></i>
                                            <?php echo e(trans('index.want')); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div id="reviews" class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        <?php echo e(trans('index.miaoshu')); ?>

                                    </li>
                                    <li>
                                        <?php echo e(trans('index.comment_title')); ?>

                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <h3><?php echo e(trans('index.product_miaoshu')); ?></h3>
                                            <p><?php echo $description; ?></p>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">
                                                <h3><?php echo e(trans('index.maijia_comment')); ?></h3>
                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <p><?php echo e(trans('index.zongji')); ?><?php echo e($comment_count); ?> <?php echo e(trans('index.comment_num')); ?></p>
                                                    <a href="#" class="btn default-btn"><?php echo e(trans('index.write_comment')); ?></a>
                                                </div>
                                                <div class="review-comments">
                                                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                        <h3><?php echo e($comment['title']); ?></h3>
                                                        <span><strong><?php echo e($comment['username']); ?></strong> | <strong><?php echo e($comment['created_at']); ?> </strong></span>
                                                        <p><?php echo e($comment['description']); ?></p>
                                                        <?php if($comment['reply']): ?>
                                                        <p><?php echo e(trans('index.reply')); ?>：<?php echo e($comment['reply']); ?></p>
                                                            <?php endif; ?>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <div class="review-form">
                                                    <h3><?php echo e(trans('index.write_comment')); ?></h3>
                                                    <form id="commentSub">
                                                        <input type="hidden" name="product_id" id="product_id" value="<?php echo e($id); ?>">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label><?php echo e(trans('index.comment_title')); ?></label>
                                                                    <input type="text" id="title" name="title"
                                                                           placeholder="<?php echo e(trans('index.comment_title')); ?>" required
                                                                           data-error="<?php echo e(trans('index.comment_title')); ?>"
                                                                           class="form-control">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label><?php echo e(trans('index.comment_content')); ?></label>
                                                                    <textarea name="description" id="description" cols="30"
                                                                              rows="8"
                                                                              placeholder="<?php echo e(trans('index.comment_content')); ?>"
                                                                              required
                                                                              data-error="<?php echo e(trans('index.comment_content')); ?>"
                                                                              class="form-control"></textarea>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="btn default-btn"><?php echo e(trans('index.submit')); ?>

                                                                </button>
                                                                <div id="commentmsgSubmit" class="h3 text-center hidden"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="best-seller-area pb-30">
        <div class="container">
            <div class="section-title">
                <h2>관련 상품 추천</h2>
            </div>
            <div class="best-product-slider owl-carousel owl-theme">
                <?php $__currentLoopData = $relateProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="single-products">
                    <div class="product-img">
                        <a href="<?php echo e(route('detail', ['id' => $r_item['id']])); ?>">
                            <img src="<?php echo e($r_item['pic']); ?>" alt="Image">
                        </a>
                    </div>
                    <div class="product-content">
                        <a href="<?php echo e(route('detail', ['id' => $r_item['id']])); ?>" class="title">
                            <?php echo e($r_item['title']); ?>

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
                                <a href="<?php echo e(route('detail', ['id' => $r_item['id']])); ?>">
                                    (<?php echo e($r_item['view_num']); ?> 방문)
                                </a>
                            </li>
                        </ul>
                        <ul class="products-price">
                            <li>
                                중고 가격:  <?php echo e($r_item['price']); ?>  원
                                <Del>원가:  <?php echo e($r_item['origin_price']); ?></Del> 원
                            </li>
                        </ul>
                        <ul class="products-cart-wish-view">
                            <li>
                                <a href="<?php echo e(route('want', ['product_id' => $r_item['id']])); ?>" class="wish-btn">
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\used_product_students\used_product_student\resources\views/home/detail.blade.php ENDPATH**/ ?>