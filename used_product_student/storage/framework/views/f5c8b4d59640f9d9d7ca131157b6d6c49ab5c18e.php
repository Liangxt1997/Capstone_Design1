        <div class="x-body">
            <form class="layui-form">
                <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__env->startComponent('components.form_item', ['name'=> $field['name'], 'type'=>$field['type'],'description'=>$field['description'],'value'=>$data[ $field['name']], 'options' => isset($field['options'])?$field['options']:[]]); ?>
                    <?php echo $__env->renderComponent(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        保存
                    </button>
                </div>
            </form>
        </div>
<?php $__env->startPush('scripts'); ?>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
            var form = layui.form()
                ,layer = layui.layer;

            //监听提交
            form.on('submit(add)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                $.ajax({
                    url: '<?php echo e(route('products.update', [$data->id])); ?>',
                    type: 'POST',
                    dataType: 'html',
                    data: $('form').serialize(),
                    success: function (result) {
                        layer.msg('增加成功', {
                            icon: 1,
                            time: 1000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            // 获得frame索引
                            var index = parent.layer.getFrameIndex(window.name);
                            //关闭当前frame
                            parent.layer.close(index);
                            window.parent.location.reload()
                        });
                    }
                })
                return false;
            });


        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\student_other_work\web\used_product_students\used_product_student\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>