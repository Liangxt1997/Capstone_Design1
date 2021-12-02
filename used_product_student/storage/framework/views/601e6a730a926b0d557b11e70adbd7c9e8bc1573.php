<!doctype html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/remixicon.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/meanmenu.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">

    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/favicon.png')); ?>">

    <title>留学生二手交易平台 - 首页</title>
</head>
<body>

<div class="preloader">
    <div class="content">
        <div class="box"></div>
    </div>
</div>
<?php echo $__env->make('home.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<section class="subscribe-area ptb-54">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="/" style="font-size: 20px;">
                        <?php echo e(trans('index.logo_name')); ?>

                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="subscribe-content">
                    <span><?php echo e(trans('index.title03')); ?></span>
                    <h3><?php echo e(trans('index.title01')); ?></h3>
                    <p><?php echo e(trans('index.title06')); ?></p>
                </div>
            </div>
            <div class="col-lg-5">
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control"  name="EMAIL" required
                           autocomplete="off">
                    <button class="submit-btn" type="submit">
                        search
                    </button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>


<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/meanmenu.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/range-slider.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/form-validator.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/contact-form-script.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/ajaxchimp.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
</body>
</html>
<script>
    $(".lang-name").html("<?php echo e($setLanguage); ?>");

    $('.removeWant').on('click', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: "<?php echo e(route('collection.delete')); ?>",
            data: {'id': id},
            type: 'delete',
            dataType: 'json',
            async:false,
            success: function (res) {
                if (res.code == '201'){
                    alert(res.message);
                }else{
                    alert('删除成功');
                    location.reload();
                }
            }
        })
    })
    function selectLanguage(key) {
        $.ajax({
            url: "<?php echo e(route('language.get')); ?>",
            data: {'language': key},
            type: 'get',
            dataType: 'json',
            async:false,
            success: function (res) {
                window.location.reload();
            }
        })
    }
</script><?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/home/page.blade.php ENDPATH**/ ?>