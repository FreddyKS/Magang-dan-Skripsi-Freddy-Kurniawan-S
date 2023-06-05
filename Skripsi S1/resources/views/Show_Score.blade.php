@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Show {{ Auth::user()->name }}'s Score</center></div>
                <div class="card-body">  
    <table>
		<tr>
        <th class="th_Score"> Stack </th>
        </tr>
        @foreach($stack as $s)
            <tr>
            <td class="td_Score">
            {{ $s->timestamp }}
	        </td>
            </tr>
            <tr>
            <td class="td_Score">
            {{ $s->score }}
	        </td>
            </tr>
        @endforeach
    </table><br>
    <table>
		<tr>
        <th class="th_Score"> Queue </th>
        </tr>
        @foreach($queue as $q)
            <tr>
            <td class="td_Score">
            {{ $q->timestamp }}
	        </td>
            </tr>
            <tr>
            <td class="td_Score">
            {{ $q->score }}
	        </td>
            </tr>
        @endforeach
    </table><br>
    <table>
		<tr>
        <th class="th_Score"> Struct and Pointers </th>
        </tr>
        @foreach($struct_and_pointers as $sp)
            <tr>
            <td class="td_Score">
            {{ $sp->timestamp }}
	        </td>
            </tr>
            <tr>
            <td class="td_Score">
            {{ $sp->score }}
            </td>
            </tr>
        @endforeach
    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
