
<!-- Name: Cho Yee Sin -->

@extends('layout')

@section('styles')
<style>
    .card{
        margin: 100px 50px 50px 320px;
        width: 40%;
        opacity: 0.9;
    }
    
    body {
        background-image: url('https://grmdaily.com/wp-content/uploads/2022/06/shutterstock_583939735-scaled.jpeg');
        background-size: cover;
    }

</style>
@endsection

@section('content')
<div class="card">
    <div class="card-header" style="font-weight:bold; background-color: lightskyblue;">Bus Page</div>
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
        <form action="{{ url('buses/' .$buses->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$buses->id}}" />
            <label>Bus Plate Number</label></br>
            <input type="text" name="plateNumber" id="plateNumber" value="{{$buses->plateNumber}}" disabled /></br></br>
            <label>Bus Model</label></br>
            <input type="text" name="model" id="model" class="form-control" value="{{ old('model', $buses->model) }}" required pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
            <label>Purchase Date</label></br>
            <input type="date" name="purchaseDate" id="purchaseDate" class="form-control" value="{{ old('purchaseDate', $buses->purchaseDate) }}" required></br>
            <label>Road Tax Expiration Date</label></br>
            <input type="date" name="roadTaxExpirationDate" id="roadTaxExpirationDate" class="form-control" value="{{ old('roadTaxExpirationDate', $buses->roadTaxExpirationDate) }}" required></br>
            <label>Bus Type</label></br>
            <input type="radio" id="single" name="busType" value="Single Deck Bus" required {{ old('busType') == 'Single Deck Bus' ? 'checked' : '' }} <?php echo $buses->busType == 'Single Deck Bus' ? 'checked' : ''; ?>>
            <label for="single">Single Deck Bus</label><br>
            <input type="radio" id="double" name="busType" value="Double Deck Bus" required {{ old('busType') == 'Double Deck Bus' ? 'checked' : '' }} <?php echo $buses->busType == 'Double Deck Bus' ? 'checked' : ''; ?>>
            <label for="double">Double Deck Bus</label></br></br>
            <input type="submit" value="Update" class="btn btn-success">
            <a href="{{url('buses')}}" class="btn btn-secondary">Cancel</a><br/></br>
        </form>

    </div>
</div>
@stop
