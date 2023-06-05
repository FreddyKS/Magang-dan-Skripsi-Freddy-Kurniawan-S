

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Stack - Video Tutorial
                <button onclick="location.href='/./stack'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Back to Stack homepage')); ?>

                </button></center></div>
                <iframe width="620" height="515" src="https://www.youtube.com/embed/f7fqKKUJ1jA" frameborder="0" allowfullscreen></iframe><br>
                <iframe width="620" height="515" src="https://www.youtube.com/embed/cuMUGUogVgc" frameborder="0" allowfullscreen></iframe>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Thesis\resources\views/stack_videotutorial.blade.php ENDPATH**/ ?>