@extends('Layout')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-5"> 
            <div class="card my-5"> 

        <div class="card-header">Edit</div>
        <div class="card-body">
            
              @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <form action="{{ url('Administrative/'.$administrative->id) }}" method="post">
                {!! csrf_field() !!}
                 @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$administrative->id}}" />
                <label>Username</label></br>
                <input type="text" name="User_Name" id="User_Name" value="{{$administrative->User_Name}}" class="form-control"></br>
                <label>Name</label></br>
                <input type="text" name="Name" id="Name" value="{{$administrative->Name}}" class="form-control"></br>
                <label>Contact Number</label></br>
                <input type="tel" name="Contact_No" id="Contact_No" pattern="[0-9]{3}-[0-9]{8}" value="{{$administrative->Contact_No}}" class="form-control"></br>
                <label>Email Address</label></br>
                <input type="email" name="Email_Address" id="Email_Address" placeholder="name@example.com" value="{{$administrative->Email_Address}}" class="form-control"></br>
                
                <input type="submit" value="Update" class="btn btn-success">
                <a href="{{url()->previous()}}" class="btn btn-secondary">Cancel</a><br/>
            </form>

        </div>
    </div>
</div>  
</div>
@stop