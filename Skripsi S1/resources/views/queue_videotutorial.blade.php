@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Queue - Video Tutorial
                <button onclick="location.href='/./queue'" class="btn btn-primary btn-block">
                                    {{ __('Back to Queue homepage') }}
                </button></center></div>
                <iframe width="620" height="515" src="https://www.youtube.com/embed/Q-0X9yXfc5w" frameborder="0" allowfullscreen></iframe><br>
                <iframe width="620" height="515" src="https://www.youtube.com/embed/Hm2m8AgEO4E" frameborder="0" allowfullscreen></iframe>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
