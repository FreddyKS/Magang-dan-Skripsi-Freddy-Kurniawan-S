@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Manage Flower Type</center></div>

                <div class="card-body">
                    @if(!Auth::check()||Auth::user()->email!="admin@admin.com")
                    You're typing '127.0.0.1:8000/manageflowertype' in URL
                    @else
                    <center>
                    <button onclick=location.href='/insertFlowerType' class="btn btn-primary">
                                    {{ __('Insert Flower Type') }}
                                </button><br>
                    <form method="get" action="/manageflowertype/search" enctype="multipart/form-data">
                    <input type="text" name="search" class="col-md-5 form-control @error('search') is-invalid @enderror" placeholder="Search Flower Type">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button><br>
                    
                    <h3></h3>
                    </form>
@if(isset($flowertype))        
    <table>
		<tr>
        <th>ID</th>
        <th>Flower Type</th>
        <th></th> 	
        </tr>
		@foreach($flowertype as $fi)
		<tr>
			<td>{{ $fi->id }}</td>
			<td>{{ $fi->flower_type }}</td>
            <td><button onclick=location.href='/updateFlowerType/{{$fi->id}}' class="btn btn-primary">
                                    {{ __('Update') }}
            </button><br>
            <button onclick=location.href='/viewdeleteflowertype/{{$fi->id}}' class="btn btn-primary">
                                    {{ __('Remove') }}
            </button><br></td>
		</tr>
		@endforeach
    </table>
    {{$flowertype->links()}}
                @endif
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
