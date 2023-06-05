<?php

namespace App\Http\Controllers;

//Database Models
use App\User;
use App\Queue;
use App\Stack;
use App\ViewScore;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Mime;

class MenuController extends Controller
{
    //Display Homepages
    public function displayStackHomepage(){
        return view('stack_homepage');
    }
    public function displayQueueHomepage(){
        return view('queue_homepage');
    }
    public function displayStructandPointersHomepage(){
        return view('struct_and_pointers_homepage');
    }
    //Display Video Tutorial views
    public function displayStackVideoTutorial(){
        return view('stack_videotutorial');
    }
    public function displayQueueVideoTutorial(){
        return view('queue_videotutorial');
    }
    public function displayStructandPointersVideoTutorial(){
        return view('struct_and_pointers_videotutorial');
    }
    //Display Study Case views
    public function displayStackStudyCase(){
        return view('stack_studycase');
    }
    public function displayQueueStudyCase(){
        return view('queue_studycase');
    }
    public function displayStructandPointersStudyCase(){
        return view('struct_and_pointers_studycase');
    }
    //Display simulations view
    public function displayDataStructures_Queue(){
        $data_structures = [
            'data_structures' => Queue::orderBy('id','asc')->get()
        ];
        $front = Queue::orderBy('id','asc')->first();
        $rear =  Queue::orderBy('id','desc')->first();
        return view('queue')->with($data_structures)->with('front',$front)->with('rear',$rear);
    }
    public function displayUserScore($email){
        $stack = [
            'stack' => ViewScore::where('email',$email)->where('category',"Stack")->get()
        ];
        $queue = [
            'queue' => ViewScore::where('email',$email)->where('category',"Queue")->get()
        ];
        $struct_and_pointers = [
            'struct_and_pointers' => ViewScore::where('email',$email)->where('category',"Struct and Pointers")->get()
        ];
        return view ('Show_Score')->with($stack)->with($queue)->with($struct_and_pointers);
    }
    public function displayDataStructures_Stack(){
        $data_structures = [
            'data_structures' => Stack::orderBy('id','desc')->get(),
        ];
        $top = Stack::orderBy('id','desc')->first();
        return view('stack')->with($data_structures)->with('top',$top);
    }
    //Insert
    public function insertQueue(Request $req){
        $data_structures = new Queue;
        $data_structures->data = $req->data;
        $data_structures->save();
        return redirect('/queue/simulation?alert=Enqueue%20Success');
    }
    public function insertStack(Request $req){
        $data_structures = new Stack;
        $data_structures->data = $req->data;
        $data_structures->save();
        return redirect('/stack/simulation?alert=Push%20Success');
    }
    //Delete
    public function deleteStack(Request $req){
        $data_structures = Stack::orderby('id','desc')->first();
        $data_structures->delete();
        return redirect('/stack/simulation?alert=Pop%20Success');
    }
    public function deleteQueue(Request $req){
        $data_structures = Queue::orderby('id','asc')->first();
        $data_structures->delete();
        return redirect('/queue/simulation?alert=Dequeue%20Success');
    }
    //Check study cases answers
    public function checkQueueAnswer(Request $req){
        $score=0;
        if($req->studycase1=="B"){
            $score=$score+16.7;
        }
        if($req->studycase2=="A"){
            $score=$score+16.7;
        }
        if($req->studycase3=="D"){
            $score=$score+16.7;
        }
        if($req->studycase4=="B"){
            $score=$score+16.7;
        }
        if($req->studycase5=="B"){
            $score=$score+16.7;
        }
        if($req->studycase6=="D"){
            $score=$score+16.7;
        }
        $score_save = new ViewScore;
        $score_save->email = $req->email;
        $score_save->category = "Queue";
        $score_save->score = $score;
        $score_save->save();
        return redirect('/QueueStudyCaseScore?score=' .$score. '&studycase1=' .$req->studycase1. '&studycase2=' .$req->studycase2. '&studycase3=' .$req->studycase3. '&studycase4=' .$req->studycase4. '&studycase5=' .$req->studycase5. '&studycase6=' .$req->studycase6);
    }
    public function checkStackAnswer(Request $req){
        $score=0;
        if($req->studycase1=="B"){
            $score=$score+16.7;
        }
        if($req->studycase2=="B"){
            $score=$score+16.7;
        }
        if($req->studycase3=="A"){
            $score=$score+16.7;
        }
        if($req->studycase4=="B"){
            $score=$score+16.7;
        }
        if($req->studycase5=="B"){
            $score=$score+16.7;
        }
        if($req->studycase6=="D"){
            $score=$score+16.7;
        }
        $score_save = new ViewScore;
        $score_save->email = $req->email;
        $score_save->category = "Stack";
        $score_save->score = $score;
        $score_save->save();
        return redirect('/StackStudyCaseScore?score=' .$score. '&studycase1=' .$req->studycase1. '&studycase2=' .$req->studycase2. '&studycase3=' .$req->studycase3. '&studycase4=' .$req->studycase4. '&studycase5=' .$req->studycase5. '&studycase6=' .$req->studycase6);
    }
    public function checkStructAndPointersAnswer(Request $req){
        $score=0;
        if($req->studycase1=="B"){
            $score=$score+50;
        }
        if($req->studycase2=="B"){
            $score=$score+50;
        }
        $score_save = new ViewScore;
        $score_save->email = $req->email;
        $score_save->category = "Struct and Pointers";
        $score_save->score = $score;
        $score_save->save();
        return redirect('/StructAndPointersStudyCaseScore?score=' .$score. '&studycase1=' .$req->studycase1. '&studycase2=' .$req->studycase2);
    }
    //Display study case score
    public function displayQueueStudyCaseScore(){
        return view('Queuescoreview');
    }
    public function displayStackStudyCaseScore(){
        return view('Stackscoreview');
    }
    public function displayStructAndPointersStudyCaseScore(){
        return view('StructAndPointersscoreview');
    }
}
