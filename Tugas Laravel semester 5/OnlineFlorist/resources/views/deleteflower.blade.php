@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Delete Flower') }}</center></div>

                <div class="card-body">
                    <form method="post" action="/deleteflower" enctype="multipart/form-data">
                        @csrf
                    @if(isset($flower))
                    @foreach($flower as $f)
                        <div class="form-group row">
                            <label for="delete" class="col-md-4 col-form-label text-md-left">{{ __('Flower Name') }}</label>
                            {{$f->flower_name}}
                            <input id="delete" class="col-md-1" type="hidden" name="id" value={{$f->flower_id}} autofocus onKeyDown="return false">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('id'))
                                            {{       $errors->first('id')}}
                                        @endif
                                    </span>
                        </div>
                        @endforeach
                        @endif
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Delete Flower') }}
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
