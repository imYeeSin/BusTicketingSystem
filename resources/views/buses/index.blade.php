
<!-- Name: Cho Yee Sin -->

@extends('layout')

@section('styles')
<style>
    body {
        background-image: url('https://wpvip.edutopia.org/wp-content/uploads/2023/01/hero_blog_Administration-Leadership_photo_iStock_1417664345_ferrantraite.jpg?w=2880&quality=85');
        background-size: cover;
    }

    .card{
        margin: 15px 1px 50px 1px;
        opacity: 0.9;
    }

    #addBus{
        background-color:orange;
        border: orange 7px outset;
        color: black;
        font-weight: bold;
        padding: 7px;
    }
    
    #addBus:hover{
        background-color:yellow;
        border: yellow 7px outset;
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
                <div class="card-header" style="background-color: orange;font-weight: bold">Bus </div>
                <div class="card-body">
                    <a href="{{ url('/buses/create') }}" class="btn btn-success btn-sm" title="Add New Bus" id="addBus">
                        <i class="fa fa-plus" aria-hidden="true"></i> New Bus
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Bus ID</th>
                                    <th>Bus Plate Number</th>
                                    <th>Bus Model</th>
                                    <th>Purchase Date</th>
                                    <th>Road Tax Expiration Date</th>
                                    <th>Bus Type</th>
                                    <th>Total Seats</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($buses as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->plateNumber }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->purchaseDate }}</td>
                                    <td>{{ $item->roadTaxExpirationDate }}</td>
                                    <td>{{ $item->busType }}</td>
                                    <td>{{ $item->seat }}</td>
                                    <td>
                                        <a href="{{ url('/buses/' . $item->id) }}" title="View Bus"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                        <a href="{{ url('/buses/' . $item->id . '/edit') }}" title="Edit Bus"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>
                                        <form method="POST" action="{{ url('/buses/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Bus" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> 
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

