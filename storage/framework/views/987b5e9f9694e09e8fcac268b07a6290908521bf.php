<?php $__env->startSection('content'); ?>
<!-- フラッシュメッセージを表示するために以下を追加 -->
    <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('flash_message')); ?>

        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <?php $__currentLoopData = $cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card-header">
                            <a href="/item/<?php echo e($cartitem->id); ?>"><?php echo e($cartitem->name); ?></a>
                        </div>
                        <div class="card-body">
                            <div>
                                <?php echo e($cartitem->amount); ?>円
                            </div>
                            <div class="form-inline">
                                     <!-- 数量を更新するフォームに変更 -->
                                <form method="POST" action="/cartitem/<?php echo e($cartitem->id); ?>">
                                    <input type="hidden" name="_method" value="PUT">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="text" class="form-control" name="quantity" value="<?php echo e($cartitem->quantity); ?>">
                                    個
                                    <button type="submit" class="btn btn-primary">更新</button>
                                </form>
                                <!-- 削除フォームを追加 -->
                                <form method="POST" action="/cartitem/<?php echo e($cartitem->id); ?>">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="submit" class="btn btn-primary ml-1">カートから削除する</button>
                                </form>
                                
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        小計
                    </div>
                    <div class="card-body">
                        <div>
                            <?php echo e($subtotal); ?>円
                        </div>
                        <div>
                            <a class="btn btn-primary" href="/buy" role="button">
                                レジに進む
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>