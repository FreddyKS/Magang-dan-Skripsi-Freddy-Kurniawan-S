@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Struct and Pointers - Video Tutorial
                <button onclick="location.href='/./structandpointers'" class="btn btn-primary btn-block">
                                    {{ __('Back to Struct and Pointers homepage') }}
                </button></center></div>
                <iframe width="620" height="515" src="https://www.youtube.com/embed/Vqi4bENW6-4" frameborder="0" allowfullscreen></iframe>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
