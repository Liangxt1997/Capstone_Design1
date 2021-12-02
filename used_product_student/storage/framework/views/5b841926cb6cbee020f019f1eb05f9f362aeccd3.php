<ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe638;</i><cite>系统管理</cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('users')); ?>">
                    <cite>管理员/卖家列表</cite>
                </a>
            </dd>
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('news')); ?>">
                    <cite>新闻管理</cite>
                </a>
            </dd>
        </dl>

    </li>
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe620;</i><cite>会员管理</cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('members', ['user_status' => 2])); ?>">
                    <cite>会员列表</cite>
                </a>
            </dd>

        </dl>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('feedbacks')); ?>">
                    <cite>信息反馈列表</cite>
                </a>
            </dd>

        </dl>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('collections')); ?>">
                    <cite>收藏夹管理</cite>
                </a>
            </dd>
            </dd>
        </dl>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('downloads')); ?>">
                    <cite>下载管理</cite>
                </a>
            </dd>
            </dd>
        </dl>
    </li>
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe62e;</i><cite>二手商品管理</cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('products')); ?>">
                    <cite>二手商品管理列表</cite>
                </a>
            </dd>
            </dd>
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('categories')); ?>">
                    <cite>二手商品分类</cite>
                </a>
            </dd>
            </dd>

        </dl>
    </li>
    
        
            
        
        
            
            
                
                    
                
            
            
        
    
    
        
            
        
        
            
            
                
                    
                
            
            
        
    


</ul>
<?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/layouts/menus.blade.php ENDPATH**/ ?>