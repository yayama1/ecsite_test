<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom:10px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        お届け先入力
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/buy">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">氏名</label>
                                    <?php if(Request::has('confirm')): ?>
                                        <p class="form-control-static"><?php echo e(old('name')); ?></p>
                                        <input id="name" type="hidden" name="name" value="<?php echo e(old('name')); ?>">
                                    <?php else: ?>
                                        <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="postalcode">郵便番号</label>
                                    <?php if(Request::has('confirm')): ?>
                                        <p class="form-control-static"><?php echo e(old('postalcode')); ?></p>
                                        <input id="postalcode" type="hidden" name="postalcode" value="<?php echo e(old('postalcode')); ?>">
                                    <?php else: ?>
                                        <input id="postalcode" type="text" class="form-control" name="postalcode" value="<?php echo e(old('postalcode')); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="region">都道府県</label>
                                    <?php if(Request::has('confirm')): ?>
                                        <p class="form-control-static"><?php echo e(old('region')); ?></p>
                                        <input id="region" type="hidden" name="region" value="<?php echo e(old('region')); ?>">
                                    <?php else: ?>
                                        <select id="region" class="form-control" name="region">
                                            <?php $__currentLoopData = Config::get('region'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if(old('region') == $value): ?> selected <?php endif; ?>><?php echo e($value); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-1">
                                <div class="form-group col-md-6">
                                    <label for="addressline1">住所1</label>
                                    <?php if(Request::has('confirm')): ?>
                                        <p class="form-control-static"><?php echo e(old('addressline1')); ?></p>
                                        <input id="addressline1" type="hidden" name="addressline1" value="<?php echo e(old('addressline1')); ?>">
                                    <?php else: ?>
                                        <input id="addressline1" type="text" class="form-control" name="addressline1" value="<?php echo e(old('addressline1')); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-1">
                                <div class="form-group col-md-6">
                                    <label for="addressline2">住所2</label>
                                    <?php if(Request::has('confirm')): ?>
                                        <p class="form-control-static"><?php echo e(old('addressline2')); ?></p>
                                        <input id="addressline2" type="hidden" name="addressline2" value="<?php echo e(old('addressline2')); ?>">
                                    <?php else: ?>
                                        <input id="addressline2" type="text" class="form-control" name="addressline2" value="<?php echo e(old('addressline2')); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row mb-1">
                                <div class="form-group col-md-6">
                                    <label for="phonenumber">電話番号</label>
                                    <?php if(Request::has('confirm')): ?>
                                        <p class="form-control-static"><?php echo e(old('phonenumber')); ?></p>
                                        <input id="phonenumber" type="hidden" name="phonenumber" value="<?php echo e(old('phonenumber')); ?>">
                                    <?php else: ?>
                                        <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="<?php echo e(old('phonenumber')); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <?php if(Request::has('confirm')): ?>
                                        <button type="submit" class="btn btn-primary" name="post">注文を確定する</button>
                                        <button type="submit" class="btn btn-default" name="back">修正する</button>
                                    <?php else: ?>
                                        <button type="submit" class="btn btn-primary" name="confirm">入力内容を確認する</button>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <?php $__currentLoopData = $cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card-header">
                            <?php echo e($cartitem->name); ?>

                        </div>
                        <div class="card-body">
                            <div>
                                <?php echo e($cartitem->amount); ?>円
                            </div>
                            <div>
                                <?php echo e($cartitem->quantity); ?>個
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>