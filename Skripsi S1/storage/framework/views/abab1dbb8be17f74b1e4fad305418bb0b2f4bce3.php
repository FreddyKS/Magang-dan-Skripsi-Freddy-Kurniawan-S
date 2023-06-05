

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Stack - Study Case
                <button onclick="location.href='/./stack'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Back to Stack homepage')); ?>

                </button>
                </center></div>
                <div class="card-body">
                Stack

1. You just receive a package from your friends, you want to open it later.
   How do you make You put the package on the floor in your room?
   (there is 2 pointer : top, and YourPackage)

Answer for no.1 :
  top=YourPackage;
  top->next=NULL;

2. You receive another package from your friends, you also want to open it later.
   You want to put it on the top of the other package
   How do you make You put the package on the top of that other package?
   (there is 2 pointer : top, and YourPackage)

Answer for no.2 :
  YourPackage->next=top;
  top=YourPackage;

3. Fine, lets open the package. But for now, just take 1 package to be opened.
   As a C programmer, take 1 package from that stack.
   (there is 2 pointer : top, and YourPackage)

Answer for no.3 :
  YourPackage=top;
  top=top->next;
  free(YourPackage);

4. You just bought a trouser. You want to store it in the cupboard
   How do you make You put the trouser in the cupboard?
   (cupboard is empty, there is 2 pointer : top, and YourOutfit)

Answer for no.4 :
  top=YourOutfit;
  top->next=NULL;


5. You bought a pajamas, you want to store it in the cupboard.
   Remember you just put a trouser there.
   How do you make You put the pajamas on the top of the trouser?
   (there is 2 pointer : top, and YourOutfit)

Answer for no.5 :
  YourOutfit->next=top;
  top=YourOutfit;


6. Now, it is time to go to sleep. You want to use the pajamas you just bought
   As a C programmer, take that pajamas from the cupboard.
   (there is 2 pointer : top, and YourOutfit)


Answer for no.6 :
  YourOutfit=top;
  top=top->next;
  free(YourOutfit);

                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Semester 7\Thesis\resources\views/stack_studycase.blade.php ENDPATH**/ ?>