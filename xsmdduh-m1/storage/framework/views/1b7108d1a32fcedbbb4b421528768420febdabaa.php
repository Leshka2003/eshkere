

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $tovars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <?php echo e($o->name); ?> <br>
    <img src="<?php echo e($o->surname); ?>" alt="">     <br>
        <?php echo e($o->patranomic); ?>

    </div>
    <?php if(auth()->guard()->check()): ?>
    <button>купить</button>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/ysdzinhp/xsmdduh-m1/resources/views/catalog.blade.php ENDPATH**/ ?>