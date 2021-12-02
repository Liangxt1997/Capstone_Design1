<header class="header-area">

    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="header-left-content">
                        <li>
                            <a href="<?php echo e(route('about_us')); ?>">
                                <?php echo e(trans('index.about')); ?>

                            </a>
                        </li>
                        <li>
                            <?php echo e(trans('index.boda')); ?>:
                            <a href="tel:+1-(514)-321-4567">
                                <span>xxxxxxxxx</span>
                            </a>
                        </li>
                        <?php if(!$userdata['name']): ?>
                        <li>
                            <a href="<?php echo e(route('home_login')); ?>">
                                <span class="wish-icon">
                                <i class="ri-login-box-fill"></i>
                                <span class="count"><?php echo e(trans('index.login')); ?></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('signup')); ?>">
                                <span class="wish-icon">
                                <i class="ri-registered-fill"></i>
                                <span class="count"><?php echo e(trans('index.regi')); ?></span>
                                </span>
                            </a>
                        </li>
                            <?php endif; ?>
                        <li>
                            <a href="/admin/">
                                <span class="wish-icon">
                                <i class="ri-building-2-fill"></i>
                                <span class="count"><?php echo e(trans('index.business')); ?></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="header-right-content">
                        <ul>
                            <?php if($userdata['name']): ?>
                            <li>
                                <a href="my-account.html"><?php echo e($userdata['name']); ?></a>
                            </li>
                            <li class="add-listing green-bg">
                                <a href="<?php echo e(route('logout')); ?>">
                                    <i class="ti-user mr-1"></i> <?php echo e(trans('index.exit')); ?>

                                </a>
                            </li>
                            <?php endif; ?>
                            <li>
                                <div class="navbar-option-item navbar-option-language dropdown language-option">
                                    <button class="dropdown-toggle" type="button" id="language2"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="lang-name"></span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language2">
                                        <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="dropdown-item" href="<?php echo e(route('language.get', ['language' => $key])); ?>">
                                            <img src="<?php echo e($key == 'hw'? asset('assets/images/language/hw.png'): asset('assets/images/language/china.png')); ?>" alt="Image">
                                            <?php echo e($item); ?>

                                        </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="middle-header middle-header-style-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="/" style="font-size: 25px;color:#ff6a00">
                            <?php echo e(trans('index.logo_name')); ?>

                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form class="search-box" method="get" action="<?php echo e(route('/')); ?>">
                        <input type="text" name="keyword" value="<?php echo e(isset($keyword)? $keyword: ''); ?>" placeholder="search" class="form-control">
                        <button type="submit" class="search-btn">
                            <i class="ri-search-line"></i>
                            search
                        </button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <ul class="wish-cart">
                        <li>
                            <a href="<?php echo e(route('collection')); ?>">
                                <span class="wish-icon">
                                <i class="ri-heart-line"></i>
                                <span class="count"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('home.comment')); ?>">
                                <span class="wish-icon">
                                    <i class="ri-message-2-line"></i>
                                    <span class="count"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area navbar-area-style-two">
        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="navbar-category">
                        <button type="button" id="categoryButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class="ri-menu-line"></i>
                            <?php echo e(trans('index.product_2')); ?>

                            <i class="arrow-down ri-arrow-down-s-line"></i>
                        </button>
                        <div class="navbar-category-dropdown dropdown-menu" aria-labelledby="categoryButton">
                            <ul>
                                <li>
                                    <a href="<?php echo e(route('home_categories')); ?>"><?php echo e(trans('index.all')); ?></a>
                                </li>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('category', ['category' =>$item['id']])); ?>" class="active"><?php echo e($item['name']); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item float-end">
                                <a href="#" class="nav-link active">
                                    <?php echo e(trans('index.news')); ?>

                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('new')); ?>" class="nav-link"><?php echo e(trans('index.zixun')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('about_us')); ?>" class="nav-link active"><?php echo e(trans('index.about')); ?></a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('faceback')); ?>" class="nav-link"><?php echo e(trans('index.online_liuyan')); ?></a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>

<?php /**PATH D:\used_product_students\used_product_student\resources\views/home/menu.blade.php ENDPATH**/ ?>