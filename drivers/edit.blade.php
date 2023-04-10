@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Driver Page</div>
  <div class="card-body">
      
      <form action="{{ url('drivers/' .$drivers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$drivers->id}}" />
        <label>Name</label></br>
        <input type="text" name="Name" id="Name" class="form-control" value="{{$drivers->Name}}"></br>
        <label>Contact Number</label></br>
        <input type="text" name="Contact_No" id="Contact_No" class="form-control" value="{{$drivers->Contact_No}}"></br>
        <label>Gender</label></br>
        <input type="text" name="Gender" id="Gender" class="form-control" value="{{$drivers->Gender}}"></br>
        <label>License Expiration Date</label></br>
        <input type="date" name="licenseExpirationDate" id="licenseExpirationDate" class="form-control" value="{{$drivers->licenseExpirationDate}}"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
