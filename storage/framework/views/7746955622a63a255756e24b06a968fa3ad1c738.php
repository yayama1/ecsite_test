<?php $__env->startSection('content'); ?>
<!-- この部分を追加 -->
    <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('flash_message')); ?>

        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row justify-content-left">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 mb-2">
                <div class="card">
                    <div class="card-header">
                        <a href="/item/<?php echo e($item->id); ?>"><?php echo e($item->name); ?></a>
                    </div>
                    <div class="card-body">
                        <?php echo e($item->amount); ?>円
                    </div>
                    <!-- 以下の部分を修正 -->
                    <?php if(auth()->guard()->check()): ?>
                        <form method="POST" action="cartitem" class="form-inline m-1">
                            <?php echo e(csrf_field()); ?>

                            <select name="quantity" class="form-control col-md-2 mr-1">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>">
                            <button type="submit" class="btn btn-primary col-md-6">カートに入れる</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row justify-content-center">
            <?php echo e($items->appends(['keyword' => Request::get('keyword')])->links()); ?>

        </div>
    </div>

 
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>