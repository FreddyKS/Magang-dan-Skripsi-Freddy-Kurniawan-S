@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Stack - Study Case Result
                <button onclick="location.href='/stack'" class="btn btn-primary btn-block">
                                    {{ __('Back to Stack homepage') }}
                </button></center></div>
                <div class="card-body">
  @if($_GET['studycase1'] == "B") ✓ @else ✕ @endif  1. You just receive a package from your friends, you want to open it later.<br>
   How do you make You put the package on the floor in your room in C language way?<br>
   (there is 2 pointer : top and YourPackage)<br>
   <img src="/../storage/Images/Stack_Box.png" style="width:100px;height:100px"><br>
   -----------This is floor-------------------<br>
   <input type="radio" id="A" name="studycase1" value="A" @if($_GET['studycase1'] == "A") checked=true @endif disabled>A.<br>
    <label for="A">   top=You;<br>
                      int top->next;<br>
                      top->next=NULL; </label><br>
    <input type="radio" id="B" @if($_GET['studycase1'] != "B") name="studycase7" @else name="studycase1" @endif value="B" @if($_GET['studycase1'] == "B") checked=true @endif disabled>B.<br>
    <label for="B" @if($_GET['studycase1'] != "B") style="color:green;">  ✓ @else > @endif   top=You;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase1" value="C" @if($_GET['studycase1'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int top;<br>
                      top=You;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase1" value="D" @if($_GET['studycase1'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   top=You;</label><br>
    <input type="radio" id="E" name="studycase1" value="E" @if($_GET['studycase1'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   top->next=NULL;</label><br>


<br>@if($_GET['studycase2'] == "B") ✓ @else ✕ @endif 2. You receive another package from your friends, you also want to open it later.<br>
   You want to put it on the top of the other package<br>
   In C, how do you make You put the package on the top of that other package?<br>
   (there is 2 pointer : top, and YourPackage)<br>
   <img src="/../storage/Images/stackstudycase2.jpg" style="width:100px;height:100px"><br>
   <input type="radio" id="A" name="studycase2" value="A" @if($_GET['studycase2'] == "A") checked=true @endif disabled>A.<br>
    <label for="A">   top=YourPackage;<br>
                      YourPackage->next=top; </label><br>
    <input type="radio" id="B" @if($_GET['studycase2'] != "B") name="studycase7" @else name="studycase2" @endif value="B" @if($_GET['studycase2'] == "B") checked=true @endif disabled>B.<br>
    <label for="B" @if($_GET['studycase2'] != "B") style="color:green;">  ✓ @else > @endif   YourPackage->next=top;<br>
                      top=YourPackage;<br>
                      </label><br>
    <input type="radio" id="C" name="studycase2" value="C" @if($_GET['studycase2'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int *top,*YourPackage;<br>
                      YourPackage->next=top;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase2" value="D" @if($_GET['studycase2'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   top->next=NULL;</label><br>
    <input type="radio" id="E" name="studycase2" value="E" @if($_GET['studycase2'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   YourPackage=top;</label><br>


<br>@if($_GET['studycase3'] == "A") ✓ @else ✕ @endif 3. Fine, lets open the package. But for now, just take 1 package to be opened.<br>
   As a C programmer, take 1 package from that stack.<br>
   (there is 2 pointer : top, and YourPackage)<br>
   <img src="/../storage/Images/stackstudycase3.jpg" style="width:100px;height:100px"><br>
   <input type="radio" id="A" @if($_GET['studycase3'] != "A") name="studycase7" @else name="studycase3" @endif value="A" @if($_GET['studycase3'] == "A") checked=true @endif disabled>A. <br>
    <label for="A">   YourPackage=top;<br>
                      int top->next;<br>
                      top->next=top; </label><br>
    <input type="radio" id="B" name="studycase3" value="B" @if($_GET['studycase3'] == "B") checked=true @endif disabled>B. <br>
    <label for="B" @if($_GET['studycase3'] != "A") style="color:green;">  ✓ @else > @endif   YourPackage=top;<br>
                      top=top->next;</label><br>
    <input type="radio" id="C" name="studycase3" value="C" @if($_GET['studycase3'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int *top,*YourPackage;<br>
                      YourPackage=NULL;<br>
                      top=top->next;</label><br>
    <input type="radio" id="D" name="studycase3" value="D" @if($_GET['studycase3'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   YourPackage=top;<br>
                      top=top->next;<br>
                      free(YourPackage);
    </label><br>
    <input type="radio" id="E" name="studycase3" value="E" @if($_GET['studycase3'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   free(YourPackage);</label><br>


    @if($_GET['studycase4'] == "B") ✓ @else ✕ @endif 4. You just bought a trouser. You want to store it in the cupboard<br>
   How do you make You put the trouser in the cupboard (C language way)?<br>
   (there is 2 pointer : top, and YourOutfit)<br>
   <img src="/../storage/Images/stackstudycase4.jpg" style="width:100px;height:100px"><br>
   <input type="radio" id="A" name="studycase4" value="A" @if($_GET['studycase4'] == "A") checked=true @endif disabled>A.<br>
    <label for="A">   top=YourOutfit;<br>
                      int top->next;<br>
                      top->next=NULL; </label><br>
    <input type="radio" id="B" @if($_GET['studycase4'] != "B") name="studycase7" @else name="studycase4" @endif value="B" @if($_GET['studycase4'] == "B") checked=true @endif disabled>B.<br>
    <label for="B" @if($_GET['studycase4'] != "B") style="color:green;">  ✓ @else > @endif   top=YourOutfit;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase4" value="C" @if($_GET['studycase4'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int *top,*YourOutfit;<br>
                      top=YourOutfit;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase4" value="D" @if($_GET['studycase4'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   top=YourOutfit;</label><br>
    <input type="radio" id="E" name="studycase4" value="E" @if($_GET['studycase4'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   top->next=NULL;</label><br>

    @if($_GET['studycase5'] == "B") ✓ @else ✕ @endif 5. You bought a pajamas, you want to store it in the cupboard.<br>
   Remember you just put a trouser there.<br>
   In C language, how do you make You put the pajamas on the top of the trouser?<br>
   (there is 2 pointer : top, and YourOutfit)<br>
   <img src="/../storage/Images/stackstudycase5.jpg" style="width:100px;height:100px"><br>
   <input type="radio" id="A" name="studycase5" value="A" @if($_GET['studycase5'] == "A") checked=true @endif disabled>A. <br>
   <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" @if($_GET['studycase3'] != "B") name="studycase7" @else name="studycase5" @endif value="B" @if($_GET['studycase5'] == "B") checked=true @endif disabled>B. <br>
    <label for="B" @if($_GET['studycase5'] != "B") style="color:green;">  ✓ @else > @endif   YourOutfit->next=top;<br>
                      top=YourOutfit;</label><br>
    <input type="radio" id="C" name="studycase5" value="C" @if($_GET['studycase5'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int *top, *YourOutfit;<br>
                      top=YourOutfit;<br>
                      YourOutfit->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase5" value="D" @if($_GET['studycase5'] == "D") checked=true @endif disabled>D. <br>
    <label for="D">   YourQueueNumber=top;<br>
                      top=top->next;<br>
                      free(top);
    </label><br>
    <input type="radio" id="E" name="studycase5" value="E" @if($_GET['studycase5'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   YourOutfit->next=NULL;</label><br>


    @if($_GET['studycase6'] == "D") ✓ @else ✕ @endif 6. Now, it is time to go to sleep. You want to use the pajamas you just bought<br>
   As a C programmer, take that pajamas from the cupboard.<br>
   (there is 2 pointer : top, and YourOutfit)<br>
   <img src="/../storage/Images/stackstudycase6.jpg" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase6" value="A" @if($_GET['studycase6'] == "A") checked=true @endif disabled>A. <br>
    <label for="A">   YourQueueNumber=top;<br>
                      int top->next;<br>
                      top=top->next; </label><br>
    <input type="radio" id="B" name="studycase6" value="B" @if($_GET['studycase6'] == "B") checked=true @endif disabled>B. <br>
    <label for="B">   YourQueueNumber=top;<br>
                      top=top->next;</label><br>
    <input type="radio" id="C" name="studycase6" value="C" @if($_GET['studycase6'] == "C") checked=true @endif disabled>C. <br>
    <label for="C">   int top;<br>
                      top=YourQueueNumber;<br>
                      YourQueueNumber->next=NULL;</label><br>
    <input type="radio" id="D" @if($_GET['studycase6'] != "D") name="studycase7" @else name="studycase6" @endif value="D" @if($_GET['studycase6'] == "D") checked=true @endif disabled>D. <br>
    <label for="D" @if($_GET['studycase6'] != "D") style="color:green;">  ✓ @else > @endif   YourOutfit=top;<br>
                      top=top->next;<br>
                      free(YourOutfit);
    </label><br>
    <input type="radio" id="E" name="studycase6" value="E" @if($_GET['studycase6'] == "E") checked=true @endif disabled>E. <br>
    <label for="E">   YourOutfit->next=top;</label><br>
                Your score = {{ $_GET['score'] }}<br>
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