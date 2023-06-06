<?php

namespace App\Http\Controllers;
use App\Guest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;

class RegisterController extends Controller
{
    public function loggingin(){
        return view('login');
    }
    public function logginginSuccess(Request $req){
        $email = $req->email;
        $password = $req->password;
        $r = $req->remember;
        $data = Guest::where('email',$email)->first();
        if($data){ //is Email exist or not
            if($password==$data->password){//is Password exist or not
                Session::put('email',$data->email);
                Session::put('name',$data->name);
                //if($r==NULL){
                    Auth::login(Guest::where('email',$email)->first(),$remember = $r);
                //}
                //else{
                   // Auth::login(Guest::where('email',$email)->first(),$remember = true);
                //}
                return redirect('/loginconfirmed');
            }
            else{
                return back()->withErrors('Wrong Email or Password');
            }
        }
        else{
            return back()->withErrors('Your data not exist in our data');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function registering(){
        return view('register');
    }
    public function registersuccess(Request $req){
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email|unique:guest',
            'phone_number' => 'required|regex:/^[0-9]+$/|min:8|max:12',
            'Gender' => 'required|in:Male,Female',
            'address' => 'required|min:10',
            'password' => 'required|alpha_dash|min:8|confirmed',
            'password_confirmation' => 'required',
            'image' => 'required|image',
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $guestuser = new Guest;
        $guestuser->email  = $req->email;
        $guestuser->name = $req->name;
        $guestuser->phone_number = $req->phone_number;
        $guestuser->gender = $req->Gender;
        $guestuser->address = $req->address;
        $guestuser->password = $req->password;
        $image = $req->file('image');
        $extension = $image->getClientOriginalExtension();
        $imageName = $req->name.'.'.$extension;
        $guestuser->image = 'storage/img/'.$imageName;
        Storage::putFileAs('public/img',$image ,$imageName);
        $guestuser->save();
        return redirect('/');
    }
    //
}
