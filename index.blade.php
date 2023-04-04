@extends('layout')
@section('content')
<div class="container" style="margin-top: 55px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Driver</div>
                <div class="card-body">
                    <a href="{{ url('/drivers/create') }}" class="btn btn-success btn-sm" title="Add New Driver">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Driver 
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
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Schedule" onclick="return confirm( & quot; Confirm delete? & quot; )">
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