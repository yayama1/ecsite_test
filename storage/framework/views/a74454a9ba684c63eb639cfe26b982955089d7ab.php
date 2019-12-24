<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">本会員登録完了</div>

                    <div class="card-body">
                        <p>本会員登録が完了しました。</p>
                        <a href="<?php echo e(url('/')); ?>" class="sg-btn">トップページへ戻る</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>