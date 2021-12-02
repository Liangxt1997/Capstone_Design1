<?php $__env->startSection('user_content'); ?>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>

                </ul>
            </div>
        </div>
    </div>


    <div class="cart-area ptb-54">
        <div class="container">
            <form class="cart-controller mb-0">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <?php echo trans('index.table'); ?>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="<?php echo e(route('detail', ['id' => $item['product_id']])); ?>">
                                    <img src="<?php echo e($item['product']['pic']); ?>" alt="Image">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="<?php echo e(route('detail', ['id' => $item['product_id']])); ?>"><?php echo e($item['product']['title']); ?></a>
                            </td>
                            <td class="product-price">
                                <span class="unit-amount">$<?php echo e($item['product']['price']); ?></span>
                            </td>
                            <td class="product-subtotal">
                                <span class="subtotal-amount">$<?php echo e($item['product']['origin_price']); ?></span>
                            </td>

                            <td class="trash">
                                <a href="#" class="removeWant" data-id="<?php echo e($item['id']); ?>">
                                    <i class="ri-close-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </form>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\used_product_students\used_product_student\resources\views/home/collections.blade.php ENDPATH**/ ?>