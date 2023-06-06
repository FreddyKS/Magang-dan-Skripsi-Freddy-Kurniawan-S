@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center></center></div>

                <div class="card-body">
                    @if(!Auth::check())
                    You're typing '127.0.0.1:8000/flowerdetails' in URL
                    @else
@if(isset($flower))        
    <table border="1">
		<tr>
        <th>Flower Image</th>
        <th>Flower Name</th> 
        <th>Flower Description</th>
        </tr>
		@foreach($flower as $f)
		<tr>
            <td><img src="/{{ $f->flower_image}}" width=200 height=150></td>
			<td>{{ $f->flower_name }}</td>
			<td>{{ $f->flower_description }}</td>
		</tr>
	</table>
    <form method="post" action="/flowerdetails/{{$f->flower_id}}" enctype="multipart/form-data">
                        @csrf
    <div class="form-group row">
                        Stock : {{$f->flower_stock}}<br>
                            <label for="flower_quantity" class="col-md-4 col-form-label text-md-left">{{ __('Flower Stock') }}</label>

                            <div class="col-md-8">
                                <input id="flower_quantity" class="col-md-6 form-control @error('flower_quantity') is-invalid @enderror" type="number" name="flower_quantity" min=1 max={{$f->flower_stock}}>
                                <span  class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_quantity'))
                                            {{       $errors->first('flower_quantity')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                Price : {{$f->flower_price}}
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add to Cart') }}
                                </button>
                            </div>
                        </div>
                        </form>
                        @endforeach
                        
	<br/>
	                @endif
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
