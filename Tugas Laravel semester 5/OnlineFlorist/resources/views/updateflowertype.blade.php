@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
            @if(!Auth::check()||Auth::user()->email!="admin@admin.com")
                    You're typing '127.0.0.1:8000/updateflowertype' in URL
                    @else
                <div class="card-header"><center>{{ __('Update Flower Type') }}</center></div>
@if(isset($flowertype))
    @foreach($flowertype as $ft)
                <div class="card-body">
                    <form method="post" action="/updateFlowerType/{{$ft->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-left">{{ __('id') }}</label>  
                            <input id="id" class="col-md-6 form-control @error('id') is-invalid @enderror" type="text" name="id" value={{$ft->id}} disabled>
                        </div>
                        <div class="form-group row">
                            <label for="flower_type" class="col-md-4 col-form-label text-md-left">{{ __('Flower Type') }}</label>
                            <input id="flower_type" class="col-md-6 form-control @error('flower_type') is-invalid @enderror" type="text" name="flower_type" value={{$ft->flower_type}} autofocus>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_type'))
                                            {{       $errors->first('flower_type')}}
                                        @endif
                                    </span>
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
