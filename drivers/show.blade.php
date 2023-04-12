
<!-- Name: Wong Yu Sheng -->
@extends('layout')

@section('styles')
<style>
    body {
        background-image: url('https://thumbs.dreamstime.com/b/tourist-white-bus-road-highway-very-fast-driving-touristic-travel-concept-d-rendering-109776101.jpg');
        background-size: cover;
    }


    .card{
        width: 40%;
        opacity: 0.9;
        margin-bottom: 50px;
        margin-top: 100px;
    }

    .card-footer {
        display: flex;
        justify-content: flex-end;
    }

    .card-container {
        display: flex;
        align-items: center;
    }
</style>
@endsection

@section('content')
<div class="container" style="margin-top: 55px;">
    <div class="card">
        <div class="card-header d-flex justify-content-between" style="font-weight:bold; background-color: lightskyblue; color: black">Driver Page</div>
        

            <div class="card-body">
                <h5 class="card-title">Driver ID : {{ $driver->id }}</h5>
                <p class="card-text">Driver Name : {{ $driver->Name }}</p>
                <p class="card-text">Contact Number : {{ $driver->Contact_No }}</p>
                <p class="card-text">Gender : {{ $driver->Gender }}</p>
                <p class="card-text">License Expiration Date : {{ $driver->licenseExpirationDate }}</p>
            </div>

            <div class="card-footer">
            <a href="{{url('drivers')}}" class="btn btn-secondary">Back</a>
        </div>

      
    </div>
</div>
@endsection