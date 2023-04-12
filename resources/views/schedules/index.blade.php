
<!-- Name: Cho Yee Sin -->

@extends('layout')

@section('styles')
<style>
    body {
        background-image: url('https://media.thetab.com/blogs.dir/9/files/2022/01/271096439-476977270441713-76390340117812183-n.jpg');
        background-size: cover;
    }

    .card{
        margin-bottom: 50px;
        opacity: 0.9;
    }

    #addSchedule{
        background-color:lightskyblue;
        border: lightskyblue 7px outset;
        color: black;
        font-weight: bold;
        padding: 7px;
    }

    #addSchedule:hover{
        background-color:gray;
        border: gray 7px outset;
        color: white;
        font-weight: bold;
        padding: 7px;
    }

    #alert{
        margin-top: 70px;
    }

</style>
@endsection

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@if (session('flash_message'))
<div class="alert alert-success" id="alert">
    {{ session('flash_message') }}
</div>
@endif

<script>
$(document).ready(function () {
    $('.alert').delay(2000).fadeOut(1000);
});
</script>

<div class="container-fluid" style="margin-top: 95px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-weight:bold; background-color: lightskyblue">Bus Schedule</div>
                <div class="card-body">
                    <a href="{{ url('/schedules/create') }}" class="btn btn-success btn-sm" title="Add New Bus Schedule" id="addSchedule">
                        <i class="fa fa-plus" aria-hidden="true"></i> New Bus Schedule
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Schedule ID</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Pick Up Point</th>
                                    <th>Drop Off Point</th>
                                    <th>Stop Point</th>
                                    <th>Bus ID</th>
                                    <th>Driver ID</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($schedules as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->departureTime }}</td>
                                    <td>{{ $item->arrivalTime }}</td>
                                    <td>{{ $item->pickUpPoint }}</td>
                                    <td>{{ $item->dropOffPoint }}</td>
                                    <td>{{ $item->stopPoint }}</td>
                                    <td>{{ $item->Bus_ID }}</td>
                                    <td>{{ $item->Driver_ID }}</td>
                                    <td>{{ number_format($item->price, 2) }}</td>
                                    <td>
                                        <a href="{{ url('/schedules/' . $item->id) }}" title="View Bus Schedule"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                        <a href="{{ url('/schedules/' . $item->id . '/edit') }}" title="Edit Bus Schedule"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>
                                        <form method="POST" action="{{ url('/schedules/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> 
                                            </button>
                                        </form>


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection