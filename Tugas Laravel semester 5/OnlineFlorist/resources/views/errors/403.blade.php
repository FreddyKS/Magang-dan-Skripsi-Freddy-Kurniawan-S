@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><center>{{ __('Forbidden') }}</center></div>
                <center>
                <div class="card-body">
                                <h5> You are not Authorized to Access this Page </h5>
                                <button onclick=location.href='/' class="btn btn-primary">
                                    {{ __('Return to Homepage') }}
                                </button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
