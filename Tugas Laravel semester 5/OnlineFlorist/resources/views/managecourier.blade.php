@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Manage Courier</center></div>

                <div class="card-body">
                    @if(!Auth::check()||Auth::user()->email!="admin@admin.com")
                    You're typing '127.0.0.1:8000/managecourier' in URL
                    @else
                    <button onclick=location.href='/insertCourier' class="btn btn-primary">
                                    {{ __('Insert Courier') }}
                                </button><br>
                <form method="get" action="/managecourier/search" enctype="multipart/form-data">    
                    <input type="text" name="search" class="col-md-5 form-control @error('search') is-invalid @enderror" placeholder="Search Courier">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Search') }}
                                </button><br>
                    <h3></h3>
                    </form>
@if(isset($courier))        
    <table>
		<tr>
        <th>Name</th>
        <th>Shipping Cost</th> 
        <th></th>
        </tr>
		@foreach($courier as $c)
		<tr>
			<td>{{ $c->courier_name }}</td>
			<td>{{ $c->shipping_cost }}</td>
            <td><button onclick=location.href='/updatecourier/{{$c->id}}' class="btn btn-primary">
                                    {{ __('Update') }}
            </button><br></td>
            <td><button onclick=location.href='/viewdeletecourier/{{$c->id}}' class="btn btn-primary">
                                    {{ __('Remove') }}
            </button><br></td>
		</tr>
		@endforeach
    </table>
    {{$courier->links()}}
                 @endif
                 @endif 
                 </center>  
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
