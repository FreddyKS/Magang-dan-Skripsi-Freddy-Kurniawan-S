@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card">
                <div class="card-header"><center>Manage User</center></div>

                <div class="card-body">
                    @if(!Auth::check()||Auth::user()->email!="admin@admin.com")
                    You're typing '127.0.0.1:8000/manageuser' in URL
                    @else
                    <h3></h3>
@if(isset($guest))        
    <table>
        <tr>
        <th>Profile Picture</th>
        <th>Name</th> 
        <th>Email</th>
        <th>Phone Number</th> 
        <th>Gender</th>
        <th>Address</th>
        <th></th>	
        </tr>
		@foreach($guest as $s)
		<tr>
			<td><img src="/{{ $s->image }}" width=200 height=150></td>
			<td>{{ $s->name }}</td>
			<td>{{ $s->email }}</td>
			<td>{{ $s->phone_number }}</td>
            <td>{{ $s->gender}}</td>
            <td>{{ $s->address}}</td>
            <td><button onclick=location.href='/updateUser/{{$s->id}}' class="btn btn-primary" 
            @if(Auth::user()->email==$s->email) disabled @endif>
                                    {{ __('Update') }}
            </button><br>
            <button onclick=location.href='/viewdeleteuser/{{$s->id}}' class="btn btn-primary"
            @if(Auth::user()->email==$s->email) disabled @endif>
                                    {{ __('Remove') }}
            </button><br></td>
		</tr>
		@endforeach
	</table>
	                @endif
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
