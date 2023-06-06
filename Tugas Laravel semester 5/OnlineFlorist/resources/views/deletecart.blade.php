@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Delete Cart') }}</center></div>

                <div class="card-body">
                    <form method="post" action="/deletecart" enctype="multipart/form-data">
                        @csrf
                    @if(isset($cart))
                    @foreach($cart as $ca)
                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-left">{{ __('Flower Name') }}</label>
                            {{$ca->cart_name}}
                            <input id="id" class="col-md-1" type="hidden" name="id" value={{$ca->id}} autofocus onKeyDown="return false">
                            <input id="id" class="col-md-1" type="hidden" name="flower_quantity" value={{$ca->cart_quantity}} autofocus onKeyDown="return false">    
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('id'))
                                            {{       $errors->first('id')}}
                                        @endif
                                    </span>
                        </div>
                        <div class="form-group row">
                            <label for="flower_id" class="col-md-4 col-form-label text-md-left">{{ __('Flower ID') }}</label>
                            {{$ca->flower_id}}
                            <input id="flower_id" class="col-md-1" type="hidden" name="flower_id" value={{$ca->flower_id}} onKeyDown="return false">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_id'))
                                            {{       $errors->first('flower_id')}}
                                        @endif
                                    </span>
                        </div>
                        @endforeach
                        @endif
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Delete Cart') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
