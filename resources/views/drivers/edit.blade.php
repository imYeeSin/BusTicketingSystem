
<!-- Name: Wong Yu Sheng -->
@extends('layout')

@section('styles')
<style>
    .card{
        margin: 100px 50px 50px 320px;
        width: 40%;
        opacity: 0.9;
    }
    
    body {
        background-image: url('https://blog-assets.busbud.com/wp-content/uploads/2013/05/busbud-coachbus1.jpg');
        background-size: cover;
    }

</style>
@endsection

@section('content')
<div class="card">
  <div class="card-header" style="font-weight:bold; background-color: lightskyblue;">Driver Page</div>
  <div class="card-body">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
      <form action="{{ url('drivers/' .$drivers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$drivers->id}}" />
        <label>Name</label></br>
        <input type="text" name="Name" id="Name" class="form-control" value="{{ old('Name', $drivers->Name) }}" required pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
        <label>Contact Number <i>(Example: 011-12345678)</i></label></br>
        <input type="text" name="Contact_No" id="Contact_No" class="form-control" value="{{ old('Contact_No', $drivers->Contact_No) }}" required pattern="^\d{3}-\d{7,8}$"></br>
        <label>Gender (M/F)</label></br>
        <input type="text" name="Gender" id="Gender" class="form-control" value="{{ old('Gender', $drivers->Gender) }}" required pattern="[MF]" title="Only 'M' or 'F' input allowed!"></br>
        <label>License Expiration Date</label></br>
        <input type="date" name="licenseExpirationDate" id="licenseExpirationDate" class="form-control" value="{{ old('licenseExpirationDate', $drivers->licenseExpirationDate) }}" required></br>
        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ url('drivers') }}" class="btn btn-secondary">Cancel</a><br>
    </form>
  
  </div>
</div>
@stop
