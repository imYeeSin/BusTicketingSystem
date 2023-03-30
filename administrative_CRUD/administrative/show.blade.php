@extends('Layout')
@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-md-5"> 
        <div class="card my-5"> 

            <div class="card-header">Administrative Details</div>
            <div class="card-body">

                    <h5 class="card-title">Staff ID : {{ $administrative->id }}</h5>
                    <p class="card-text">Name : {{ $administrative->Name }}</p>
                    <p class="card-text">Gender : {{ $administrative->Gender }}</p>
                    <p class="card-text">Contact Number : {{ $administrative->Contact_No }}</p>
                    <p class="card-text">Email Address : {{ $administrative->Email_Address }}</p>
                    <p class="card-text">Designation : {{ $administrative->Designation }}</p>
                </div>
            </div>
        </div>
    </div>

@stop
