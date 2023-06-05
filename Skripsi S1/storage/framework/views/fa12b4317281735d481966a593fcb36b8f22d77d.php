

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center><?php echo e(__('404 | Page Not Found')); ?></center></div>
                <center>
                <div class="card-body">
                                <h5> Page doesn't Exist </h5>
                                <button onclick=location.href='/' class="btn btn-primary">
                                    <?php echo e(__('Return to Homepage')); ?>

                                </button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 7\Thesis\resources\views/errors/404.blade.php ENDPATH**/ ?>