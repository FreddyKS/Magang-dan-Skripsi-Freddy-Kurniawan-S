@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Delete Flower Type') }}</center></div>

                <div class="card-body">
                @if(isset($flower_type))
                    @foreach($flower_type as $ft)
                    <form method="post" action="/deleteflowertype" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="delete" class="col-md-4 col-form-label text-md-left">{{ __('Flower Type') }}</label>
                            {{$ft->flower_type}}
                            <input id="delete" class="col-md-1" type="hidden" name="id" value={{$ft->id}} autofocus onKeyDown="return false">
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('id'))
                                            {{       $errors->first('id')}}
                                        @endif
                                    </span>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Delete Flower Type') }}
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
