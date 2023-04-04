@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Driver Page</div>
  <div class="card-body">
      
      <form action="{{ url('drivers') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="Name" id="Name" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="Contact_No" id="Contact_No" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="Gender" id="Gender" class="form-control"></br>
        <label>License Expiration Date</label></br>
        <input type="date" name="licenseExpirationDate" id="licenseExpirationDate" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
