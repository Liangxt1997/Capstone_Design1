<ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe638;</i><cite><?php echo e(trans('admin.system')); ?></cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('users')); ?>">
                    <cite><?php echo e(trans('admin.m_g')); ?></cite>
                </a>
            </dd>
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('news')); ?>">
                    <cite><?php echo e(trans('admin.new')); ?></cite>
                </a>
            </dd>
        </dl>

    </li>
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe620;</i><cite><?php echo e(trans('admin.user')); ?></cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('members', ['user_status' => 2])); ?>">
                    <cite><?php echo e(trans('admin.user_list')); ?></cite>
                </a>
            </dd>

        </dl>
        <dl class="layui-nav-child">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('feedbacks')); ?>">
                    <cite><?php echo e(trans('admin.liuyan')); ?></cite>
                </a>
            </dd>

        </dl>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('collections')); ?>">
                    <cite><?php echo e(trans('admin.want')); ?></cite>
                </a>
            </dd>
            </dd>
        </dl>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('products.comments')); ?>">
                    <cite><?php echo e(trans('admin.comment')); ?></cite>
                </a>
            </dd>
            </dd>
        </dl>
    </li>
    <li class="layui-nav-item">
        <a class="javascript:;" href="javascript:;">
            <i class="layui-icon" style="top: 3px;">&#xe62e;</i><cite><?php echo e(trans('admin.product')); ?></cite>
        </a>
        <dl class="layui-nav-child">
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('products')); ?>">
                    <cite><?php echo e(trans('admin.product_list')); ?></cite>
                </a>
            </dd>
            </dd>
            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('categories')); ?>">
                    <cite><?php echo e(trans('admin.cate')); ?></cite>
                </a>
            </dd>
            </dd>

            <dd class="">
            <dd class="">
                <a href="javascript:;" _href="<?php echo e(route('tags')); ?>">
                    <cite><?php echo e(trans('admin.label')); ?></cite>
                </a>
            </dd>
            </dd>

        </dl>
    </li>
</ul>
<?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/layouts/menus.blade.php ENDPATH**/ ?>