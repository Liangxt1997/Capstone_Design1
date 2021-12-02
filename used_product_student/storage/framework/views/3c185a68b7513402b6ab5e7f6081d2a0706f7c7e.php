<?php switch($type):
    case ('image'): ?>
    <div class="layui-form-item">
        <label for="link" class="layui-form-label">
            <span class="x-red">*</span><?php echo e($description); ?>

        </label>
        <div class="layui-input-inline">
            <div class="site-demo-upbar">
                <input type="file" name="file" class="layui-upload-file" >
            </div>
        </div>
    </div>
        <div class="layui-form-item">
            <label  class="layui-form-label">缩略图
            </label>
            <input type="hidden" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>">
            <img id="<?php echo e($name); ?>_upload" width="400" src="<?php echo e($value); ?>">
        </div>
    <?php $__env->startPush('scripts'); ?>
        <script>
            layui.use([ 'upload'], function() {
                $ = layui.jquery;
                //图片上传接口
                layui.upload({
                    url: '<?php echo e(route('file.upload')); ?>' //上传接口
                    , success: function (res) { //上传成功后的回调
                        console.log(res);
                        $('#<?php echo e($name); ?>_upload').attr('src', res.url);
                        $('#<?php echo e($name); ?>').val(res.url);
                    }
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
    <?php break; ?>
    <?php case ('number'): ?>
    <div class="layui-form-item">
        <label for="link" class="layui-form-label">
            <span class="x-red">*</span><?php echo e($description); ?>

        </label>
        <div class="layui-input-inline">
            <input type="number" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" required="" value="<?php echo e($value); ?>" lay-verify="required"
                   autocomplete="off" class="layui-input">
        </div>
    </div>
    <?php break; ?>
    <?php case ('select'): ?>
    <div class="layui-form-item">
        <label class="layui-form-label"><span class="x-red">*</span><?php echo e($description); ?></label>
        <div class="layui-input-inline" >
            <select required="" name="<?php echo e($name); ?>">
                <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($value == $option['id']): ?>
                        <option selected="selected" value="<?php echo e($option['id']); ?>"><?php echo e($option['name']); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($option['id']); ?>"><?php echo e($option['name']); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <?php break; ?>
    <?php case ('text'): ?>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label"><?php echo e($description); ?></label>
        <div class="layui-input-block">
                        <textarea id="<?php echo e($name); ?>" name="<?php echo e($name); ?>"
                                  placeholder="请输入内容" class="layui-textarea fly-editor" style="height: 260px;"><?php echo e($value); ?></textarea>
        </div>
    </div>
    <?php $__env->startPush('scripts'); ?>
        <script>
            layui.use(['layedit', 'upload'], function(){
                layedit = layui.layedit;
                layedit.set({
                    uploadImage: {
                        url: "./upimg.json" //接口url
                        ,type: 'post' //默认post
                    }
                });
                //创建一个编辑器
                let index = layedit.build('<?php echo e($name); ?>');
                //layedit.getContent(index)

                setInterval(function (){
                    $('#<?php echo e($name); ?>').val(layedit.getContent(index));
                }, 1000)
            });
        </script>
    <?php $__env->stopPush(); ?>
    <?php break; ?>

    <?php case ('categories'): ?>
    <div class="layui-form-item">
        <label class="layui-form-label"><span class="x-red">*</span><?php echo e($description); ?></label>
        <div class="layui-input-inline" >
            <select required="" name="<?php echo e($name); ?>">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($value == $category->id): ?>
                        <option selected="selected" value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <?php break; ?>

    <?php case ('suppliers'): ?>
    <div class="layui-form-item">
        <label class="layui-form-label"><span class="x-red">*</span><?php echo e($description); ?></label>
        <div class="layui-input-inline" >
            <select required="" name="<?php echo e($name); ?>">
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($value == $supplier->id): ?>
                        <option selected="selected" value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <?php break; ?>

    <?php case ('password'): ?>
    <div class="layui-form-item">
        <label for="link" class="layui-form-label">
            <span class="x-red">*</span><?php echo e($description); ?>

        </label>
        <div class="layui-input-inline">
            <input type="password" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" required="" value="<?php echo e($value); ?>" lay-verify="required"
                   autocomplete="off" class="layui-input">
        </div>
    </div>
    <?php break; ?>

    <?php default: ?>
    <div class="layui-form-item">
        <label for="link" class="layui-form-label">
            <span class="x-red">*</span><?php echo e($description); ?>

        </label>
        <div class="layui-input-inline">
            <input type="text" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" required="" value="<?php echo e($value); ?>" lay-verify="required"
                   autocomplete="off" class="layui-input">
        </div>
    </div>
<?php endswitch; ?>
<?php /**PATH D:\student_other_work\web\material_manage\material_manage\resources\views/components/form_item.blade.php ENDPATH**/ ?>