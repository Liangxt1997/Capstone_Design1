<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>首页 - 二手商品下载网站</title>

    <!-- All Plugins Css -->
    <link href="<?php echo e(asset('assets/css/plugins.css')); ?>" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="<?php echo e(asset('assets/css/styles.css')); ?>" rel="stylesheet">
</head>

<body class="blue-skin">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="Loader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <?php echo $__env->make('home.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- =========================== Footer Start ========================================= -->
    <footer class="dark-footer skin-dark-footer">

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">© 2021 二手商品下载网 By <a href="http://Bootstrapmb.com">xxx 学生</a> 版权所有</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- =========================== Footer End ========================================= -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/ion.rangeSlider.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<script>
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }

    $('#collectionBtn').click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: "<?php echo e(route('collection.post')); ?>",
            data: {'id': id},
            type: 'post',
            dataType: 'json',
            async:false,
            success: function (res) {
                if (res.code == '201'){
                    alert(res.message);
                }else{
                    alert('收藏成功');
                }
            }
        })
    })
    $('#downloadBtn').on('click', function () {
        //

        var id = $(this).attr('data-id');
        window.open("http://localhost/download_post/"+id, '_blank');
        
            
            
            
            
            
            

            
        
    })
</script>

</body>
</html><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/page.blade.php ENDPATH**/ ?>