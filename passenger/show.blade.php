@extends('Layout')
@section('styles')
<style>
    .container{
        margin-top: 100px;
    }

</style>
@endsection
@section('content')

<div class='container'>
<div class="backArrowimg"><a href="{{url()->previous()}}"><img src="{{URL('image/backarrow.png')}}" alt="Back" style="position:absolute; margin-top: 30px; margin-left: 20%;"></a></div>

<div class="row d-flex justify-content-center">

    <div class="col-md-5"> 
        <div class="card my-5"> 

            <div class="card-header"><h5>Passenger Details</h5></div>
            <div class="card-body">

                <p class="card-text"><b>Passenger ID :</b>{{ $passengers->Passenger_ID }}</p>
                <p class="card-text"><b>Name : </b>{{ $passengers->Name }}</p>
                <p class="card-text"><b>Gender : </b>{{ $passengers->Gender }}</p>
                <p class="card-text"><b>Contact Number : </b>{{ $passengers->Contact_No }}</p>
                <p class="card-text"><b>Email Address : </b>{{ $passengers->Email_Address }}</p>
            </div>
        </div>
    </div>
</div>
</div>
@stop
