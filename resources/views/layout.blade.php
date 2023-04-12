

<!DOCTYPE html>
<html>
    <head>
        <title>Bus Ticketing System</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>

    <style>


        #myNavbar{
            font-size: 17pt;
            padding: 10px 10px 10px 10px;
            position: fixed;
            top: 0;
            left: 0px;
            right: 0px;
            z-index: 9999;
            background-color: white;
        }

        #myNavbar li a{
            color: black;
        }

        #navlogout{
            position: absolute;
            display: inline-block;
            right: 0%;
        }

        #myNavbar li a:hover {
            background-color: purple;
            color: white;
        }


    </style> 

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{url('/HomePage/home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('schedules')}}">Bus Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('buses')}}">Bus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('Reservation')}}">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('Administrative')}}">Administrator</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('drivers')}}">Driver</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Passenger</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Report</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" id ="navlogout"  href="/logout">Logout</a>
                        </li>
                    </ul>

                </div>

        </nav>

        @yield('styles')

        
        <div class="container">
            @yield('content')
            
        </div>




    </body>
</html>