@extends('Layout')
@section('styles')
<style>
    .container{
        margin-top: 100px;
    }

</style>
@endsection
@section('content')

<div class='container'>
    <div class="row d-flex justify-content-center">
        <div class="col-md-5"> 
            <div class="card my-5"> 

                <div class="card-header">Create New Account</div>
                <div class="card-body">
                    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{url('Administrative')}}" method="post">
                        {!! csrf_field() !!}

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" required>
                            <label for="floatingInput">Name</label>
                        </div>
                        <label>Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" id="Gender" value="M">
                            <label class="form-check-label" for="Gender">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" id="Gender" value="F" >
                            <label class="form-check-label" for="Gender">Female</label>
                        </div><br/>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control"  name="Contact_No" id="Contact_No" placeholder="011-23458695" pattern="[0-9]{3}-[0-9]{8}|[0-9]{3}-[0-9]{7}" required>
                            <label for="floatingInput">Contact Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="Email_Address" id="Email_Address" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="User_Name" id="User_Name" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <input type="submit" value="Save" class="btn btn-success">&nbsp;
                        <a href="{{url()->previous()}}" class="btn btn-secondary">Cancel</a><br/></br>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
