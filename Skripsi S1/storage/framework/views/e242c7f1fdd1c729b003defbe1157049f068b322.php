

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Stack</center></div>
                <div class="card-body">
                    <div class="links">
                    <button onclick="location.href='/stack/simulation'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Simulation')); ?>

                    </button>
                    <button onclick="location.href='/stack/videotutorial'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Video Tutorial')); ?>

                    </button>
                    <button onclick="location.href='/stack/studycase'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Study Case')); ?>

                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Thesis\resources\views/stack_homepage.blade.php ENDPATH**/ ?>