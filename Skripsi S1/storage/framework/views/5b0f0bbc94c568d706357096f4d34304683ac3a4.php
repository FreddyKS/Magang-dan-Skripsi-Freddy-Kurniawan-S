

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Stack</center></div>

                <div class="card-body">
                    <div>
                    <form method="post" action="/insertstack" enctype="multipart/form-data" class="row justify-content-center">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                                <input id="data" class="col-md-7 form-control <?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="data" placeholder="Insert data into Stack" autofocus>
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Insert Data (Push)')); ?>

                                </button>
                            </div>
                        </div>
                        </form>
                        <form method="post" action="/deletestack" enctype="multipart/form-data" class="row justify-content-center">
                            <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <?php if(isset($top)): ?>
                                <input id="data" class="col-md-5 form-control <?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="data" value="<?php echo e($top->data); ?>" autofocus disabled>
                            <?php else: ?>
                                <input id="data" class="col-md-5 form-control <?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="data" value="" autofocus disabled>
                            <?php endif; ?><div class="col-md-1"></div>
                                <?php if(isset($top)): ?>
                                <button type="submit" class="btn btn-primary">
                                    Pick <img src="/../storage/Images/Stack_Box.png" style="width:25px;height:25px"><?php echo e($top->data); ?> (Pop)
                                </button>
                                <?php else: ?>
                                <button type="submit" class="btn btn-primary" disabled>
                                    The stack is empty
                                </button>
                                <?php endif; ?>
                        </div>
                    </form>
                    </div>
                    <form method="get" action="stack/search" enctype="multipart/form-data" class="row justify-content-center">
                        <input type="text" name="search" class="col-md-4 form-control <?php $__errorArgs = ['search'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Search in this Stack">
                        <div class="col-md-1"></div>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Search Stack')); ?></button><br>
                        <h3></h3>
                    </form>
                    <br><br>
<?php if(isset($data_structures)): ?>        
    <table>
		<tr>
        <th></th>
        </tr>
        <tr>
            <td>
            <?php $count=0; ?>
        <?php $__currentLoopData = $data_structures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="/../storage/Images/Stack_Box.png" style="width:50px;height:50px">
            <?php echo e($f->data); ?>

            <?php if($f->id==$top->id): ?>
               <i> (TOP) </i>
            <?php endif; ?>
            <br>
            <?php ++$count; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($count==0): ?>
        <i> -- TOP == NULL -- (NULL) </i>
        <?php else: ?>
        <i> -- this is floor -- (NULL)</i>
        <?php endif; ?> 
            </td>
            <td>
            <?php if($count==1): ?>
                top=current;<br>
                top->next = NULL;
            <?php elseif($count>1): ?>
                current->next=top;<br>
		        top=current;<br>
                top->next = NULL;
            <?php else: ?>
                <i> TOP = NULL </i><br>
            <?php endif; ?>
                </td>
        </tr>
    </table>
                <?php endif; ?>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FKS\Desktop\Semester 7\Thesis\Thesis Application\Thesis\resources\views/stack.blade.php ENDPATH**/ ?>