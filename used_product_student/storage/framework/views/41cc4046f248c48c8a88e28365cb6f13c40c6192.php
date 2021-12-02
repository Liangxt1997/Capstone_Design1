<?php $__env->startSection('nav'); ?>
    <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite><?php echo e(trans('admin.shouye')); ?></cite></a>
              <a><cite><?php echo e(trans('admin.user')); ?></cite></a>
              <a><cite><?php echo e(trans('admin.want')); ?></cite></a>
            </span>
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"
           href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="x-body">
        <?php if($isSearch): ?>
            <?php $__env->startComponent('components.search_bar', ['search_fields' => $searchFields]); ?>
            <?php echo $__env->renderComponent(); ?>
        <?php endif; ?>
        <xblock>
            <?php if($isCreate): ?>
                <?php $__env->startComponent('components.action_add', ['route'=>'collections.add']); ?>
                <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>
            <span class="x-right" style="line-height:40px">共有数据：<?php echo e($list->total()); ?> 条</span></xblock>
        <table class="layui-table">
            <thead>
            <tr>
                <?php $__currentLoopData = $titles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th>
                        <?php if(is_array($title)): ?>
                            <?php echo e($title['name']); ?>

                        <?php else: ?>
                            <?php echo e($title); ?>

                        <?php endif; ?>
                    </th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th>
                    操作
                </th>
            </tr>
            </thead>
            <tbody id="x-img">
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php $__currentLoopData = $titles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(is_array($title)): ?>
                            <?php $__env->startComponent('components.columns', ['type'=>$title['type']]); ?>
                                <?php echo e($data[$name]); ?>

                            <?php echo $__env->renderComponent(); ?>
                        <?php else: ?>
                            <?php $__env->startComponent('components.columns', ['type'=>'text']); ?>
                                <?php echo e($data[$name]); ?>

                            <?php echo $__env->renderComponent(); ?>
                        <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <td class="td-manage">

                        <?php $__currentLoopData = $data['extensionActions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__env->startComponent('components.action', ['route'=>$action['route'],'icon'=>$action['icon'],'model'=>$action['model'], 'id'=>$data->id]); ?>
                            <?php echo $__env->renderComponent(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($isEdit && $data->status > 1 && $data->status != 98 && $data->status != 99): ?>
                            <?php $__env->startComponent('components.action_edit', ['route'=>'collections.edit', 'id'=>$data->id]); ?>
                            <?php echo $__env->renderComponent(); ?>
                            状态
                        <?php endif; ?>






                            &nbsp;

                        <?php if($data['isDelete']): ?>
                            <?php $__env->startComponent('components.action_delete', ['route'=>'collections.delete', 'id'=>$data->id]); ?>
                            <?php echo $__env->renderComponent(); ?>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div id="page">
            <?php echo e($list->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        layui.use(['laydate', 'element', 'laypage', 'layer'], function () {
            $ = layui.jquery;//jquery
            laydate = layui.laydate;//日期插件
            lement = layui.element();//面包导航
            laypage = layui.laypage;//分页
            layer = layui.layer;//弹出层

            //以上模块根据需要引入

            layer.ready(function () { //为了layer.ext.js加载完毕再执行
                layer.photos({
                    photos: '#x-img'
                    //,shift: 5 //0-6的选择，指定弹出图片动画类型，默认随机
                });
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/admin/collections/list.blade.php ENDPATH**/ ?>