<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Struct and Pointers
Route::get('/structandpointers','MenuController@displayStructandPointersHomepage')->middleware('checkLoggedIn');
Route::get('/structandpointers/studycase','MenuController@displayStructandPointersStudyCase')->middleware('checkLoggedIn');
Route::get('/structandpointers/videotutorial','MenuController@displayStructandPointersVideoTutorial')->middleware('checkLoggedIn');
//Route::get('storage/Images/MultimediaStructAndPointers/videos/Enqueueing+Video.mp4','MenuController@playStructandPointersVideo');
Route::get('videos/Enqueueing+Video.mp4', [ function () {
    $path = storage_path('/MultimediaStructAndPointers/videos/Enqueueing+Video.mp4');
    if (file_exists($path)) {
        return response()->file($path, array('Content-Type' =>'video/mp4'));
    }
    abort(404);
}]);
//Queue
Route::get('/queue','MenuController@displayQueueHomepage')->middleware('checkLoggedIn');
Route::get('/queue/videotutorial','MenuController@displayQueueVideoTutorial')->middleware('checkLoggedIn');
Route::get('/queue/studycase','MenuController@displayQueueStudyCase')->middleware('checkLoggedIn');
Route::get('/queue/simulation','MenuController@displayDataStructures_Queue')->middleware('checkLoggedIn');
Route::post('/insertqueue','MenuController@insertQueue');
Route::post('/deletequeue','MenuController@deleteQueue');
//Stack
Route::get('/stack','MenuController@displayStackHomepage')->middleware('checkLoggedIn');
Route::get('/stack/videotutorial','MenuController@displayStackVideoTutorial')->middleware('checkLoggedIn');
Route::get('/stack/studycase','MenuController@displayStackStudyCase')->middleware('checkLoggedIn');
Route::get('/stack/simulation','MenuController@displayDataStructures_Stack')->middleware('checkLoggedIn');
Route::post('/insertstack','MenuController@insertStack');
Route::post('/deletestack','MenuController@deleteStack');

//Submit study cases answers
Route::post('/submitQueueAnswer','MenuController@checkQueueAnswer')->middleware('checkLoggedIn');
Route::post('/submitStackAnswer','MenuController@checkStackAnswer')->middleware('checkLoggedIn');
Route::post('/submitStructAndPointersAnswer','MenuController@checkStructAndPointersAnswer')->middleware('checkLoggedIn');

//Display score view
Route::get('/QueueStudyCaseScore','MenuController@displayQueueStudyCaseScore')->middleware('checkLoggedIn');
Route::get('/StackStudyCaseScore','MenuController@displayStackStudyCaseScore')->middleware('checkLoggedIn');
Route::get('/StructAndPointersStudyCaseScore','MenuController@displayStructAndPointersStudyCaseScore')->middleware('checkLoggedIn');

//Show score
Route::get('/showScore/{email}','MenuController@displayUserScore')->middleware('checkLoggedIn');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
