
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
    <div class="card-header" style="font-weight:bold; background-color: lightskyblue;">Bus Schedule Page</div>
    <div class="card-body">

        <form action="{{ url('schedules/' .$schedules->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$schedules->id}}" />
            <label>Departure Time</label></br>
            <input type="time" name="departureTime" id="departureTime" required class="form-control" value="{{$schedules->departureTime}}"></br>
            <label>Arrival Time</label></br>
            <input type="time" name="arrivalTime" id="arrivalTime" required class="form-control" value="{{$schedules->arrivalTime}}"></br>
            <label>Pick Up Point</label></br>
            <input type="text" name="pickUpPoint" id="pickUpPoint" required class="form-control" value="{{$schedules->pickUpPoint}}" pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
            <label>Drop Off Point</label></br>
            <input type="text" name="dropOffPoint" id="dropOffPoint" required class="form-control" value="{{$schedules->dropOffPoint}}" pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
            <label>Stop Point</label></br>
            <input type="text" name="stopPoint" id="stopPoint" required class="form-control" value="{{$schedules->stopPoint}}" pattern="[a-zA-Z ]+" title="Only alphabets input allowed!"></br>
            <label>Bus</label><br>
            <select name="Bus_ID" class="form-control" value="{{$schedules->Bus_ID}}" required>
                @foreach($buses as $bus)
                <option value="{{ $bus->id }}">{{ $bus->plateNumber }}</option>
                @endforeach
            </select><br>
            <label>Driver</label><br>
            <select name="Driver_ID" class="form-control" value="{{$schedules->Driver_ID}}" required>
                @foreach($drivers as $driver)
                <option value="{{ $driver->id }}">{{ $driver->Name }}</option>
                @endforeach
            </select><br>
            <label>Price</label></br>
            <input type="number" step="0.01" min="0" name="price" id="price" class="form-control" required onblur="formatPrice(this)" value="{{$schedules->price}}"></br>

            <script>
                function formatPrice(input) {
                    input.value = parseFloat(input.value).toFixed(2);
                }
            </script>
            
            <input type="submit" value="Update" class="btn btn-success">
            <a href="{{url('schedules')}}" class="btn btn-secondary">Cancel</a></br>
        </form>

    </div>
</div>
@stop
