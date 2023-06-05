

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Queue - Simulation
                <button onclick="location.href='/./queue'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Back to Queue homepage')); ?>

                </button></center></div>

                <div class="card-body">
                    <div>
                    <table>
                    <tr>
                    <td>
                    <form method="post" action="/insertqueue" enctype="multipart/form-data" class="row justify-content-center">
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
unset($__errorArgs, $__bag); ?>" type="text" name="data" placeholder="Insert data into Queue" autofocus>
                                <button type="submit" class="btn btn-primary btn-block">
                                    <?php echo e(__('Enqueue')); ?>

                                </button>
                                </center>
                            </div>
                        </div>
                        </form>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <form method="post" action="/deletequeue" enctype="multipart/form-data" class="row justify-content-center">
                            <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <center>
                            <?php if(isset($front)): ?>
                                <input id="data" class="col-md-15 form-control <?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="data" value="<?php echo e($front->data); ?>" autofocus disabled>
                            <?php else: ?>
                            <input id="data" class="col-md-15 form-control <?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="data" value="" autofocus disabled>
                            <?php endif; ?>
                            <div class="col-md-1"></div>
                                <?php if(isset($front)): ?>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Serve <img src="/../storage/Images/Queue_person.png" style="width:25px;height:25px"> <?php echo e($front->data); ?> (Dequeue)
                                </button>
                                <?php else: ?>
                                <button type="submit" class="btn btn-primary btn-block" disabled>
                                    The queue is Empty
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
    <center>
    <table>
		<tr>
        </tr>
        <tr>
			<td>
            <img src="/../storage/Images/Queue_receptionist.png" style="width:50px;height:50px">
            <b> Receptionist </b><br>
            <?php $count = 0; ?>
        <?php $__currentLoopData = $data_structures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="/../storage/Images/Queue_person.png" style="width:50px;height:50px">
            <?php echo e($f->data); ?>

            <?php if($f->id==$front->id): ?>
               <i> (FRONT) </i>
            <?php endif; ?>
            <?php if($f->id==$rear->id): ?>
               <i> (REAR) </i>
            <?php endif; ?>
            <?php ++$count; ?>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($count==0): ?>
            <i> -- FRONT == NULL | REAR == NULL -- (NULL) </i>
        <?php else: ?>
            <i> -- this is the end of the queue -- (NULL)</i>
        <?php endif; ?>
            </td>
            <td>
            <?php if($count==1): ?>
                front=rear=curr<br>
                rear->next = NULL;
            <?php elseif($count>1): ?>
                rear->next=current;<br>	
                rear=current;<br>
                rear->next = NULL;
            <?php else: ?>
                <i> FRONT = NULL | REAR = NULL <br></i>
            <?php endif; ?>
                   </td> 
        </tr>
        <tr>
        </tr>
    </table>
    </center>
                    <?php endif; ?>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Semester 7\Thesis\resources\views/queue.blade.php ENDPATH**/ ?>