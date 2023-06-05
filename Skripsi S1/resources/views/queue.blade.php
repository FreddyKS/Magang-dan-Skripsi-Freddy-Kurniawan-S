@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Queue - Simulation
                <button onclick="location.href='/./queue'" class="btn btn-primary btn-block">
                                    {{ __('Back to Queue homepage') }}
                </button></center>
                <?php $alert = $_GET['alert'] ?? $alert = ''; ?>
                <b> <!-- {{ $_GET['alert'] ?? '' }} --> {{ $alert }} </b>
            </div>
                <div class="card-body">
                    <div>
                    <table>
                    <tr>
                    <td>
                    <form method="post" action="/insertqueue" enctype="multipart/form-data" class="row justify-content-center">
                        @csrf

                        <div class="form-group row">
                               <center>
                               <input id="data" class="col-md-15 form-control @error('data') is-invalid @enderror" type="text" name="data" placeholder="Insert data into Queue" autofocus Required="True">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Enqueue') }}
                                </button>
                                @error('data')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </center>
                            </div>
                        </div>
                        </form>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <form method="post" action="/deletequeue" enctype="multipart/form-data" class="row justify-content-center">
                            @csrf
                        <div class="form-group row">
                            <center>
                            @if(isset($front))
                                <input id="data2" class="col-md-15 form-control @error('data2') is-invalid @enderror" type="text" name="data" value="{{ $front->data }}" autofocus disabled>
                            @else
                            <input id="data2" class="col-md-15 form-control @error('data2') is-invalid @enderror" type="text" name="data" value="" autofocus disabled>
                            @endif
                            <div class="col-md-1"></div>
                                @if(isset($front))
                                <button type="submit" class="btn btn-primary btn-block">
                                    Serve <img src="/../storage/Images/Queue_person.png" style="width:25px;height:25px"> {{ $front->data }} (Dequeue)
                                </button>
                                @else
                                <button type="submit" class="btn btn-primary btn-block" disabled>
                                    The queue is Empty
                                </button>
                                @endif
                                </center>
                        </div>
                    </form>
                    </div>
                    </td>
                    </tr>
                    </table>
                    <br><br>
@if(isset($data_structures))        
    <center>
    <table>
		<tr>
        </tr>
        <tr>
			<td>
            <img src="/../storage/Images/Queue_receptionist.png" style="width:50px;height:50px">
            <b> Receptionist </b><br>
            <?php $count = 0; ?>
        @foreach($data_structures as $f)
        <img src="/../storage/Images/Queue_person.png" style="width:50px;height:50px">
            {{ $f->data }}
            @if($f->id==$front->id)
               <i> (FRONT) </i>
            @endif
            @if($f->id==$rear->id)
               <i> (REAR) </i>
            @endif
            <?php ++$count; ?>
            <br>
        @endforeach
        @if($count==0)
            <i> -- FRONT == NULL | REAR == NULL -- (NULL) </i>
        @else
            <i> -- this is the end of the queue -- (NULL)</i>
        @endif
            </td>
            <td>
            @if($alert=="Enqueue Success")
            <b> Enqueue Syntax : </b> <br>
            @if($count==1)
                front=rear=current<br>
                rear->next = NULL;
            @elseif($count>1)
                rear->next=current;<br>	
                rear=current;<br>
                rear->next = NULL;
            @else
                <i> FRONT = NULL | REAR = NULL <br></i>
            @endif
            @elseif($alert=="Dequeue Success")
            <b> Dequeue Syntax : </b> <br>
            @if($count>1)
                front=front->next;<br>
                free(current);
            @else
                <i> FRONT = NULL | REAR = NULL <br></i>
            @endif
            @else
            @endif
                   </td> 
        </tr>
        <tr>
        </tr>
    </table>
    </center>
                    @endif
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
