@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Struct and Pointers</center></div>
                <div class="card-body">
                    <div class="links">
                    <button onclick="location.href='/structandpointers/videotutorial'" class="btn btn-primary btn-block" target=_blank>
                                    {{ __('Video Tutorial') }}
                    </button>
                    <!-- <button onclick="location.href='/storage/Images/MultimediaStructAndPointers/Struct And Pointers Video Tutorial.html'" class="btn btn-primary btn-block" target=_blank>
                                    {{ __('Video Tutorial') }}
                    </button> -->
                    <button onclick="location.href='/structandpointers/studycase'" class="btn btn-primary btn-block">
                                    {{ __('Study Case') }}
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
