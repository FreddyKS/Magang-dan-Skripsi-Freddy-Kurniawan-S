@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::check())
                    You're logged in as {{Auth::user()->email}}
                    <br><a href="/"> OK </a> 
                    @else
                    You're typing '127.0.0.1:8000/category' in URL
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection