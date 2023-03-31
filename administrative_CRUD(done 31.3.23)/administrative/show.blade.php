@extends('Layout')
@section('content')


<div class="backArrowimg"><a href="{{url()->previous()}}"><img src="{{URL('image/backarrow.png')}}" alt="Back" style="margin-top: 30px; margin-left: 20%;"></a></div>

<div class="row d-flex justify-content-center">
    
    <div class="col-md-5"> 
        <div class="card my-5"> 

            <div class="card-header"><h5>Administrative Details</h5></div>
            <div class="card-body">

                    <p class="card-title">Staff ID : {{ $administrative->id }}</p>
                    <p class="card-text">Username : {{ $administrative->User_Name }}</p>
                    <p class="card-text">Name : {{ $administrative->Name }}</p>
                    <p class="card-text">Gender : {{ $administrative->Gender }}</p>
                    <p class="card-text">Contact Number : {{ $administrative->Contact_No }}</p>
                    <p class="card-text">Email Address : {{ $administrative->Email_Address }}</p>
                </div>
            </div>
        </div>
    </div>

@stop
