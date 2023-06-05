@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <center>
                <div class="card-header"><center>Struct and Pointers - Study Case Result
                <button onclick="location.href='/structandpointers'" class="btn btn-primary btn-block">
                                    {{ __('Back to Struct and Pointers homepage') }}
                </button></center></div>
                <div class="card-body">
                @if($_GET['studycase1']=="B") 
                ✓  
                @else
                ✕
                @endif 
                1. How do we define the 'grappling hook' (pointer) next in this struct<br>
    <img src="/../storage/Images/structandpointersstudycase1.jpg" style="width:300px;height:200px"><br>
   <input type="radio" id="A" name="studycase1" value="A" @if($_GET['studycase1'] == "A") checked=true @endif disabled>
    <label for="A">A. <br> int* next; in //1</label><br>
    <input type="radio" id="B" @if($_GET['studycase1'] != "B") name="studycase3" @else name="studycase1" @endif value="B" @if($_GET['studycase1'] == "B") checked=true @endif disabled>
    <label for="B" @if($_GET['studycase1'] != "B") style="color:green;">  ✓ @else > @endif B. <br> struct Data *next; in //1</label><br>
    <input type="radio" id="C" name="studycase1" value="C" @if($_GET['studycase1'] == "C") checked=true @endif disabled>
    <label for="C">C. <br> struct Data *next; in //2</label><br>
    <input type="radio" id="D" name="studycase1" value="D" @if($_GET['studycase1'] == "D") checked=true @endif disabled>
    <label for="D">D. <br> int next; in //1</label>
<br>
@if($_GET['studycase2'] == "B") 
✓ 
@else 
✕ 
@endif 
2. How do we make the 'sticky notes' to mark a data with text 'front' in this struct<br>
<img src="/../storage/Images/structandpointersstudycase2.jpg" style="width:300px;height:200px"><br>
    <input type="radio" id="A" name="studycase2" value="A" @if($_GET['studycase2'] == "A") checked=true @endif disabled>
    <label for="A">A. <br>*front in ///2</label><br>
    <input type="radio" id="B" @if($_GET['studycase2'] != "B") name="studycase3" @else name="studycase2" @endif value="B" @if($_GET['studycase2'] == "B") checked=true @endif disabled>
    <label for="B" @if($_GET['studycase2'] != "B") style="color:green;">  ✓ @else > @endif B. <br>*front; in ///1</label><br>
    <input type="radio" id="C" name="studycase2" value="C" @if($_GET['studycase2'] == "C") checked=true @endif disabled>
    <label for="C">C. <br>struct Data *front; in ///1</label><br>
    <input type="radio" id="D" name="studycase2" value="D" @if($_GET['studycase2'] == "D") checked=true @endif disabled>
    <label for="D">D. <br>struct Data *front; in ///2</label><br>
                Your score = {{ $_GET['score'] }} <br>
                    @if($_GET['score']==100)
                        Congratulations! You got all of them right<br>
                    @else
                        Keep practicing and you will master the concept<br>
                    @endif
                </div>
                </center>
            </div>
        </div>
    </div>
</div> 
@endsection