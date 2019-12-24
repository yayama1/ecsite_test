<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">本会員登録確認</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register.main.registered')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>
                            <div class="col-md-6">
                                <span class=""><?php echo e($user->name); ?></span>
                                <input type="hidden" name="email" value="<?php echo e($user->name); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name_pronunciation" class="col-md-4 col-form-label text-md-right">フリガナ</label>
                            <div class="col-md-6">
                                <span class=""><?php echo e($user->name_pronunciation); ?></span>
                                <input type="hidden" name="name_pronunciation" value="<?php echo e($user->name_pronunciation); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">生年月日</label>
                            <div class="col-md-6">
                                <span class=""><?php echo e($user->birth_year); ?>年</span>
                                <input type="hidden" name="birth_year" value="<?php echo e($user->birth_year); ?>">
                                <span class=""><?php echo e($user->birth_month); ?>月</span>
                                <input type="hidden" name="birth_month" value="<?php echo e($user->birth_month); ?>">
                                <span class=""><?php echo e($user->birth_day); ?>日</span>
                                <input type="hidden" name="birth_day" value="<?php echo e($user->birth_day); ?>">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    本登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>