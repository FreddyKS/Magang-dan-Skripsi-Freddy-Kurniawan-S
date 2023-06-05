

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Struct and Pointers - Study Case Result
                <button onclick="location.href='/./structandpointers'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Back to Struct and Pointers homepage')); ?>

                </button></center></div>
                <div class="card-body">
                Your score = <?php echo e($_GET['score']); ?> <br>
                    <?php if($_GET['score']==100): ?>
                        Congratulations! You got all of them right<br>
                    <?php else: ?>
                        Keep practicing and you will master the concept<br>
                    <?php endif; ?>
                <!--
                You are typing /StructAndPointersStudyCaseScore at the URL<br> 
                -->
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 7\Thesis\resources\views/StructAndPointersscoreview.blade.php ENDPATH**/ ?>