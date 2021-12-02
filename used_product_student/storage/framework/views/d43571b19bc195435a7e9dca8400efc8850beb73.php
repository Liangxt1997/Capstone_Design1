<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>
            二手商品管理后台
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="<?php echo e(asset('css/x-admin.css')); ?>" media="all">
    </head>

    <body style="background-color: #d17e42">
        <div class="x-box">
            <div class="x-top">
                <i class="layui-icon x-login-close">
                    &#x1007;
                </i>
                <ul class="x-login-right">
                </ul>
            </div>
            <div class="x-mid">
                <div class="input">
                    <form method="POST" action="<?php echo e(route('login.post')); ?>" class="layui-form">
                        <div class="layui-form-item x-login-box">
                            <label for="username" class="layui-form-label">
                                <i class="layui-icon">&#xe612;</i>
                            </label>
                            <div class="layui-input-inline">
                                <input type="text" id="name" name="name" required="" lay-verify="username"
                                autocomplete="off" placeholder="name" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item x-login-box">
                            <label for="pass" class="layui-form-label">
                                <i class="layui-icon">&#xe628;</i>
                            </label>
                            <div class="layui-input-inline">
                                <input type="password" id="pass" name="password" required="" lay-verify="pass"
                                autocomplete="off" placeholder="******" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item x-login-box">
                            <label class="layui-input-inline" style="float: right;">没有账户？赶紧<a href="<?php echo e(route('register')); ?>">注 册</a> </label>
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

                        <div class="layui-form-item" id="loginbtn">
                            <button type="submit" class="layui-btn" lay-filter="save" lay-submit="">
                                <?php echo e(trans('admin.login')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?php echo e(asset('lib/layui/layui.js')); ?>" charset="utf-8">
        </script>
        <script>
            layui.use(['form'],
            function() {
                $ = layui.jquery;
                var form = layui.form(),
                layer = layui.layer;

                $('.x-login-right li').click(function(event) {
                    color = $(this).attr('color');
                    $('body').css('background-color', color);
                });

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

            });

        </script>
    </body>

</html>
<?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/auth/login.blade.php ENDPATH**/ ?>