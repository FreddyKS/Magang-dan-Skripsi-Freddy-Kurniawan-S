

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Struct and Pointers</center></div>
                <div class="card-body">
                    <div class="links">
                    <button onclick="location.href='/structandpointers/videotutorial'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Video Tutorial')); ?>

                    </button>
                    <button onclick="location.href='/structandpointers/studycase'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Study Case')); ?>

                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 7\Thesis\resources\views/struct_and_pointers_homepage.blade.php ENDPATH**/ ?>