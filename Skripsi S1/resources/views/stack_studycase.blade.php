@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Stack - Study Case
                <button onclick="location.href='/./stack'" class="btn btn-primary btn-block">
                                    {{ __('Back to Stack homepage') }}
                </button>
                </center></div>
                <div class="card-body">
                <form method="post" action="/submitStackAnswer" enctype="multipart/form-data">
                @csrf
1. You just receive a package from your friends, you want to open it later.<br>
   How do you make You put the package on the floor in your room in C language way?<br>
   (there is 2 pointer : top and YourPackage)<br>
   <img src="/../storage/Images/Stack_Box.png" style="width:100px;height:100px"><br>
   -----------This is floor-------------------<br>
   <input type="radio" id="A" name="studycase1" value="A">A.<br>
    <label for="A">   top=YourPackage;<br>
                      int top->next;<br>
                      top->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase1" value="B">B.<br>
    <label for="B">   top=YourPackage;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase1" value="C">C. <br>
    <label for="C">   int top;<br>
                      top=YourPackage;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase1" value="D">D. <br>
    <label for="D">   top=YourPackage;</label><br>
    <input type="radio" id="E" name="studycase1" value="E">E. <br>
    <label for="E">   top->next=NULL;</label><br>


<br>2. You receive another package from your friends, you also want to open it later.<br>
   You want to put it on the top of the other package<br>
   In C, how do you make You put the package on the top of that other package?<br>
   (there is 2 pointer : top, and YourPackage)<br>
   <img src="/../storage/Images/stackstudycase2.jpg" style="width:100px;height:100px"><br>
   <input type="radio" id="A" name="studycase2" value="A">A.<br>
    <label for="A">   top=YourPackage;<br>
                      YourPackage->next=top; </label><br>
    <input type="radio" id="B" name="studycase2" value="B">B.<br>
    <label for="B">   YourPackage->next=top;<br>
                      top=YourPackage;<br>
                      </label><br>
    <input type="radio" id="C" name="studycase2" value="C">C. <br>
    <label for="C">   int *top,*YourPackage;<br>
                      YourPackage->next=top;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase2" value="D">D. <br>
    <label for="D">   top->next=NULL;</label><br>
    <input type="radio" id="E" name="studycase2" value="E">E. <br>
    <label for="E">   YourPackage=top;</label><br>


<br>3. Fine, lets open the package. But for now, just take 1 package to be opened.<br>
   As a C programmer, take 1 package from that stack.<br>
   (there is 2 pointer : top, and YourPackage)<br>
   <img src="/../storage/Images/stackstudycase3.jpg" style="width:100px;height:100px"><br>
   <input type="radio" id="A" name="studycase3" value="A">A. <br>
    <label for="A">   YourPackage=top;<br>
                      int top->next;<br>
                      top->next=top; </label><br>
    <input type="radio" id="B" name="studycase3" value="B">B. <br>
    <label for="B">   YourPackage=top;<br>
                      top=top->next;</label><br>
    <input type="radio" id="C" name="studycase3" value="C">C. <br>
    <label for="C">   int *top,*YourPackage;<br>
                      YourPackage=NULL;<br>
                      top=top->next;</label><br>
    <input type="radio" id="D" name="studycase3" value="D">D. <br>
    <label for="D">   YourPackage=top;<br>
                      top=top->next;<br>
                      free(YourPackage);
    </label><br>
    <input type="radio" id="E" name="studycase3" value="E">E. <br>
    <label for="E">   free(YourPackage);</label><br>


4. You just bought a trouser. You want to store it in the cupboard<br>
   How do you make You put the trouser in the cupboard (C language way)?<br>
   (there is 2 pointer : top, and YourOutfit)<br>
   <img src="/../storage/Images/stackstudycase4.jpg" style="width:100px;height:100px"><br>
   <input type="radio" id="A" name="studycase4" value="A">A.<br>
    <label for="A">   top=YourOutfit;<br>
                      int top->next;<br>
                      top->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase4" value="B">B.<br>
    <label for="B">   top=YourOutfit;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="C" name="studycase4" value="C">C. <br>
    <label for="C">   int *top,*YourOutfit;<br>
                      top=YourOutfit;<br>
                      top->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase4" value="D">D. <br>
    <label for="D">   top=YourOutfit;</label><br>
    <input type="radio" id="E" name="studycase4" value="E">E. <br>
    <label for="E">   top->next=NULL;</label><br>

5. You bought a pajamas, you want to store it in the cupboard.<br>
   Remember you just put a trouser there.<br>
   In C language, how do you make You put the pajamas on the top of the trouser?<br>
   (there is 2 pointer : top, and YourOutfit)<br>
   <img src="/../storage/Images/stackstudycase5.jpg" style="width:100px;height:100px"><br>
   <input type="radio" id="A" name="studycase5" value="A">A. <br>
   <label for="A">   front=rear=YourQueueNumber;<br>
                      int rear->next;<br>
                      rear->next=NULL; </label><br>
    <input type="radio" id="B" name="studycase5" value="B">B. <br>
    <label for="B">   YourOutfit->next=top;<br>
                      top=YourOutfit;</label><br>
    <input type="radio" id="C" name="studycase5" value="C">C. <br>
    <label for="C">   int *top, *YourOutfit;<br>
                      top=YourOutfit;<br>
                      YourOutfit->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase5" value="D">D. <br>
    <label for="D">   YourQueueNumber=top;<br>
                      top=top->next;<br>
                      free(top);
    </label><br>
    <input type="radio" id="E" name="studycase5" value="E">E. <br>
    <label for="E">   YourOutfit->next=NULL;</label><br>


6. Now, it is time to go to sleep. You want to use the pajamas you just bought<br>
   As a C programmer, take that pajamas from the cupboard.<br>
   (there is 2 pointer : top, and YourOutfit)<br>
   <img src="/../storage/Images/stackstudycase6.jpg" style="width:100px;height:100px"><br>
<input type="radio" id="A" name="studycase6" value="A">A. <br>
    <label for="A">   YourQueueNumber=top;<br>
                      int top->next;<br>
                      top=top->next; </label><br>
    <input type="radio" id="B" name="studycase6" value="B">B. <br>
    <label for="B">   YourQueueNumber=top;<br>
                      top=top->next;</label><br>
    <input type="radio" id="C" name="studycase6" value="C">C. <br>
    <label for="C">   int top;<br>
                      top=YourQueueNumber;<br>
                      YourQueueNumber->next=NULL;</label><br>
    <input type="radio" id="D" name="studycase6" value="D">D. <br>
    <label for="D">   YourOutfit=top;<br>
                      top=top->next;<br>
                      free(YourOutfit);
    </label><br>
    <input type="radio" id="E" name="studycase6" value="E">E. <br>
    <label for="E">   YourOutfit->next=top;</label><br>

    <input type="hidden" id="email" name="email" value={{Auth::user()->email}}>
    <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Answer') }}
                                </button>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
