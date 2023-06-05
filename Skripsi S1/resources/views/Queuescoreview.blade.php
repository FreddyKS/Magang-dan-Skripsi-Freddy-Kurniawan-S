@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Queue - Study Case Result
                <button onclick="location.href='/queue'" class="btn btn-primary btn-block">
                                    {{ __('Back to Queue homepage') }}
                </button></center></div>
                <div class="card-body">
@if($_GET['studycase1'] == "B") ✓ @else ✕ @endif 1. You want to purchase a fried chicken. <br>
Luckily for you, there is nobody queueing in the counter. <br>
As a C programmer, can you enqueue yourself to the counter from below's syntax? <br>
(there is 3 pointer : front, rear, and You)<br>
<img src="/../storage/Images/queuestudycase13.jpg" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase1" value="A" @if($_GET['studycase1'] == "A") checked=true @endif disabled>A.<br>
    <label for="A" >   front=rear=You;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" @if($_GET['studycase1'] != "B") name="studycase7" @else name="studycase1" @endif value="B" @if($_GET['studycase1'] == "B") checked=true @endif disabled>B.<br>
    <label for="B" @if($_GET['studycase1'] != "B") style="color:green;">  ✓ @else > @endif   front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase1" value="C" @if($_GET['studycase1'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase1" value="D" @if($_GET['studycase1'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   front=rear=You;</label><br>
    <input type="radio" id="E" name="studycase1" value="E" @if($_GET['studycase1'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   rear->next=NULL;</label><br>


<br>@if($_GET['studycase2'] == "A") ✓ @else ✕ @endif 2. It is 7 P.M. , you are hungry and wanted to buy some martabak,<br>
Below is the situation in the martabak store.<br>
Can you enqueue yourself in C language way?<br>
(Illustration of counter with 3 people enqueueing, 
tell the user that there is 3 pointer : front, rear, and You)<br>
<img src="/../storage/Images/queuestudycase2.jpg" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear <br>
<input type="radio" id="A" @if($_GET['studycase2'] != "A") name="studycase7" @else name="studycase2" @endif value="A" @if($_GET['studycase2'] == "A") checked=true @endif disabled>A.<br>
    <label for="A" @if($_GET['studycase2'] != "A") style="color:green;">  ✓ @else > @endif   rear=You;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase2" value="B" @if($_GET['studycase2'] == "B") checked=true @endif disabled>B.<br>
    <label for="B">   rear=You;<br>
                      int rear->next;
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase2" value="C" @if($_GET['studycase2'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int rear;<br>
                      rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase2" value="D" @if($_GET['studycase2'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   rear->next=NULL;</label><br>
    <input type="radio" id="E" name="studycase2" value="E" @if($_GET['studycase2'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   rear=You;</label><br>

 
<br>@if($_GET['studycase3'] == "D") ✓ @else ✕ @endif 3. Now this is your turn to be served in fried chicken store, <br>
Here is the condition. Can you make the counter serve you? <br>
(Illustration of counter with 3 people with You in front of the counter, <br> 
tell the user that there is 3 pointer : front, rear, and You) <br>
<img src="/../storage/Images/queuestudycase13.jpg" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- You / front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear <br>
<input type="radio" id="A" name="studycase3" value="A" @if($_GET['studycase3'] == "A") checked=true @endif disabled>A. <br>
    <label for="A">   front=rear=You;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase3" value="B" @if($_GET['studycase3'] == "B") checked=true @endif disabled>B. <br>
    <label for="B">   front=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase3" value="C" @if($_GET['studycase3'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=You;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" @if($_GET['studycase3'] != "D") name="studycase7" @else name="studycase3" @endif value="D" @if($_GET['studycase3'] == "D") checked=true @endif disabled>D. <br>
    <label for="D" @if($_GET['studycase3'] != "D") style="color:green;">  ✓ @else > @endif   front=You;<br>
                      front=front->next;<br>
                      free(You);
    </label><br>
    <input type="radio" id="E" name="studycase3" value="E" @if($_GET['studycase3'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   front->next=NULL;</label><br>


<br> @if($_GET['studycase4'] == "B") ✓ @else ✕ @endif 4. You want to purchase a pizza at 3 A.M. . You pick the queue number <br>
Luckily for you, you got number 1. <br>
As a C programmer, can you enqueue yourself? <br>
(there is 3 pointer : front, rear, and YourQueueNumber)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase4" value="A" @if($_GET['studycase4'] == "A") checked=true @endif disabled>A.<br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" @if($_GET['studycase4'] != "B") name="studycase7" @else name="studycase4" @endif value="B" @if($_GET['studycase4'] == "B") checked=true @endif disabled>B.<br>
    <label for="B" @if($_GET['studycase4'] != "B") style="color:green;">  ✓ @else > @endif   front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase4" value="C" @if($_GET['studycase4'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase4" value="D" @if($_GET['studycase4'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   front=rear=YourQueueNumber;</label><br>
    <input type="radio" id="E" name="studycase4" value="E" @if($_GET['studycase4'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   rear->next=NULL;</label><br>


<br>@if($_GET['studycase5'] == "B") ✓ @else ✕ @endif 5. It is 6 P.M. , you are hungry and wants some pizza for dinner . <br>
Again you pick the queue number and you got number 3<br>
Below is the situation in the pizza store.<br>
Can you enqueue yourself in C language way?<br>
(there is 3 pointer : front, rear, and YourQueueNumber)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear<br>
<input type="radio" id="A" name="studycase5" value="A" @if($_GET['studycase5'] == "A") checked=true @endif disabled>A. <br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" @if($_GET['studycase5'] != "B") name="studycase7" @else name="studycase5" @endif value="B" @if($_GET['studycase5'] == "B") checked=true @endif disabled>B. <br>
    <label for="B" @if($_GET['studycase5'] != "B") style="color:green;">  ✓ @else > @endif   rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase5" value="C" @if($_GET['studycase5'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase5" value="D" @if($_GET['studycase5'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   front=YourQueueNumber;<br>
                      front=front->next;<br>
                      free(You);
    </label><br>
    <input type="radio" id="E" name="studycase5" value="E" @if($_GET['studycase5'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   front->next=NULL;</label><br>


<br>@if($_GET['studycase6'] == "D") ✓ @else ✕ @endif 6. Now this is your turn to order your pizza at the counter, <br>
Here is the condition. Can you make the counter serve you?<br>
(Illustration of pizza counter with You in front of the counter, 
tell the user that there is 3 pointer : front, rear, and YourQueueNumber)<br>
<img src="/../storage/Images/queuestudycase456.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- YourQueueNumber / front
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px">
<img src="/../storage/Images/Queue_Person.png" style="width:100px;height:100px"> <-- rear <br>
<input type="radio" id="A" name="studycase6" value="A" @if($_GET['studycase6'] == "A") checked=true @endif disabled>A. <br>
    <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase6" value="B" @if($_GET['studycase6'] == "B") checked=true @endif disabled>B. <br>
    <label for="B">   front=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase6" value="C" @if($_GET['studycase6'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int front;<br>
                      front=rear=YourQueueNumber;<br>
                      rear->next=NULL;</label><br>
    <input type="radio" id="D" @if($_GET['studycase6'] != "D") name="studycase7" @else name="studycase6" @endif value="D" @if($_GET['studycase6'] == "D") checked=true @endif disabled>D. <br>
    <label for="D" @if($_GET['studycase6'] != "D") style="color:green;">  ✓ @else > @endif   front=YourQueueNumber;<br>
                      front=front->next;<br>
                      free(YourQueueNumber);
    </label><br>
    <input type="radio" id="E" name="studycase6" value="E" @if($_GET['studycase6'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   front->next=NULL;</label><br>

                Your score = {{ $_GET['score'] }} <br>
                    @if($_GET['score']==100.2)
                        Congratulations! You got all of them right<br>
                    @elseif($_GET['score']>80)
                        Great! You got most of them right<br>
                    @elseif($_GET['score']>60)
                        Good! You have mastered some of the concept<br>
                    @else
                        Keep practicing and you will master the concept<br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection