

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Stack - Simulation
                <button onclick="location.href='/./stack'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Back to Stack homepage')); ?>

                </button>
                <?php $alert = $_GET['alert'] ?? $alert = ''; ?>
                <b> <!-- <?php echo e($_GET['alert'] ?? ''); ?>--> <?php echo e($alert); ?> </b>
                 </center></div>

                <div class="card-body">
                    <div>
                    <table>
                    <tr>
                    <td>
                    <form method="post" action="/insertstack" enctype="multipart/form-data" class="row justify-content-center">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                                <center>
                                <input id="data" class="col-md-15 form-control <?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="data" placeholder="Insert data into Stack" autofocus Required="True" >
                                <!-- <?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                                <button type="submit" class="btn btn-primary btn-block">
                                    <?php echo e(__('Push')); ?>

                                </button>
                                </center>
                            </div>
                        </div>
                        </form>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <form method="post" action="/deletestack" enctype="multipart/form-data" class="row justify-content-center">
                            <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <center>
                            <?php if(isset($top)): ?>
                                <input id="data2" class="col-md-15 form-control <?php $__errorArgs = ['data2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="data" value="<?php echo e($top->data); ?>" autofocus disabled>
                            <?php else: ?>
                                <input id="data2" class="col-md-15 form-control <?php $__errorArgs = ['data2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="data" value="" autofocus disabled>
                            <?php endif; ?><div class="col-md-1"></div>
                                <?php if(isset($top)): ?>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Pick <img src="/../storage/Images/Stack_Box.png" style="width:25px;height:25px"><?php echo e($top->data); ?> (Pop)
                                </button>
                                <?php else: ?>
                                <button type="submit" class="btn btn-primary btn-block" disabled>
                                    The stack is empty
                                </button>
                                <?php endif; ?>
                            </center>
                        </div>
                    </form>
                    </div>
                    </td>
                    </tr>
                    </table>
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
            <?php if($alert=="Push Success"): ?>
            <b> Push syntax : </b> <br>
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
            <?php elseif($alert=="Pop Success"): ?>
            <b> Pop Syntax : </b> <br>
            <?php if($count>0): ?>
                top=top->next;<br>
		        free(current);
            <?php else: ?>
                <i> TOP = NULL </i><br>
            <?php endif; ?>
            <?php else: ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Thesis\resources\views/stack.blade.php ENDPATH**/ ?>