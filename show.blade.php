@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Driver Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Driver ID : {{ $driver->id }}</h5>
        <p class="card-text">Driver Name : {{ $driver->Name }}</p>
        <p class="card-text">Contact Number : {{ $driver->Contact_No }}</p>
        <p class="card-text">Gender : {{ $driver->Gender }}</p>
        <p class="card-text">License Expiration Date : {{ $driver->licenseExpirationDate }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
