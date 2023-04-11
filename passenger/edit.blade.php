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
<div class="row d-flex justify-content-center">
    <div class="col-md-5"> 
            <div class="card my-5"> 

        <div class="card-header">Edit</div>
        <div class="card-body">
            
              @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            <form action="{{ url('Passenger/'.$passengers->Passenger_ID) }}" method="post">
                {!! csrf_field() !!}
                 @method("PATCH")
                 <label>Passenger ID :</label></br>
                 <input type="text" name="id" id="id" value="{{$passengers->Passenger_ID}}" disabled></br></br>
                <label>Name :</label></br>
                <input type="text" name="Name" id="Name" value="{{$passengers->Name}}" class="form-control"></br>
                <label>Contact Number :</label></br>
                <input type="tel" name="Contact_No" id="Contact_No" pattern="[0-9]{3}-[0-9]{8}" value="{{$passengers->Contact_No}}" class="form-control"></br>
                <label>Email Address :</label></br>
                <input type="email" name="Email_Address" id="Email_Address" placeholder="name@example.com" value="{{$passengers->Email_Address}}" class="form-control"></br>
                
                <input type="submit" value="Update" class="btn btn-success">
                <a href="{{url()->previous()}}" class="btn btn-secondary">Cancel</a><br/>
            </form>

        </div>
    </div>
</div>  
</div>
</div>
@stop