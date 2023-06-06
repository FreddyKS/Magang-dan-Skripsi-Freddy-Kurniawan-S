@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Insert Flower Type') }}</center></div>

                <div class="card-body">
                    <form method="post" action="/insertFlowerType" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="flower_type" class="col-md-4 col-form-label text-md-left">{{ __('Flower Type') }}</label>
                            <input id="flower_type" class="col-md-6 form-control @error('flower_type') is-invalid @enderror" type="text" name="flower_type" autofocus>
                                <span class="col-md-9" style="color:red; font-weight:bold">
                                        @if($errors->has('flower_type'))
                                            {{       $errors->first('flower_type')}}
                                        @endif
                                    </span>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Insert Flower Type') }}
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
