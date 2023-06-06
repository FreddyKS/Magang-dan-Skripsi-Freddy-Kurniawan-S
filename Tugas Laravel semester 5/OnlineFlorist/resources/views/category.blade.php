@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Category</center></div>

                <div class="card-body">
                @if(!Auth::check())
                    You're typing '127.0.0.1:8000/' in URL
                    @else
                    <center>
                    <form method="get" action="/search" enctype="multipart/form-data">
                        <input type="text" name="search" class="col-md-5 form-control @error('search') is-invalid @enderror" placeholder="Search Flower">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button></center>
                    <h3></h3>
                    </form>
                    @if(isset($flower))        
                        <table>
		                <tr>
                            <th>Flower Image</th>
                            <th>Flower Name</th> 
                            <th>Flower Description</th>
                        </tr>
		                @foreach($flower as $f)
		                    <tr>
                            <td><img src="/{{$f->flower_image}}" width=200 height=150></td>
			                <td>{{ $f->flower_name }}</td>
			                <td>{{ $f->flower_description }}</td>
                            @if($f->flower_stock!=0)
                            <td><button onclick=location.href='/flowerdetails/{{$f->flower_id}}' class="btn btn-primary">
                                    {{ __('Details') }}
                                </button><br></td>
                            <td><button onclick=location.href='/fcart/{{$f->flower_id}}' class="btn btn-primary">
                                    {{ __('Add to Cart') }}
                                </button><br></td>
                                @else
                                    <td><span style="color:red; font-weight:bold"> Out of Stock </span></td>
                                @endif
		                    </tr>
                        @endforeach
                        </table>
                        {{$flower->links()}}
	                @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div> 
@endsection
