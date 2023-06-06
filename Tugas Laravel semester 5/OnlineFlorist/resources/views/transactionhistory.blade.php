@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Transaction History</center></div>

                <div class="card-body">
                    @if(!Auth::check()||Auth::user()->email!="admin@admin.com")
                    You're typing '127.0.0.1:8000/managecourier' in URL
                    @else 
                    _______________________________________________________________________________________________
    <br>
@if(isset($transaction_history))        
    @foreach($transaction_history as $trhis)
    <span> Transaction ID : {{$trhis->id}} </span> <br>
    <span> Transaction Date : {{$trhis->transaction_date}} </span> <br>
    <span> Member Name : {{$trhis->member_name}} </span> <br>
    <span> Courier : {{$trhis->courier}} </span> <br><br>
    <table>
		<tr>
        <th>Picture</th>
        <th>Name</th> 
        <th>Quantity</th>
        <th>Price</th>
        </tr>
        @if(isset($cart2))
		@foreach($cart2 as $c2)
            @if($c2->transaction_id==$trhis->id)
		<tr>
			<td><img src="/{{ $c2->cart_image }}" width=200 height=150></td>
			<td>{{ $c2->cart_name }}</td>
            <td>{{$c2->cart_quantity}}</td>
            <td>{{$c2->cart_price}}</td>
		</tr>
        @endif
		@endforeach
        @endif
    </table><br>
    <b>Total Price : {{$trhis->total_price}}</b>
    <br>
    _______________________________________________________________________________________________
    <br>
    @endforeach
    @endif
                 @endif 
                 </center>  
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
