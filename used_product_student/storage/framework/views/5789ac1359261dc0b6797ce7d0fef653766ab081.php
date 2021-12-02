<?php $__env->startSection('content'); ?>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>

                </ul>
            </div>
        </div>
    </div>


    <section class="contact-area page-title-area">
        <div class="container">
            <div class="contact-form">
                <h2><?php echo e(trans('index.liuyan')); ?></h2>
                <form id="feedbackForm">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(trans('index.real_name')); ?></label>
                                <input type="text" name="real_name" id="real_name" class="form-control" required
                                       data-error="<?php echo e(trans('index.real_name')); ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label><?php echo e(trans('index.email')); ?></label>
                                <input type="email" name="email" id="email" required
                                       data-error="<?php echo e(trans('index.email')); ?>" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><?php echo e(trans('index.liuyan')); ?></label>
                                <textarea name="content" class="form-control" id="content" cols="30" rows="6" required
                                          data-error="<?php echo e(trans('index.liuyan')); ?>"></textarea>
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
                            <div id="feedbackSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\used_product_students\used_product_student\resources\views/home/faceback.blade.php ENDPATH**/ ?>