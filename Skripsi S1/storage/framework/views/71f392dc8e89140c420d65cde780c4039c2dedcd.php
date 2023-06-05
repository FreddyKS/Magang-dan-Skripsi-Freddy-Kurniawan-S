

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Queue - Study Case
                <button onclick="location.href='/./queue'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Back to Queue homepage')); ?>

                </button></center></div>
                <div class="card-body">
                1. You want to purchase a fried chicken. <br>
Luckily for you, there is nobody queueing in the counter. <br>
As a C programmer, can you enqueue yourself to the counter from below's syntax? <br>
(there is 3 pointer : front, rear, and You)<br>
<img src="/../storage/Images/queuestudycase13.jpg" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase1" value="A">A.<br>
    <label for="A">   front=rear=You;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase1" value="B">B.<br>
    <label for="B">   front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase1" value="C">C. <br>
    <label for="C">   int front;<br>
                      front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase1" value="D">D. <br>
    <label for="D">   front=rear=You;</label><br>
    <input type="radio" id="E" name="studycase1" value="E">E. <br>
    <label for="E">   rear->next=NULL;</label><br>
Answer for no.1 : B

<br>2. It is 7 P.M. , you are hungry and wanted to buy some martabak,<br>
Below is the situation in the martabak store.<br>
Can you enqueue yourself in C language way?<br>
(Illustration of counter with 3 people enqueueing, 
tell the user that there is 3 pointer : front, rear, and You)<br>
<img src="/../storage/Images/queuestudycase2.jpg" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear <br>
<input type="radio" id="A" name="studycase2" value="A">A.<br>
    <label for="A">   rear=You;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase2" value="B">B.<br>
    <label for="B">   rear=You;<br>
                      int rear->next;
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase2" value="C">C. <br>
    <label for="C">   int rear;<br>
                      rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase2" value="D">D. <br>
    <label for="D">   rear->next=NULL;</label><br>
    <input type="radio" id="E" name="studycase2" value="E">E. <br>
    <label for="E">   rear=You;</label><br>
Answer for no.2 : A
 
<br>3. Now this is your turn to be served in fried chicken store, <br>
Here is the condition. Can you make the counter serve you? <br>
(Illustration of counter with 3 people with You in front of the counter, <br> 
tell the user that there is 3 pointer : front, rear, and You) <br>
<img src="/../storage/Images/queuestudycase13.jpg" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- You / front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear <br>
<input type="radio" id="A" name="studycase3" value="A">A. <br>
    <label for="A">   front=rear=You;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase3" value="B">B. <br>
    <label for="B">   front=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase3" value="C">C. <br>
    <label for="C">   int front;<br>
                      front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase3" value="D">D. <br>
    <label for="D">   front=You;<br>
                      front=front->next;<br>
                      free(You);
    </label><br>
    <input type="radio" id="E" name="studycase3" value="E">E. <br>
    <label for="E">   front->next=NULL;</label><br>
Answer for no.3 : D

<br>4. You want to purchase a pizza at 3 A.M. . You pick the queue number <br>
Luckily for you, you got number 1. <br>
As a C programmer, can you enqueue yourself? <br>
(there is 3 pointer : front, rear, and YourQueueNumber)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase4" value="A">A.<br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase4" value="B">B.<br>
    <label for="B">   front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase4" value="C">C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase4" value="D">D. <br>
    <label for="D">   front=rear=YourQueueNumber;</label><br>
    <input type="radio" id="E" name="studycase4" value="E">E. <br>
    <label for="E">   rear->next=NULL;</label><br>
Answer for no.4 : B

<br>5. It is 6 P.M. , you are hungry and wants some pizza for dinner . <br>
Again you pick the queue number and you got number 3<br>
Below is the situation in the pizza store.<br>
Can you enqueue yourself in C language way?<br>
(there is 3 pointer : front, rear, and You)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> 
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase5" value="A">A. <br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase5" value="B">B. <br>
    <label for="B">   rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase5" value="C">C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase5" value="D">D. <br>
    <label for="D">   front=YourQueueNumber;<br>
                      front=front->next;<br>
                      free(You);
    </label><br>
    <input type="radio" id="E" name="studycase5" value="E">E. <br>
    <label for="E">   front->next=NULL;</label><br>
Answer for no.5 : B

<br>6. Now this is your turn to order your pizza at the counter, <br>
Here is the condition. Can you make the counter serve you?<br>
(Illustration of pizza counter with You in front of the counter, 
tell the user that there is 3 pointer : front, rear, and YourQueueNumber)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- You
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <br>
<input type="radio" id="A" name="studycase6" value="A">A. <br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase6" value="B">B. <br>
    <label for="B">   front=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase6" value="C">C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase6" value="D">D. <br>
    <label for="D">   front=YourQueueNumber;<br>
                      front=front->next;<br>
                      free(YourQueueNumber);
    </label><br>
    <input type="radio" id="E" name="studycase6" value="E">E. <br>
    <label for="E">   front->next=NULL;</label><br>

Answer for no.6 : D
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Semester 7\Thesis\resources\views/queue_studycase.blade.php ENDPATH**/ ?>