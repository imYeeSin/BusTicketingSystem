
@extends('Layout')
@section('content')
<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-md-11"> 

            <div class="card my-4"> 
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10 fs-2">Administrator</div>
                        <div class="col-md-2">
                            <a href="{{ url('/Administrative/create')}}" class="btn btn-success btn-sm" title="Add New Contact">
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
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Contact No.</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($administrative as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->Name }}</td>
                                <td>{{ $item->Gender }}</td>
                                <td>{{ $item->Contact_No }}</td>
                                <td>{{ $item->Email_Address }}</td>
                                <td>{{ $item->Designation }}</td>
                                <td>
                                    <a href="{{ url('/Administrative/' . $item->id) }}" title="View details"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/Administrative/' . $item->id . '/edit') }}" title="Edit account"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="{{ url('/Administrative/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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