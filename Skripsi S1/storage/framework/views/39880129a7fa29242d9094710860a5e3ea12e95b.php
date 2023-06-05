

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Queue - Study Case Result
                <button onclick="location.href='/queue'" class="btn btn-primary btn-block">
                                    <?php echo e(__('Back to Queue homepage')); ?>

                </button></center></div>
                <div class="card-body">
<?php if($_GET['studycase1'] == "B"): ?> ✓ <?php else: ?> ✕ <?php endif; ?> 1. You want to purchase a fried chicken. <br>
Luckily for you, there is nobody queueing in the counter. <br>
As a C programmer, can you enqueue yourself to the counter from below's syntax? <br>
(there is 3 pointer : front, rear, and You)<br>
<img src="/../storage/Images/queuestudycase13.jpg" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase1" value="A" <?php if($_GET['studycase1'] == "A"): ?> checked=true <?php endif; ?> disabled>A.<br>
    <label for="A" >   front=rear=You;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" <?php if($_GET['studycase1'] != "B"): ?> name="studycase7" <?php else: ?> name="studycase1" <?php endif; ?> value="B" <?php if($_GET['studycase1'] == "B"): ?> checked=true <?php endif; ?> disabled>B.<br>
    <label for="B" <?php if($_GET['studycase1'] != "B"): ?> style="color:green;">  ✓ <?php else: ?> > <?php endif; ?>   front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase1" value="C" <?php if($_GET['studycase1'] == "C"): ?> checked=true <?php endif; ?> disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase1" value="D" <?php if($_GET['studycase1'] == "D"): ?> checked=true <?php endif; ?> disabled>D. <br>
    <label for="D">   front=rear=You;</label><br>
    <input type="radio" id="E" name="studycase1" value="E" <?php if($_GET['studycase1'] == "E"): ?> checked=true <?php endif; ?> disabled>E. <br>
    <label for="E">   rear->next=NULL;</label><br>


<br><?php if($_GET['studycase2'] == "A"): ?> ✓ <?php else: ?> ✕ <?php endif; ?> 2. It is 7 P.M. , you are hungry and wanted to buy some martabak,<br>
Below is the situation in the martabak store.<br>
Can you enqueue yourself in C language way?<br>
(Illustration of counter with 3 people enqueueing, 
tell the user that there is 3 pointer : front, rear, and You)<br>
<img src="/../storage/Images/queuestudycase2.jpg" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear <br>
<input type="radio" id="A" <?php if($_GET['studycase2'] != "A"): ?> name="studycase7" <?php else: ?> name="studycase2" <?php endif; ?> value="A" <?php if($_GET['studycase2'] == "A"): ?> checked=true <?php endif; ?> disabled>A.<br>
    <label for="A" <?php if($_GET['studycase2'] != "A"): ?> style="color:green;">  ✓ <?php else: ?> > <?php endif; ?>   rear=You;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase2" value="B" <?php if($_GET['studycase2'] == "B"): ?> checked=true <?php endif; ?> disabled>B.<br>
    <label for="B">   rear=You;<br>
                      int rear->next;
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase2" value="C" <?php if($_GET['studycase2'] == "C"): ?> checked=true <?php endif; ?> disabled>C. <br>
    <label for="C">   int rear;<br>
                      rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase2" value="D" <?php if($_GET['studycase2'] == "D"): ?> checked=true <?php endif; ?> disabled>D. <br>
    <label for="D">   rear->next=NULL;</label><br>
    <input type="radio" id="E" name="studycase2" value="E" <?php if($_GET['studycase2'] == "E"): ?> checked=true <?php endif; ?> disabled>E. <br>
    <label for="E">   rear=You;</label><br>

 
<br><?php if($_GET['studycase3'] == "D"): ?> ✓ <?php else: ?> ✕ <?php endif; ?> 3. Now this is your turn to be served in fried chicken store, <br>
Here is the condition. Can you make the counter serve you? <br>
(Illustration of counter with 3 people with You in front of the counter, <br> 
tell the user that there is 3 pointer : front, rear, and You) <br>
<img src="/../storage/Images/queuestudycase13.jpg" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- You / front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear <br>
<input type="radio" id="A" name="studycase3" value="A" <?php if($_GET['studycase3'] == "A"): ?> checked=true <?php endif; ?> disabled>A. <br>
    <label for="A">   front=rear=You;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase3" value="B" <?php if($_GET['studycase3'] == "B"): ?> checked=true <?php endif; ?> disabled>B. <br>
    <label for="B">   front=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase3" value="C" <?php if($_GET['studycase3'] == "C"): ?> checked=true <?php endif; ?> disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" <?php if($_GET['studycase3'] != "D"): ?> name="studycase7" <?php else: ?> name="studycase3" <?php endif; ?> value="D" <?php if($_GET['studycase3'] == "D"): ?> checked=true <?php endif; ?> disabled>D. <br>
    <label for="D" <?php if($_GET['studycase3'] != "D"): ?> style="color:green;">  ✓ <?php else: ?> > <?php endif; ?>   front=You;<br>
                      front=front->next;<br>
                      free(You);
    </label><br>
    <input type="radio" id="E" name="studycase3" value="E" <?php if($_GET['studycase3'] == "E"): ?> checked=true <?php endif; ?> disabled>E. <br>
    <label for="E">   front->next=NULL;</label><br>


<br> <?php if($_GET['studycase4'] == "B"): ?> ✓ <?php else: ?> ✕ <?php endif; ?> 4. You want to purchase a pizza at 3 A.M. . You pick the queue number <br>
Luckily for you, you got number 1. <br>
As a C programmer, can you enqueue yourself? <br>
(there is 3 pointer : front, rear, and YourQueueNumber)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase4" value="A" <?php if($_GET['studycase4'] == "A"): ?> checked=true <?php endif; ?> disabled>A.<br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" <?php if($_GET['studycase4'] != "B"): ?> name="studycase7" <?php else: ?> name="studycase4" <?php endif; ?> value="B" <?php if($_GET['studycase4'] == "B"): ?> checked=true <?php endif; ?> disabled>B.<br>
    <label for="B" <?php if($_GET['studycase4'] != "B"): ?> style="color:green;">  ✓ <?php else: ?> > <?php endif; ?>   front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase4" value="C" <?php if($_GET['studycase4'] == "C"): ?> checked=true <?php endif; ?> disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase4" value="D" <?php if($_GET['studycase4'] == "D"): ?> checked=true <?php endif; ?> disabled>D. <br>
    <label for="D">   front=rear=YourQueueNumber;</label><br>
    <input type="radio" id="E" name="studycase4" value="E" <?php if($_GET['studycase4'] == "E"): ?> checked=true <?php endif; ?> disabled>E. <br>
    <label for="E">   rear->next=NULL;</label><br>


<br><?php if($_GET['studycase5'] == "B"): ?> ✓ <?php else: ?> ✕ <?php endif; ?> 5. It is 6 P.M. , you are hungry and wants some pizza for dinner . <br>
Again you pick the queue number and you got number 3<br>
Below is the situation in the pizza store.<br>
Can you enqueue yourself in C language way?<br>
(there is 3 pointer : front, rear, and YourQueueNumber)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear<br>
<input type="radio" id="A" name="studycase5" value="A" <?php if($_GET['studycase5'] == "A"): ?> checked=true <?php endif; ?> disabled>A. <br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" <?php if($_GET['studycase5'] != "B"): ?> name="studycase7" <?php else: ?> name="studycase5" <?php endif; ?> value="B" <?php if($_GET['studycase5'] == "B"): ?> checked=true <?php endif; ?> disabled>B. <br>
    <label for="B" <?php if($_GET['studycase5'] != "B"): ?> style="color:green;">  ✓ <?php else: ?> > <?php endif; ?>   rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase5" value="C" <?php if($_GET['studycase5'] == "C"): ?> checked=true <?php endif; ?> disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase5" value="D" <?php if($_GET['studycase5'] == "D"): ?> checked=true <?php endif; ?> disabled>D. <br>
    <label for="D">   front=YourQueueNumber;<br>
                      front=front->next;<br>
                      free(You);
    </label><br>
    <input type="radio" id="E" name="studycase5" value="E" <?php if($_GET['studycase5'] == "E"): ?> checked=true <?php endif; ?> disabled>E. <br>
    <label for="E">   front->next=NULL;</label><br>


<br><?php if($_GET['studycase6'] == "D"): ?> ✓ <?php else: ?> ✕ <?php endif; ?> 6. Now this is your turn to order your pizza at the counter, <br>
Here is the condition. Can you make the counter serve you?<br>
(Illustration of pizza counter with You in front of the counter, 
tell the user that there is 3 pointer : front, rear, and YourQueueNumber)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- YourQueueNumber / front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear <br>
<input type="radio" id="A" name="studycase6" value="A" <?php if($_GET['studycase6'] == "A"): ?> checked=true <?php endif; ?> disabled>A. <br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase6" value="B" <?php if($_GET['studycase6'] == "B"): ?> checked=true <?php endif; ?> disabled>B. <br>
    <label for="B">   front=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase6" value="C" <?php if($_GET['studycase6'] == "C"): ?> checked=true <?php endif; ?> disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" <?php if($_GET['studycase6'] != "D"): ?> name="studycase7" <?php else: ?> name="studycase6" <?php endif; ?> value="D" <?php if($_GET['studycase6'] == "D"): ?> checked=true <?php endif; ?> disabled>D. <br>
    <label for="D" <?php if($_GET['studycase6'] != "D"): ?> style="color:green;">  ✓ <?php else: ?> > <?php endif; ?>   front=YourQueueNumber;<br>
                      front=front->next;<br>
                      free(YourQueueNumber);
    </label><br>
    <input type="radio" id="E" name="studycase6" value="E" <?php if($_GET['studycase6'] == "E"): ?> checked=true <?php endif; ?> disabled>E. <br>
    <label for="E">   front->next=NULL;</label><br>

                Your score = <?php echo e($_GET['score']); ?> <br>
                    <?php if($_GET['score']==100.2): ?>
                        Congratulations! You got all of them right<br>
                    <?php elseif($_GET['score']>80): ?>
                        Great! You got most of them right<br>
                    <?php elseif($_GET['score']>60): ?>
                        Good! You have mastered some of the concept<br>
                    <?php else: ?>
                        Keep practicing and you will master the concept<br>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Thesis\resources\views/Queuescoreview.blade.php ENDPATH**/ ?>