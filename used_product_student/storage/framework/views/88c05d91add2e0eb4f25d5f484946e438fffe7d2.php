<?php $__env->startSection('content'); ?>
    <!-- ============================ Header Start================================== -->
    <div class="_agt_dash dark" style="background:#675bca url(assets/img/tag-light.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="_capt9oi">
                        <h1 class="text-light">意见反馈</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================== Header header ============================= -->

    <!-- ========================= Contact Info ============================= -->
    <section>

        <div class="container">

            <!-- row Start -->
            <div class="row">

                <div class="col-lg-7 col-md-7">
                    <form method="post" action="<?php echo e(route('feedback.post')); ?>">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>真实姓名</label>
                                    <input type="text" id="real_name" name="real_name" required="" lay-verify="real_name" class="form-control simple">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>我的邮箱</label>
                                    <input type="email" id="email" name="email" required="" lay-verify="email" class="form-control simple">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>标题</label>
                            <input type="text" id="title" name="title" required="" lay-verify="title" class="form-control simple">
                        </div>

                        <div class="form-group">
                            <label>反馈内容</label>
                            <textarea id="content" name="content" required="" lay-verify="content"class="form-control simple"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn theme-bg rounded" type="submit">提交</button>
                        </div>
                    </form>

                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="contact-info">

                        <h2>将您的感受反馈给我们</h2>
                        <p>亲爱的用户，感谢您百忙之中将平台的问题反馈给我们，我们会在24小时之内通过电话联系您，以此来解决给您带来的不便。感谢您对我们平台的建议，祝您生活愉快！</p>

                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ========================= Contact Info ============================ -->


    <!-- ============================ Call To Action Start ================================== -->
    <section class="call-to-act" style="background:#5d47dd url(assets/img/landing-bg.png) no-repeat">
        <div class="container">
            <div class="row justify-content-center">


            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/faceback.blade.php ENDPATH**/ ?>