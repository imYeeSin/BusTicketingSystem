
<!-- Name: Cho Yee Sin -->

@extends('layout')

@section('styles')
<style>
    body {
        background-image: url('https://www.mantruckandbus.com/fileadmin/_processed_/a/5/csm_FT_04-30_Header_455cea54de.jpg');
        background-size: cover;
    }
    
    .card{
        width: 40%;
        margin-bottom: 50px;
        margin-top: 100px;
    }
    
    .card-footer {
        display: flex;
        justify-content: flex-end;
    }
</style>
@endsection

@section('content')
<div class="container" style="margin-top: 55px;">
    <div class="card">
        <div class="card-header d-flex justify-content-between" style="font-weight:bold; background-color: blue; color: white">Bus Page</div>
        <div class="card-body">
            
        <h5 class="card-title">Bus Schedule ID : {{ $schedule->id }}</h5>
        <p class="card-text">Departure Time : {{ $schedule->departureTime }}</p>
        <p class="card-text">Arrival Time : {{ $schedule->arrivalTime }}</p>
        <p class="card-text">Pick Up Point : {{ $schedule->pickUpPoint }}</p>
        <p class="card-text">Drop Off Point : {{ $schedule->dropOffPoint }}</p>
        <p class="card-text">Stop Point : {{ $schedule->stopPoint }}</p>
        <p class="card-text">Bus ID : {{ $schedule->Bus_ID }}</p>
        <p class="card-text">Driver ID : {{ $schedule->Driver_ID }}</p>
        <p class="card-text">Price : {{ number_format($schedule->price,2) }}</p>
            
        </div>
        <div class="card-footer">
            <a href="{{url('schedules')}}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
