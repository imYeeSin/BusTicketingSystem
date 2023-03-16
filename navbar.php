

    <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top gabanav" style="background-color: white;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav gabali">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="busSchedule.php">Bus Scheduling</a></li>
                        <li><a href="">Bus</a></li>
                        <li><a href="">Ticket</a></li>
                        <li><a href="">Reservation</a></li>
                        <li><a href="">Administrator</a></li>
                        <li><a href="">Report</a></li>
                        <li><a href="">Driver</a></li>
                        <li><a href="">Passenger</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div> 

            </div>   
        </nav>

    </div>




<style>
    #myNavbar{
        font-size: 17pt;
        padding-top: 17px;
    }

    #myNavbar li a {
        color: black;
    }

    #myNavbar li a:hover {
        color: red;
    }

    #myNavbar ul li:not(:last-child)::after {
        content: " | ";
        position: absolute;
        top: 50%;
        right: -5px;
        transform: translateY(-50%);
        color: gray;
    }


</style>




