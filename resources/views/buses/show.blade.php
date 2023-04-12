
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
        opacity: 0.85;
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
        <div class="card-header d-flex justify-content-between" style="font-weight:bold; background-color: blue; color: white">Bus Page</div>

        <div class="card-body">
            <h5 class="card-title">Bus ID : {{ $bus->id }}</h5>
            <h5 class="card-title">Bus Plate Number : {{ $bus->plateNumber }}</h5>
            <p class="card-text">Bus Model : {{ $bus->model }}</p>
            <p class="card-text">Purchase Date : {{ $bus->purchaseDate }}</p>
            <p class="card-text">Road Tax Expiration Date : {{ $bus->roadTaxExpirationDate }}</p>
            <p class="card-text">Bus Type : {{ $bus->busType }}</p>
            <p class="card-text">Total Seats : {{ $bus->seat }}</p>
        </div>

        <div class="card-footer">
            <a href="{{url('buses')}}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
