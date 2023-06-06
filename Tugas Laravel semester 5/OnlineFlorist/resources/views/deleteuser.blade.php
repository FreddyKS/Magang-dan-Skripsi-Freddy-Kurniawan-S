@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Delete User') }}</center></div>

                <div class="card-body">
                @if(isset($guest))
                    @foreach($guest as $u)
                    @if(Auth::user()->email==$u->email||Auth::user()->email!="admin@admin.com")
                            <center><h5> You're typing 127.0.0.1:8000/viewdeleteuser/{{Auth::user()->id}} in URL </h5><br>
                                <button onclick=location.href='/manageuser' class="btn btn-primary">
                                    {{ __('Go back to Manage User') }}
                                </button>
                        </center>
                            
                            @else
                    <form method="post" action="/deleteuser" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            
                            <label for="id" class="col-md-4 col-form-label text-md-left">{{ __('User Name') }}</label>
                            {{$u->name}}
                            <input id="id" class="col-md-1" type="hidden" name="id" value={{$u->id}} autofocus onKeyDown="return false">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('id'))
                                            {{       $errors->first('id')}}
                                        @endif
                                    </span>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Delete User') }}
                                </button>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
