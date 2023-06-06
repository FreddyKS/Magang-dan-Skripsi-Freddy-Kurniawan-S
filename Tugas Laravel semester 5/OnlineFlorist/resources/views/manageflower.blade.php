@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Manage Flowers</center></div>

                <div class="card-body">
                    @if(!Auth::check()||Auth::user()->email!="admin@admin.com")
                    You're typing '127.0.0.1:8000/manageflower' in URL
                    @else
                    <center>
                    <button onclick=location.href='/insertFlower' class="btn btn-primary">
                                    {{ __('Insert Flower') }}
                                </button><br>
                    <form method="get" action="manageflower/search" enctype="multipart/form-data">
                    <input type="search" class="col-md-5 form-control @error('search') is-invalid @enderror" placeholder="Search Flower">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button><br>
                    </center>
                    </form>
                    <h3></h3>
@if(isset($flower))        
    <table>
		<tr>
        <th>Flower Name</th> 
        <th>Flower Description</th>
        <th>Flower Price</th> 
        <th>Flower Stock</th>
        <th>Flower Image</th>
        <th></th>
		</tr>
		@foreach($flower as $f)
		<tr>
			<td>{{ $f->flower_name }}</td>
			<td>{{ $f->flower_description }}</td>
			<td>{{ $f->flower_price }}</td>
			<td>{{ $f->flower_stock }}</td>
            <td><img src="/{{ $f->flower_image}}" width=200 height=150></td>
            <td><button onclick=location.href='/updateFlower/{{$f->flower_id}}' class="btn btn-primary">
                                    {{ __('Update') }}
            </button><br></td>
            <td><button onclick=location.href='/viewdeleteflower/{{$f->flower_id}}' class="btn btn-primary">
                                    {{ __('Remove') }}
            </button><br></td>
		</tr>
		@endforeach
    </table>
    {{$flower->links()}}
                 @endif
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
