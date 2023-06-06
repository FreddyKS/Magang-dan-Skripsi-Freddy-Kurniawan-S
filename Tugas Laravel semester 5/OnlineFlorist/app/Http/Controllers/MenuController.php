<?php

namespace App\Http\Controllers;

//Database Models
use App\Flower;
use App\Guest;
use App\Courier;
use App\FlowerType;
use App\Cart;
use App\Cart2;
use App\TransactionHistory;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    //Display loginconfirmed view
    public function confirmlogin(){
        return view('loginconfirmed');
    }
    //Display manageuser view
    public function manageuser(){
        $guest = [
            'guest'=> Guest::all()
            //GET LATEST ID = 'guest' => Guest::latest('id')->paginate(1)
        ];
        return view('manageuser')->with($guest);
    }
    //Display manageflower view
    public function manageflower(){
        $flower = [
            'flower' => Flower::paginate(10)
        ];
        return view('manageflower')->with($flower);
    }
    //Display search result of manageflower 
    public function searchmanageflower(Request $req){
        $flower = [
            'flower' => Flower::where('flower_name','like',"%".$req->search."%")->paginate(10)
        ];
        return view('manageflower')->with($flower);
    }
    //Display managecourier view
    public function managecourier(){
        $courier = [
            'courier' => Courier::paginate(10)
        ];
        return view('managecourier')->with($courier);
    }
    //Display search result of managecourier
    public function searchmanagecourier(Request $req){
        $courier = [
            'courier' => Courier::where('courier_name','like',"%".$req->search."%")->paginate(10)
        ];
        return view('managecourier')->with($courier);
    }
    //Display insertcourier view
    public function insertcourier(){
        return view('insertcourier');
    }
    //Display updatecourier view
    public function updatecourier($courier_id){
        $couriers = [
            'courier' => Courier::where('id',$courier_id)->paginate(10)
        ];
        return view('updatecourier')->with($couriers);
    }
    //Display manageflowertype view
    public function manageflowertype(){
        $flowertype = [
            'flowertype' => FlowerType::paginate(10)
        ];
        return view('manageflowertype')->with($flowertype);
    }
    //Display search result of manageflowertype
    public function searchmanageflowertype(Request $req){
        $flowertype = [
            'flowertype' => FlowerType::where('flower_type','like',"%".$req->search."%")->paginate(10)
        ];
        return view('manageflowertype')->with($flowertype);
    }
    //Display insertflowertype view
    public function insertflowertype(){
        return view('insertflowertype');
    }

    public function insertFlowerTypeSuccess(Request $req){
        $rules = [
            'flower_type' => 'required|string|min:3|unique:flower_types',
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $flowertype = new FlowerType;
        $flowertype->flower_type = $req->flower_type;
        $flowertype->save();
        return redirect('/manageflowertype');
    }

    public function insertCourierSuccess(Request $req){
        $rules = [
            'courier_name' => 'required|string|min:3',
            'shipping_cost' => 'numeric|min:3000'
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $couriers = new Courier;
        $couriers->courier_name = $req->courier_name;
        $couriers->shipping_cost = $req->shipping_cost;
        $couriers->save();
        return redirect('/managecourier');
    }
    public function updateflowertype($flower_type_id){
        $flowertype = [
            'flowertype' => FlowerType::where('id',$flower_type_id)->paginate(10)
        ];
        return view('updateflowertype')->with($flowertype);
    }
    public function showCategory(){
        $flower = [
            'flower' => Flower::paginate(10)
        ];
        return view('category')->with($flower);
    }
        public function showSearchCategory(Request $req){
        $flower = [
            'flower' => Flower::where('flower_name','like',"%".$req->search."%")->paginate(10)
        ];
        return view('category')->with($flower);
    }

    public function showCategoryDetails($flower_id){
        $flower = [
            'flower' => Flower::where('flower_id',$flower_id)->paginate(10)
        ];
        return view('flowerdetails')->with($flower);
    }

    public function showProfile(){
        return view('profile');
    }

    public function updateProfile(Request $req,$id){
        $rules = [
            'name' => 'string',
            'email' => 'email|unique:guest,email,'.$id,
            'phone_number' => 'regex:/^[0-9]+$/|min:8|max:12',
            'Gender' => 'in:Male,Female',
            'address' => 'min:10',
            'password' => 'alpha_dash|min:8',
            'image' => 'image',
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $guestuser = Guest::find($id);
        $guestuser->email  = $req->email;
        $guestuser->name = $req->name;
        $guestuser->phone_number = $req->phone_number;
        $guestuser->gender = $req->Gender;
        $guestuser->address = $req->address;
        $guestuser->password = $req->password;
        $image = $req->file('image');
        if(isset($req->image)){
        $extension = $image->getClientOriginalExtension();
        $imageName = $req->name.'.'.$extension;
        $guestuser->image = 'storage/img/'.$imageName;
        Storage::putFileAs('public/img',$image ,$imageName);
        }
        $guestuser->save();
        return redirect('/');
    }

    public function updateUser($user_id){
        $guest = [
            'guest' => Guest::where('id',$user_id)->paginate(10)
        ];
        return view('updateuser')->with($guest);
    }

    public function insertFlower(){
        $flowertype = [
            'flowertype' => FlowerType::all()
        ];  
        return view('insertFlower')->with($flowertype);
    }

    public function insertFlowerSuccess(Request $req){
        $rules = [
            'flower_name' => 'required|string|min:3',
            'flower_type' => 'required',
            'flower_price'=> 'required|integer|min:10000',
            'flower_description' => 'required|min:20|max:200',
            'flower_stock'=>'required|integer|min:1',
            'flower_image' => 'required|image',
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $flowere = new Flower;
        $flowere->flower_name  = $req->flower_name;
        $flowere->flower_type = $req->flower_type;
        $flowere->flower_stock = $req->flower_stock;
        $flowere->flower_price = $req->flower_price;
        $flowere->flower_description = $req->flower_description;
        $image = $req->file('flower_image');
        $extension = $image->getClientOriginalExtension();
        $imageName = $req->flower_name.'.'.$extension;
        $flowere->flower_image = 'storage/img/'.$imageName;
        Storage::putFileAs('public/img',$image ,$imageName);
        $flowere->save();
        return redirect('/manageflower');
    }

    public function updateFlower($flower_id){
        $flower = [
            'flower' => Flower::where('flower_id',$flower_id)->paginate(10)
        ];
        $flower_type =[
            'flower_type' => FlowerType::all()
        ];
        return view('updateFlower')->with($flower)->with($flower_type);
    }

    public function updateFlowerSuccess(Request $req,$flower_id){
        $rules = [
            'flower_name' => 'string|min:3',
            //'flower_type' => 'required',
            'flower_price'=> 'integer|min:10000',
            'flower_description' => 'min:20|max:200',
            'flower_stock'=>'integer|min:1',
            'flower_image' => 'image',
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $flower = Flower::find($flower_id);
        $flower->flower_name  = $req->flower_name;
        $flower->flower_type = $req->flower_type;
        $flower->flower_stock = $req->flower_stock;
        $flower->flower_price = $req->flower_price;
        $flower->flower_description = $req->flower_description;
        $image = $req->file('image');
        if(isset($req->image)){
            $image = $req->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $req->name.'.'.$extension;
            $flower->flower_image = 'storage/img/'.$imageName;
            Storage::putFileAs('public/img',$image ,$imageName);
        }
        $flower->save();
        return redirect('/manageflower');
    }

    public function updateFlowerTypeSuccess(Request $req,$id){
        $rules = [
            'flower_type' => 'string|min:3|unique:flower_types,flower_type,'.$id,
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $flowertype = FlowerType::find($id);
        $flowertype->flower_type = $req->flower_type;
        $flowertype->save();
        return redirect('/manageflowertype');
    }
    public function deleteuser(Request $req){
        $guest = Guest::find($req->id);
        $guest->delete();
        return redirect('/manageuser');
    }
    public function deleteflower(Request $req){
        $flower = Flower::find($req->id);
        $flower->delete('/manageflower');
    }
    public function deletecourier(Request $req){
        $courier = Courier::find($req->id);
        $courier->delete();
        return redirect('/managecourier');
    }
    public function deleteflowertype(Request $req){
        $flowertype = FlowerType::find($req->id);
        $flowertype->delete();
        return redirect('/manageflowertype');
    }
    public function updateCourierSuccess(Request $req,$id){
        $rules = [
            'courier_name' => 'string|min:3',
            'shipping_cost'=> 'numeric',
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $courier = Courier::find($id);
        $courier->courier_name = $req->courier_name;
        $courier->shipping_cost = $req->shipping_cost;
        $courier->save();
        return redirect('/managecourier');
    }
    //If user click add to cart from homepage
    public function insertintocart($flower_id){
        $flo = Flower::find($flower_id);
        $carting = Cart::where('flower_id',$flower_id)->first();
        if($carting!=NULL){
            $carting->cart_quantity = $carting->cart_quantity+1;
            $carting->cart_price = ($carting->cart_price + $flo->flower_price);
        }
        else{
        $carting = new Cart;
        $carting->transaction_id = 0;
        $carting->flower_id = $flower_id;
        $carting->cart_name = $flo->flower_name;
        $carting->cart_image = $flo->flower_image;
        $carting->cart_quantity = 1;
        $carting->cart_price = $flo->flower_price;
        }
        $flo->flower_stock = ($flo->flower_stock - 1);
        $carting->save();
        $flo->save();
        return redirect('/cart');
    }
    //If user click add to cart from flower details
    public function AddtoCart(Request $req, $flower_id){
        $rules = [
            'flower_quantity' => 'required|integer|min:1',
        ];
        $validations = Validator::make($req->all(),$rules);
        if($validations->fails()){
            return back()->withErrors($validations);
        }
        $carting = Cart::where('flower_id',$flower_id)->first();
        $flo = Flower::find($flower_id);
        if($carting!=NULL){
            $carting->cart_quantity = ($carting->cart_quantity+$req->flower_quantity);
            $carting->cart_price = ($carting->cart_price + ($req->flower_quantity * $flo->flower_price));
        }
        else{
        $carting = new Cart;
        $carting->transaction_id = 0;
        $carting->flower_id = $flower_id;
        $carting->cart_name = $flo->flower_name;
        $carting->cart_image = $flo->flower_image;
        $carting->cart_quantity = $req->flower_quantity;
        $carting->cart_price = ($flo->flower_price * $req->flower_quantity);
        }
        $flo->flower_stock = ($flo->flower_stock - $req->flower_quantity);
        $carting->save();
        $flo->save();
        return redirect('/cart');
    }
    public function showCart(){
        $cart = [
            'cart' => Cart::all()
        ];
        $courier = [
            'courier' => Courier::all()
        ];
        return view('cart')->with($cart)->with($courier);
    }
    public function viewdeletecart($cart_id, $flower_id){
        $cart = [
            'cart'=> Cart::where('id',$cart_id)->paginate(10)
        ];
        $flower = [
            'flower' => Flower::where('flower_id',$flower_id)->paginate(10)
        ];
        return view('deletecart')->with($cart)->with($flower);
    }
    public function deleteCart(Request $req){
        $carting = Cart::find($req->id);
        $floting = Flower::find($req->flower_id);
        $floting->flower_stock = ($floting->flower_stock + $req->flower_quantity);
        $floting->save();
        $carting->delete();
        return redirect ('/cart');
    }
    //Checking out from cart confirmation page
    public function checkoutcart($courier_id){
        $courier = [
            'courier'=> Courier::where('id',$courier_id)->paginate(10)
        ];
        $cart = [
            'cart' => Cart::all()
        ];
        return view('checkoutconfirm')->with($courier)->with($cart);
    }
    public function checkedout(Request $req){
            $transhis = new TransactionHistory;
            if(TransactionHistory::find(1)==NULL){
                $transhis->id=1;
            }
            $courier = Courier::where('id',$req->courier_id);
            $transhis->transaction_date = date("Y-m-d h:m:s");
            $transhis->total_price = $req->totalprice;
            $transhis->member_name = Session::get('name');
            $transhis->courier = $req->courier_name;
            $transhis->save();
            
            //Copy data from temporary cart table(Cart) into Cart2 to be saved permanently
            $cart = Cart::all();
            foreach($cart as $c1){
                $cart2 = new Cart2;
                //$cart2->id = $c1->id;
                $cart2->cart_name = $c1->cart_name;
                $cart2->cart_image = $c1->cart_image;
                $cart2->cart_quantity = $c1->cart_quantity;
                $cart2->cart_price = $c1->cart_price;
                $cart2->transaction_id = $transhis->id;
                $cart2->save();        
            }
            Cart::truncate();
            return redirect('/');
    }
    public function transactionhistory(){
        $transaction_history = [
            'transaction_history' => TransactionHistory::all()
        ];
        $cart2 = [
            'cart2' => Cart2::all()
        ];
        return view('transactionhistory')->with($transaction_history)->with($cart2);
    }
    public function viewdeleteuser($user_id){
        $guest =[
            'guest' => Guest::where('id',$user_id)->paginate(10)
        ];
        return view('deleteuser')->with($guest);
    }
    public function viewdeletecourier($courier_id){
        $courier =[
            'courier' => Courier::where('id',$courier_id)->paginate(10)
        ];
        return view('deletecourier')->with($courier);
    }
    public function viewdeleteflower($flower_id){
        $flower =[
            'flower' => Flower::where('flower_id',$flower_id)->paginate(10)
        ];
        return view('deleteflower')->with($flower);
    }
    public function viewdeleteflowertype($flower_type_id){
        $flower_type =[
            'flower_type' => FlowerType::where('id',$flower_type_id)->paginate(10)
        ];
        return view('deleteflowertype')->with($flower_type);
    }
}
