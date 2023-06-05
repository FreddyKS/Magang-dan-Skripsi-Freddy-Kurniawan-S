@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center>
                <div class="card-header"><center>Stack - Simulation
                <button onclick="location.href='/./stack'" class="btn btn-primary btn-block">
                                    {{ __('Back to Stack homepage') }}
                </button>
                <?php $alert = $_GET['alert'] ?? $alert = ''; ?>
                <b> <!-- {{ $_GET['alert'] ?? '' }}--> {{ $alert }} </b>
                 </center></div>

                <div class="card-body">
                    <div>
                    <table>
                    <tr>
                    <td>
                    <form method="post" action="/insertstack" enctype="multipart/form-data" class="row justify-content-center">
                        @csrf
                        <div class="form-group row">
                                <center>
                                <input id="data" class="col-md-15 form-control @error('data') is-invalid @enderror" type="text" name="data" placeholder="Insert data into Stack" autofocus Required="True" >
                                <!-- @error('data')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror -->
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Push') }}
                                </button>
                                </center>
                            </div>
                        </div>
                        </form>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <form method="post" action="/deletestack" enctype="multipart/form-data" class="row justify-content-center">
                            @csrf
                        <div class="form-group row">
                            <center>
                            @if(isset($top))
                                <input id="data2" class="col-md-15 form-control @error('data2') is-invalid @enderror" type="text" name="data" value="{{ $top->data }}" autofocus disabled>
                            @else
                                <input id="data2" class="col-md-15 form-control @error('data2') is-invalid @enderror" type="text" name="data" value="" autofocus disabled>
                            @endif<div class="col-md-1"></div>
                                @if(isset($top))
                                <button type="submit" class="btn btn-primary btn-block">
                                    Pick <img src="/../storage/Images/Stack_Box.png" style="width:25px;height:25px">{{ $top->data }} (Pop)
                                </button>
                                @else
                                <button type="submit" class="btn btn-primary btn-block" disabled>
                                    The stack is empty
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
    <table>
		<tr>
        <th></th>
        </tr>
        <tr>
            <td>
            <?php $count=0; ?>
        @foreach($data_structures as $f)
        <img src="/../storage/Images/Stack_Box.png" style="width:50px;height:50px">
            {{ $f->data }}
            @if($f->id==$top->id)
               <i> (TOP) </i>
            @endif
            <br>
            <?php ++$count; ?>
		@endforeach
        @if($count==0)
        <i> -- TOP == NULL -- (NULL) </i>
        @else
        <i> -- this is floor -- (NULL)</i>
        @endif 
            </td>
            <td>
            @if($alert=="Push Success")
            <b> Push syntax : </b> <br>
            @if($count==1)
                top=current;<br>
                top->next = NULL;
            @elseif($count>1)
                current->next=top;<br>
		        top=current;<br>
                top->next = NULL;
            @else
                <i> TOP = NULL </i><br>
            @endif
            @elseif($alert=="Pop Success")
            <b> Pop Syntax : </b> <br>
            @if($count>0)
                top=top->next;<br>
		        free(current);
            @else
                <i> TOP = NULL </i><br>
            @endif
            @else
            @endif
                </td>
        </tr>
    </table>
                @endif
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
