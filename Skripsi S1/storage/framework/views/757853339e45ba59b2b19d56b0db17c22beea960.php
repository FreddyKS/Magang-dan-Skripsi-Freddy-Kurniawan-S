

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center><?php echo e(__('419 | Expired')); ?></center></div>
                <center>
                <div class="card-body">
                                <h5> Page Expired </h5>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Thesis\resources\views/errors/419.blade.php ENDPATH**/ ?>