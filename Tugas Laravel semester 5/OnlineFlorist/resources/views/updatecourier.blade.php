@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
            @if(!Auth::check()||Auth::user()->email!="admin@admin.com")
                    You're typing '127.0.0.1:8000/updatecourier' in URL
                    @else
                <div class="card-header"><center>{{ __('Update Courier') }}</center></div>
@if(isset($courier))
    @foreach($courier as $c)
                <div class="card-body">
                    <form method="post" action="/updatecourier/{{$c->id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="courier_name" class="col-md-4 col-form-label text-md-left">{{ __('Courier Name') }}</label>
                            <input id="courier_name" class="col-md-6 form-control @error('courier_name') is-invalid @enderror" type="text" name="courier_name" value={{$c->courier_name}} autofocus>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('courier_name'))
                                            {{       $errors->first('courier_name')}}
                                        @endif
                                    </span>
                        </div>
                        <div class="form-group row">
                            <label for="shipping_cost" class="col-md-4 col-form-label text-md-left">{{ __('Shipping Cost') }}</label>

                            <div class="col-md-8">
                                <input id="shipping_cost" class="col-md-6 form-control @error('shipping_cost') is-invalid @enderror" type="number" name="shipping_cost" value={{$c->shipping_cost}} min="3000" step="1000">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('shipping_cost'))
                                            {{       $errors->first('shipping_cost')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
                @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
