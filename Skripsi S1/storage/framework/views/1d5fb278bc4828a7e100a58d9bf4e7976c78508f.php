

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Show <?php echo e(Auth::user()->name); ?>'s Score</center></div>
                <div class="card-body">  
    <table>
		<tr>
        <th class="th_Score"> Stack </th>
        </tr>
        <?php $__currentLoopData = $stack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td class="td_Score">
            <?php echo e($s->timestamp); ?>

	        </td>
            </tr>
            <tr>
            <td class="td_Score">
            <?php echo e($s->score); ?>

	        </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table><br>
    <table>
		<tr>
        <th class="th_Score"> Queue </th>
        </tr>
        <?php $__currentLoopData = $queue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td class="td_Score">
            <?php echo e($q->timestamp); ?>

	        </td>
            </tr>
            <tr>
            <td class="td_Score">
            <?php echo e($q->score); ?>

	        </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table><br>
    <table>
		<tr>
        <th class="th_Score"> Struct and Pointers </th>
        </tr>
        <?php $__currentLoopData = $struct_and_pointers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td class="td_Score">
            <?php echo e($sp->timestamp); ?>

	        </td>
            </tr>
            <tr>
            <td class="td_Score">
            <?php echo e($sp->score); ?>

            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Thesis\resources\views/Show_Score.blade.php ENDPATH**/ ?>