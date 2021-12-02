<div class="header header-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="/">
                            二手商品下载网站
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li class="active"><a href="/">首页</a></li>
                            <li><a href="#">二手商品中心<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e(route('category', ['category' =>$item['id']])); ?>" class="active"><?php echo e($item['name']); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <li><a href="#">新闻中心<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="<?php echo e(route('about_us')); ?>">关于我们</a></li>
                                    <li><a href="<?php echo e(route('new')); ?>">新闻公告</a></li>
                                </ul>
                            </li>

                            <li><a href="<?php echo e(route('faceback')); ?>">意见反馈</a></li>

                        </ul>

                        <ul class="nav-menu nav-menu-social align-to-right">
                            <?php if($userdata['name']): ?>
                                <li class="add-listing pink-bg">
                                    <a href="<?php echo e(route('collection')); ?>">
                                        <i class="ti-user mr-1"></i> 个人中心
                                    </a>
                                </li>
                                <li class="add-listing green-bg">
                                    <a href="<?php echo e(route('logout')); ?>">
                                        <i class="ti-user mr-1"></i> 退出
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if(empty($userdata['name'])): ?>
                                <li class="add-listing green-bg">
                                    <a href="<?php echo e(route('signup')); ?>">
                                        <i class="ti-user mr-1"></i> 注册
                                    </a>
                                </li>
                                <li class="add-listing green-bg">
                                    <a href="<?php echo e(route('home_login')); ?>">
                                        <i class="ti-user mr-1"></i> 登录
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/home/menu.blade.php ENDPATH**/ ?>