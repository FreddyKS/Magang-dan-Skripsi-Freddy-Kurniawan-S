@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Confirm Checkout Cart</center></div>

                <form method="post" action="/checkout" enctype="multipart/form-data">
                        @csrf
                <div class="card-body">
                    <center>
                    <h3></h3>
                    </form>
                    @if(isset($cart))        
                        <table>
		                <tr>
                            <th>Flower Image</th>
                            <th>Name</th> 
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <?php $totalprice = 0; ?>
                        <!-- Variable to count the total price of the cart -->
		                @foreach($cart as $a)
                            <tr>
                            <td><img src="/{{ $a->cart_image}}" width=200 height=150></td>
			                <td>{{ $a->cart_name }}</td>
			                <td>{{ $a->cart_quantity }}</td>
                            <td>{{ $a->cart_price }}</td>
                            <?php $totalprice = $totalprice+$a->cart_price; ?>
                                @endforeach
                                </table>
                        <div class="form-group row">
                            <label for="courier" class="col-md-4 col-form-label text-md-left">{{ __('') }}</label>
                            <div class="col-md-2">
                            @if(isset($courier))
                                @foreach($courier as $b)
                                Courier : {{$b->courier_name}}-{{$b->shipping_cost}}
                                <input type="hidden" name="courier_name" value={{$b->courier_name}}>
                                @endforeach
                            @endif
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('courier'))
                                            {{       $errors->first('courier')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <span class="col-md-9" style="font-weight:bold">
                        Total Price : {{$totalprice}}
                        <input type="hidden" name="user_email" value={{Auth::user()->email}}>
                        <input type="hidden" name="totalprice" value={{$totalprice}}>
                                    </span>
                            <td><button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Checkout') }}
                                </button><br></td>
		                    </tr>
	                </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div> 
@endsection
