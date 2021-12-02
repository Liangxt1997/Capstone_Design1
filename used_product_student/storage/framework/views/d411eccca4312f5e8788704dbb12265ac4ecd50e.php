<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        二手商品管理平台后台管理
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
<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header header header-demo">
        <div class="layui-main">
            <a class="logo" href="./index.html">
                二手商品管理平台后台管理
            </a>
            <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;">admin</a>
                    <dl class="layui-nav-child"> <!-- 二级菜单 -->

                        <dd><a href="<?php echo e(route('admin/logout')); ?>">切换帐号</a></dd>
                        <dd><a href="<?php echo e(route('admin/logout')); ?>">退出</a></dd>
                    </dl>
                </li>

                <!-- <li class="layui-nav-item">
                  <a href="" title="消息">
                      <i class="layui-icon" style="top: 1px;">&#xe63a;</i>
                  </a>
                  </li> -->

            </ul>
        </div>
    </div>
    <div class="layui-side layui-bg-black x-side">
        <div class="layui-side-scroll">
            <?php echo $__env->make('layouts.menus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
    <div class="layui-tab layui-tab-card site-demo-title x-main" lay-filter="x-tab" lay-allowclose="true">
        <div class="x-slide_left"></div>
        <ul class="layui-tab-title">
            <li class="layui-this">
                二手商品管理
                <i class="layui-icon layui-unselect layui-tab-close">ဆ</i>
            </li>
        </ul>
        <div class="layui-tab-content site-demo site-demo-body">
            <div class="layui-tab-item layui-show">
                <iframe frameborder="0" src="<?php echo e(route('products')); ?>" class="x-iframe"></iframe>
            </div>
        </div>
    </div>
    <div class="site-mobile-shade">
    </div>
</div>
<script src="<?php echo e(asset('lib/layui/layui.js')); ?>" charset="utf-8"></script>
<script src="<?php echo e(asset('js/x-admin.js')); ?>"></script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>
<?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/layouts/admin.blade.php ENDPATH**/ ?>