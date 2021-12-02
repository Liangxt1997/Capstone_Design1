<?php $__env->startSection('content'); ?>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>

                </ul>
            </div>
        </div>
    </div>


    <section class="contact-area ptb-54">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-europe">
                        <h3><?php echo e(trans('index.m_p')); ?></h3>
                        <ul>
                            <li class="p-0">
                                <h4><?php echo e(trans('index.product')); ?></h4>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                <?php echo e(trans('index.product')); ?><?php echo e(trans('index.name')); ?>: <?php echo e($product['title']); ?>

                            </li>

                            <li>
                                <i class="ri-time-line"></i>
                                <?php echo e(trans('index.price_2')); ?>：<?php echo e($product['price']); ?><?php echo e(trans('index.price_logo')); ?>

                            </li>
                        </ul>
                        <ul>
                            <li class="p-0">
                                <h4><?php echo e(trans('index.m_m')); ?></h4>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                <?php echo e(trans('index.m_n')); ?>: <?php echo e($shop['name']); ?>

                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                <?php echo e(trans('index.m_s')); ?>: <?php echo e($shop['phone']); ?>

                            </li>
                            <li>
                                <i class="ri-time-line"></i>
                                <?php echo e(trans('index.m_j')); ?>: <?php echo e($shop['description']); ?>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="map">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-area pb-54">
        <div class="container">
            <div class="contact-form">
                <h2><?php echo e(trans('index.lianxi')); ?></h2>
                <form id="contactForm">
                    <input type="hidden" id="product_id" name="product_id" value="<?php echo e($product['id']); ?>">
                    <input type="hidden" name="product_name" value="<?php echo e($product['title']); ?>">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(trans('index.name')); ?></label>
                                <input type="text" name="username" id="username" class="form-control" required
                                       data-error="<?php echo e(trans('index.name')); ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(trans('index.email')); ?></label>
                                <input type="email" name="email" id="email" class="form-control" required
                                       data-error="<?php echo e(trans('index.email')); ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(trans('index.phone')); ?></label>
                                <input type="text" name="phone_number" id="phone_number" required
                                       data-error="<?php echo e(trans('index.phone')); ?>" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><?php echo e(trans('index.liyou')); ?></label>
                                <textarea name="content" class="form-control" id="content" cols="30" rows="6" required
                                          data-error="<?php echo e(trans('index.liyou')); ?>"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div style="color: red; margin-left: 20px;" class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                                <span><?php echo e(trans('index.submit')); ?></span>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/home/want.blade.php ENDPATH**/ ?>