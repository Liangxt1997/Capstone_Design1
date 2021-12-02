<?php $__env->startSection('content'); ?>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>

                </ul>
            </div>
        </div>
    </div>


    <section class="user-area ptb-54">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-form-content ml-15">
                        <h3><?php echo e(trans('index.regi')); ?></h3>
                        <form class="user-form" method="post" action="<?php echo e(route('signup.post')); ?>">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label><?php echo e(trans('index.account')); ?></label>
                                        <input type="text" id="name" name="name" required="" lay-verify="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label><?php echo e(trans('index.email')); ?></label>
                                        <input type="text" id="email" name="email" required="" lay-verify="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label><?php echo e(trans('index.pwd')); ?></label>
                                        <input type="password" id="pass" name="password" required="" lay-verify="pass" class="form-control">
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
                                <div class="col-12">
                                    <button class="default-btn register" type="submit">
                                        <?php echo e(trans('index.regi')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\used_product_students\used_product_student\resources\views/home/signup.blade.php ENDPATH**/ ?>