<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">本会員登録</div>

                    <?php if(isset($message)): ?>
                        <div class="card-body">
                            <?php echo e($message); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(empty($message)): ?>
                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('register.main.check')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>
                                    <div class="col-md-6">
                                        <input
                                            id="name" type="text"
                                            class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                            name="name" value="<?php echo e(old('name')); ?>" required>

                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name_pronunciation"
                                           class="col-md-4 col-form-label text-md-right">フリガナ</label>

                                    <div class="col-md-6">
                                        <input id="name_pronunciation" type="text"
                                               class="form-control<?php echo e($errors->has('name_pronunciation') ? ' is-invalid' : ''); ?>"
                                               name="name_pronunciation" value="<?php echo e(old('name_pronunciation')); ?>"
                                               required>

                                        <?php if($errors->has('name_pronunciation')): ?>
                                            <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('name_pronunciation')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name_pronunciation"
                                           class="col-md-4 col-form-label text-md-right">生年月日</label>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select id="birth_year" class="form-control" name="birth_year">
                                                    <option value="">----</option>
                                                    <?php for($i = 1980; $i <= 2005; $i++): ?>
                                                        <option value="<?php echo e($i); ?>"
                                                                <?php if(old('birth_year') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                                <?php if($errors->has('birth_year')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('birth_year')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>年

                                            <div class="col-md-3">
                                                <select id="birth_month" class="form-control" name="birth_month">
                                                    <option value="">--</option>
                                                    <?php for($i = 1; $i <= 12; $i++): ?>
                                                        <option value="<?php echo e($i); ?>"
                                                            <?php if(old('birth_month') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                                <?php if($errors->has('birth_month')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('birth_month')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>月

                                            <div class="col-md-3">
                                                <select id="birth_day" class="form-control" name="birth_day">
                                                    <option value="">--</option>
                                                    <?php for($i = 1; $i <= 31; $i++): ?>
                                                        <option value="<?php echo e($i); ?>"
                                                            <?php if(old('birth_day') == $i): ?> selected <?php endif; ?>><?php echo e($i); ?></option>
                                                    <?php endfor; ?>
                                                </select>

                                                <?php if($errors->has('birth_day')): ?>
                                                    <span class="help-block">
                                                        <strong><?php echo e($errors->first('birth_day')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>日
                                        </div>

                                        <div class="row col-md-6 col-md-offset-4">
                                            <?php if($errors->has('birth')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('birth')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    確認画面へ
                                </button>
                            </div>
                        </div>
                        </form>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>