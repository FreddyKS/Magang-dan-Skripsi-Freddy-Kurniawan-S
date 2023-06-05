@extends('layouts.app')

@section('content')
<div class="container-fluid" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Queue</center></div>
                <div class="card-body">
                    <div class="links">
                    <button onclick="location.href='/queue/simulation'" class="btn btn-primary btn-block">
                                    {{ __('Simulation') }}
                    </button>
                    <button onclick="location.href='/queue/videotutorial'" class="btn btn-primary btn-block">
                                    {{ __('Video Tutorial') }}
                    </button>
                    <button onclick="location.href='/queue/studycase'" class="btn btn-primary btn-block">
                                    {{ __('Study Case') }}
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
