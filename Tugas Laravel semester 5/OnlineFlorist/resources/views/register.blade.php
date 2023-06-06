@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Register') }}</center></div>

                <div class="card-body">
                    <form method="post" action="/register" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" class="col-md-6 form-control @error('name') is-invalid @enderror" type="text" name="name" autofocus>
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
                                <input id="email" class="col-md-6 form-control @error('email') is-invalid @enderror" type="email" name="email">
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
                                <input id="phone_number" class="col-md-6 form-control @error('phone_number') is-invalid @enderror" type="text" name="phone_number">
                                <span  class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('phone_number'))
                                            {{       $errors->first('phone_number')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Gender" class="col-md-4 col-form-label text-md-left">{{ __('Gender') }}</label>
                            <div class="col-md-8">
                            {{ __('Male') }}<input type="radio" name="Gender" value="Male"><br>
                                {{ __('Female') }}<input type="radio" name="Gender" value="Female">
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
                                </textarea>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('address'))
                                            {{       $errors->first('address')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="col-md-6 form-control @error('password') is-invalid @enderror" name="password">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('password'))
                                            {{       $errors->first('password')}}
                                        @endif
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="col-md-6 form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('password_confirmation'))
                                            {{       $errors->first('password_confirmation')}}
                                        @endif
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-3 col-form-label text-md-left">{{ __('Image') }}</label>

                            <div class="col-md-9">
                                <input id="image" class="col-md-7 col-form-label text-md-left form-control @error('image') is-invalid @enderror" type="file"name="image">
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
                                    {{ __('Register') }}
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
