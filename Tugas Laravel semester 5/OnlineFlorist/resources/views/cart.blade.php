@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Cart</center></div>

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
                        <!-- Variable to count the total price of the cart -->
                        <?php $totalprice = 0; ?>
		                @foreach($cart as $a)
		                    <tr>
                            <td><img src="/{{ $a->cart_image}}" width=200 height=150></td>
			                <td>{{ $a->cart_name }}</td>
			                <td>{{ $a->cart_quantity }}</td>
                            <td>{{ $a->cart_price }}</td>
                            <?php $totalprice = $totalprice+$a->cart_price; ?>
                            <td><button onclick=location.href='/deletecart/{{$a->id}}/{{$a->flower_id}}' class="btn btn-primary">
                                    {{ __('Remove') }}
                                </button></td>
                                
                                @endforeach
                                </table>
                        <div class="form-group row">
                            <label for="courier" class="col-md-4 col-form-label text-md-left">{{ __('Courier') }}</label>
                            <div class="col-md-2">
                            <select class="form-control @error('courier') is-invalid @enderror" name="courier">
                            @if(isset($courier))
                                @foreach($courier as $b)
                                <option value={{$b->courier_name}}> {{$b->courier_name}}-{{$b->shipping_cost}} </option>
                                @endforeach
                            @endif
                            </select>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('courier'))
                                            {{       $errors->first('courier')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <span class="col-md-9" style="font-weight:bold">
                        Total Price : {{$totalprice}}
                                    </span>
                            <td><button onclick=location.href='/cart/{{$b->id}}' class="btn btn-primary" @if($totalprice==0) disabled @endif>
                                    {{ __('Checkout') }}
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
