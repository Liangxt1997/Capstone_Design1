<?php $__env->startSection('content'); ?>
    <!-- ============================ Dashboard Header Start================================== -->
    <div class="_agt_dash dark" style="background:#675bca url(assets/img/tag-light.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="_capt9oi">
                        <h1 class="text-light">登录页面</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================== Dashboard Header header ============================= -->

    <!-- ========================== SignUp Elements ============================= -->
    <section class="gray-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-11">

                    <div class="row no-gutters position-relative log_rads">

                        <div class="col-lg-7 col-md-7 position-static p-4 pl-md-0">
                            <div class="log_wraps">
                                <div class="log__heads">
                                    <h4 class="mt-0 logs_title">登 <span class="theme-cl">录</span></h4>
                                </div>
                                <form method="POST" action="<?php echo e(route('home_login.post')); ?>">
                                    <div class="form-group">
                                        <label>用户名</label>
                                        <input type="text" id="name" name="name" required="" lay-verify="username"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>密码</label>
                                        <input type="password" id="pass" name="password" required="" lay-verify="pass" class="form-control">
                                    </div>

                                    <div class="logs_foot mb-3">
                                        <div class="logs_foot_first">
                                            <input id="ct-1" class="checkbox-custom" name="ct-1" type="checkbox">
                                            <label for="ct-1" class="checkbox-custom-label">同意</label>
                                        </div>
                                        <div class="logs_foot_last">
                                            没有账号? <a href="<?php echo e(route('signup')); ?>" class="theme-cl">注册</a>
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
                                    <div class="form-group">
                                        <button type="submit" class="btn theme-bg btn-md full-width pop-login">登录</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Login Elements ============================= -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/login.blade.php ENDPATH**/ ?>