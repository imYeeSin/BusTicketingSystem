
@extends('Layout')

@section('styles')
<style>
    .container{
        margin-top: 50px;
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
$(document).ready(function () {
    $('.alert').delay(2000).fadeOut(1000);
});
</script>

<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-md-11"> 

            <div class="card my-4"> 
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10 fs-2">Administrator</div>
                        <div class="col-md-2">
                            <a href="{{ url('/Administrative/create')}}" class="btn btn-primary" title="Add New Contact">
                                                            <i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
                        </div>
                    </div>
                </div> 
                <div class="card-body" id="cardBody">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Staff ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Contact No.</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($administrative as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->Administrative_ID }}</td>
                                <td>{{ $item->User_Name }}</td>
                                <td>{{ $item->Name }}</td>
                                <td>{{ $item->Gender }}</td>
                                <td>{{ $item->Contact_No }}</td>
                                <td>{{ $item->Email_Address }}</td>
                                <td>
                                    <a href="{{ url('/Administrative/' . $item->Administrative_ID) }}" title="View details"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/Administrative/' . $item->Administrative_ID . '/edit') }}" title="Edit account"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="{{ url('/Administrative/' . $item->Administrative_ID) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete account" onclick="return confirm( & quot; Confirm delete? & quot; )"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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


@endsection