@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Update User') }}</center></div>
            @if(isset($guest))
                <div class="card-body">
                @foreach($guest as $g)
                    @if(Auth::user()->email==$g->email||Auth::user()->email!="admin@admin.com")
                        <center><h5> You're typing 127.0.0.1:8000/updateUser/{{Auth::user()->id}} in URL </h5><br>
                        <button onclick=location.href='/manageuser' class="btn btn-primary">
                                    {{ __('Go back to Manage User') }}
                                </button>
                    </center>
                     @else
                    <form method="post" action="/updateUser/{{$g->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" class="col-md-6 form-control @error('name') is-invalid @enderror" type="text" name="name" value={{$g->name}} autofocus>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('name'))
                                            {{       $errors->first('name')}}
                                        @endif
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" class="col-md-6 form-control @error('email') is-invalid @enderror" type="email" name="email" value={{$g->email}}>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('email'))
                                            {{       $errors->first('email')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-left">{{ __('Phone Number') }}</label>

                            <div class="col-md-8">
                                <input id="phone_number" class="col-md-6 form-control @error('phone_number') is-invalid @enderror" type="text" name="phone_number" value={{$g->phone_number}}>
                                <span  class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('phone_number'))
                                            {{       $errors->first('phone_number')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Gender" class="col-md-4 col-form-label text-md-left">{{ __('Gender') }}</label>
                            <div class="col-md-2">
                            {{ __('Male') }}<input type="radio" name="Gender" value="Male" 
                            @if($g->gender=="Male") checked=true @endif><br>
                                {{ __('Female') }}<input type="radio"name="Gender" value="Female" 
                            @if($g->gender=="Female") checked=true @endif>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('Gender'))
                                            {{       $errors->first('Gender')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-left">{{ __('Address') }}</label>

                            <div class="col-md-8">
                                <textarea class="col-md-5 form-control @error('address') is-invalid @enderror" name="address">
                                {{$g->address}}
                                </textarea>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('address'))
                                            {{       $errors->first('address')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-3 col-form-label text-md-left">{{ __('Image') }}</label>

                            <div class="col-md-9">
                                <input id="image" class="col-md-7 form-control @error('image') is-invalid @enderror" type="file"name="image" value={{$g->image}}>
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
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
