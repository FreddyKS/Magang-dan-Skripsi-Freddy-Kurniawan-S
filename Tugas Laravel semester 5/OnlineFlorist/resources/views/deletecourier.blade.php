@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Delete Courier') }}</center></div>

                <div class="card-body">
                @if(isset($courier))
                    @foreach($courier as $c)
                    <form method="post" action="/deletecourier" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-left">{{ __('Courier Name') }}</label>
                            {{$c->courier_name}}
                            <input id="id" class="col-md-1" type="hidden" name="id" value={{$c->id}} autofocus onKeyDown="return false">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('id'))
                                            {{       $errors->first('id')}}
                                        @endif
                                    </span>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Delete Courier') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
