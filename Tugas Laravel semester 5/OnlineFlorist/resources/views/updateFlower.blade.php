@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Update Flower') }}</center></div>
                @if(!Auth::check()||Auth::user()->email!="admin@admin.com")
                    You're typing '127.0.0.1:8000/updateflower' in URL
                    @else
                        @if(isset($flower))
                <div class="card-body">
                            @foreach($flower as $f)
                    <form method="post" action="/updateFlower/{{$f->flower_id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="flower_name" class="col-md-4 col-form-label text-md-left">{{ __('Flower Name') }}</label>

                            <div class="col-md-8">
                                <input id="flower_name" class="col-md-6 form-control @error('flower_name') is-invalid @enderror" type="text" name="flower_name" value={{$f->flower_name}}>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_name'))
                                            {{       $errors->first('flower_name')}}
                                        @endif
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="flower_price" class="col-md-4 col-form-label text-md-left">{{ __('Flower Price') }}</label>

                            <div class="col-md-8">
                                <input id="flower_price" class="col-md-6 form-control @error('flower_price') is-invalid @enderror" type="number" name="flower_price" min="10000" max="200000" step="1000" value={{$f->flower_price}}>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_price'))
                                            {{       $errors->first('flower_price')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="flower_stock" class="col-md-4 col-form-label text-md-left">{{ __('Flower Stock') }}</label>

                            <div class="col-md-8">
                                <input id="flower_stock" class="col-md-6 form-control @error('flower_stock') is-invalid @enderror" type="number" name="flower_stock" min="0" value={{$f->flower_stock}}>
                                <span  class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_stock'))
                                            {{       $errors->first('flower_stock')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="flower_type" class="col-md-4 col-form-label text-md-left">{{ __('Flower Type') }}</label>
                            <div class="col-md-2">
                            <select name="flower_type" class="form-control @error('flower_type') is-invalid @enderror">
                            @if(isset($flower_type))
                                @foreach($flower_type as $ft)
                                <option value={{$ft->flower_type}}> {{$ft->flower_type}} </option>
                                @endforeach
                            @endif
                            </select>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_type'))
                                            {{       $errors->first('flower_type')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="flower_description" class="col-md-4 col-form-label text-md-left">{{ __('Flower Description') }}</label>

                            <div class="col-md-8">
                                <textarea class="col-md-5 form-control @error('flower_description') is-invalid @enderror" name="flower_description">
                                    {{$f->flower_description}}
                                </textarea>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_description'))
                                            {{       $errors->first('flower_description')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="flower_image" class="col-md-3 col-form-label text-md-left">{{ __('Image_url') }}</label>

                            <div class="col-md-9">
                                <input id="flower_image" class="col-md-7 form-control @error('image') is-invalid @enderror" type="file"name="flower_image">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('image'))
                                            {{       $errors->first('image')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Flower') }}
                                </button>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
