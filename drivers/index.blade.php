
<!-- Name: Wong Yu Sheng -->
@extends('layout')

@section('styles')
<style>
    body {
        background-image: url('https://coachwest.com/wp-content/uploads/2017/10/shutterstock_361517306-1452x726.jpg');
        background-size: cover;
    }

    .card{
        margin: 15px 1px 50px 1px;
        opacity: 0.9;
    }

    #addDriver{
        background-color:lightskyblue;
        border: lightskyblue 7px outset;
        color: black;
        font-weight: bold;
        padding: 7px;
    }
    
    #addDriver:hover{
        background-color:lightcyan;
        border: lightcyan 7px outset;
        color: black;
        font-weight: bold;
        padding: 7px;
    }
    
    #alert{
        margin-top: 70px;
    }

</style>
@endsection

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@if (session('flash_message'))
    <div class="alert alert-success" id="alert">
        {{ session('flash_message') }}
    </div>
@endif

<script>
    $(document).ready(function() {
        $('.alert').delay(2000).fadeOut(1000);
    });
</script>

<div class="container-fluid" style="margin-top: 55px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: lightskyblue;font-weight: bold">Driver </div>
                <div class="card-body">
                    <a href="{{ url('/drivers/create') }}" class="btn btn-success btn-sm" title="Add New Driver" id="addDriver">
                        <i class="fa fa-plus" aria-hidden="true"></i> New Driver 
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Driver ID</th>
                                    <th>Driver Name</th>
                                    <th>Contact Number</th>
                                    <th>Gender</th>
                                    <th>License Expiration Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($drivers as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->Name }}</td>
                                    <td>{{ $item->Contact_No }}</td>
                                    <td>{{ $item->Gender }}</td>
                                    <td>{{ $item->licenseExpirationDate }}</td>
                                    <td>
                                        <a href="{{ url('/drivers/' . $item->id) }}" title="View Driver"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/drivers/' . $item->id . '/edit') }}" title="Edit Driver"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="{{ url('/drivers/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>


                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection