<?php if($paginator->hasPages()): ?>
    <div class="layui-box layui-laypage layui-laypage-default" id="layui-laypage-0">
        <?php if($paginator->onFirstPage()): ?>
        <?php else: ?>
            <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="layui-laypage-prev" data-page="1">
                <em>&lt;</em></a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <span class="layui-laypage-curr">
                        <em class="layui-laypage-em"></em>
                        <em><?php echo e($element); ?></em>
                    </span>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <span class="layui-laypage-curr">
                                <em class="layui-laypage-em"></em>
                                <em><?php echo e($page); ?></em>
                            </span>
                    <?php else: ?>
                        <a  href="<?php echo e($url); ?>" data-page="<?php echo e($page); ?>"><?php echo e($page); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
                <a  href="<?php echo e($paginator->nextPageUrl()); ?>" class="layui-laypage-next" data-page="<?php echo app('translator')->get('pagination.next'); ?>">
                    <em>&gt;</em>
                </a>
        <?php else: ?>
                <span disabled aria-label="<?php echo app('translator')->get('pagination.next'); ?>" >&gt;</span>
        <?php endif; ?>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
<?php endif; ?>
<?php /**PATH D:\used_product_students\used_product_student\resources\views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>