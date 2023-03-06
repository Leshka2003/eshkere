

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            
            <a href="<?php echo e(url('/catalog/sort')); ?>/year/desc/" class="btn btn-light btn-lg active" role="button"
                aria-pressed="true">По году</a>
            <a href="<?php echo e(url('/catalog/sort')); ?>/name/asc/" class="btn btn-primary btn-lg active" role="button"
                aria-pressed="true">По наименованию</a>
            <a href="<?php echo e(url('/catalog/sort')); ?>/price/desc/" class="btn btn-danger btn-lg active" role="button"
                aria-pressed="true">По цене</a>

            
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Фильтры
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $koshka): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a class="dropdown-item" href="<?php echo e(url('/catalog/filter')); ?>/<?php echo e($koshka->id); ?>"><?php echo e($koshka->name); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li><a class="dropdown-item" href="<?php echo e(url('/catalog')); ?>">сборосить фильтр</a></li>
                </ul>
            </div>
            
            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 pb-5">
                    <div class="card h-100" style="width: 18rem;">
                        <img class="card-img-top h-100" src="<?php echo e($o->img); ?>" alt="cardimg">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($o->name); ?> </h5>
                            <p class="card-text">Цена: <?php echo e($o->price); ?>руб</p>
                            <?php if(auth()->guard()->check()): ?><a href="#" class="btn btn-primary">Купить</a><?php endif; ?>
                        </div>
                        <a href="<?php echo e(url('catalog/tovars' )); ?>/<?php echo e($o->id); ?>" class="stretched-link"></a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/ysdzinhp/xsmdduh-m1/resources/views/catalog.blade.php ENDPATH**/ ?>