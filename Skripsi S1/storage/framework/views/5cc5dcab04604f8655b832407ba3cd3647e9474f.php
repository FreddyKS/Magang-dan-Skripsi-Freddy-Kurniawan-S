

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Struct and Pointers - Study Case
                <button onclick="location.href='/./stack'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Back to Struct and Pointers homepage')); ?>

                </button></center></div>
                <div class="card-body">
                <form method="post" action="/submitStructAndPointersAnswer" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
1. How do we define the 'grappling hook' (pointer) next in this struct<br>
   <img src="/../storage/Images/structandpointersstudycase1.jpg" style="width:300px;height:200px"><br>
   <input type="radio" id="A" name="studycase1" value="A">
    <label for="A">A. <br> int* next; in //1</label><br>
    <input type="radio" id="B" name="studycase1" value="B">
    <label for="B">B. <br> struct Data *next; in //1</label><br>
    <input type="radio" id="C" name="studycase1" value="C">
    <label for="C">C. <br> struct Data *next; in //2</label><br>
    <input type="radio" id="D" name="studycase1" value="D">
    <label for="D">D. <br> int next; in //1</label>
<br>

2. How do we make the 'sticky notes' to mark a data with text 'front' in this struct<br>
<img src="/../storage/Images/structandpointersstudycase2.jpg" style="width:300px;height:200px"><br>
    <input type="radio" id="A" name="studycase2" value="A">
    <label for="A">A. <br>*front in //2</label><br>
    <input type="radio" id="B" name="studycase2" value="B">
    <label for="B">B. <br>*front; in //1</label><br>
    <input type="radio" id="C" name="studycase2" value="C">
    <label for="C">C. <br>struct Data *front; in //1</label><br>
    <input type="radio" id="D" name="studycase2" value="D">
    <label for="D">D. <br>struct Data *front; in //2</label><br>
   
   

<button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit Answer')); ?>

                                </button>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 7\Thesis\resources\views/struct_and_pointers_studycase.blade.php ENDPATH**/ ?>