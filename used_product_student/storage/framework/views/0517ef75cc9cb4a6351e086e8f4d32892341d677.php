<form class="layui-form x-center" action="" method="GET">
    <div class="layui-form-pane" style="margin-top: 15px;">
        <div class="layui-form-item">
            <?php $__currentLoopData = $search_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php switch($field['type']):
                case ('date'): ?>
                <label class="layui-form-label"><?php echo e($field['description']); ?></label>
                <div class="layui-input-inline">
                    <input class="layui-input" placeholder="开始日" value="<?php echo e($field["value"][0]); ?>" name="<?php echo e($field['name']); ?>_s" id="<?php echo e($field['name']); ?>_s">
                </div>
                <div class="layui-input-inline">
                    <input class="layui-input" placeholder="截止日" value="<?php echo e($field["value"][1]); ?>" name="<?php echo e($field['name']); ?>_e" id="<?php echo e($field['name']); ?>_e">
                </div>
                <?php $__env->startPush('scripts'); ?>
                    <script>
                        layui.use(['laydate'], function(){
                            $ = layui.jquery;//jquery
                            laydate = layui.laydate;//日期插件

                            var start = {
                                max: '2099-06-16 23:59:59'
                                ,istoday: false
                                ,choose: function(datas){
                                    end.min = datas; //开始日选好后，重置结束日的最小日期
                                    end.start = datas //将结束日的初始值设定为开始日
                                }
                            };

                            var end = {
                                 max: '2099-06-16 23:59:59'
                                ,istoday: false
                                ,choose: function(datas){
                                    start.max = datas; //结束日选好后，重置开始日的最大日期
                                }
                            };

                            document.getElementById('<?php echo e($field["name"]); ?>_s').onclick = function(){
                                start.elem = this;
                                laydate(start);
                            }
                            document.getElementById('<?php echo e($field["name"]); ?>_e').onclick = function(){
                                end.elem = this
                                laydate(end);
                            }
                        });
                    </script>
                <?php $__env->stopPush(); ?>
                <?php break; ?>
                <?php default: ?>
                <div class="layui-input-inline">
                    <input type="text" name="<?php echo e($field["name"]); ?>" value="<?php echo e($field["value"]); ?>" placeholder="<?php echo e($field['description']); ?>" autocomplete="off" class="layui-input">
                </div>
            <?php endswitch; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="layui-input-inline" style="width:80px">
                <button class="layui-btn" type="submit"><i class="layui-icon">&#xe615;</i></button>
            </div>
        </div>
    </div>
</form>
<?php /**PATH D:\student_other_work\used_book_project\used_book_admin\resources\views/components/search_bar.blade.php ENDPATH**/ ?>