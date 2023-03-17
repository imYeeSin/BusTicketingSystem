<?php
//$connection = mysqli_connect("localhost", "root", "", "vehicle_management");

session_start();
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Bus Ticketing System</title>

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="animate.css">

        
<style>
    
        .hero-text{
            font-size: 45pt;
            background-color: black; 
            opacity: 0.8; 
            font-size: 50px;
            text-align: center; 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            padding-bottom: 16px;
        }

        .parallax {
            /* The image used */
            background-image: url("busPicture.jpg");
            height: 100%;

            /* Set a specific height */
            min-height: 700px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .navbar-fixed-top.scrolled {
            background-color: ghostwhite;
            transition: background-color 200ms linear;
        }

    </style>

    </head> 
    
    <body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
           <?php include 'navbar.php'; ?>  
      
        <div class="parallax foo">

            <div class="hero-text">

                <h1 class="animated rubberBand" style="color:red; font-weight: 900">Billion Stars Express</h1>
                <p style="color:white; font-weight: 900">A bus ticketing management system where you can easily manage the system</p>

                    <a class="btn btn-success" id="btn-success" style="text-align: center; font-size: 20pt; background-color: red; font-weight: bolder;" href="">Login NOW !</a> 

            </div>
        </div>                 

        <div>
            <br><br>
            <div id="bus_route" class="container">
                <div class="page-header">
                    <h1 style="text-align: center">Our Story</h1>
                    <p style="text-align: justify; font-size: 15pt; line-height: 47px; padding-top: 40px; padding-bottom: 140px;">
                        Billion Star Express is a bus service in Malaysia, and the current base is at Prangin Mall in Penang. 
                        In the early years of the established company, the company was called Lion Star after that the company had 
                        transformed into Billion Star Express. The target customers or users of the Billion Star Express are the students, 
                        workers, travel group and so on. The Billion Stars Express has a bus with a variety of seats, 
                        there are single decks with 27, 30, and 44 seaters, and double decks with 45 seats, this can accommodate the 
                        number of people whether it is traveling in a group or an individual. Not only that, most of the Billion Stars 
                        Express have charging ports that can give the customer charge their mobile phone or camera to make sure passengers 
                        do not lose their fun when their phone dies. Moreover, the bus also provides free wifi service for customers to 
                        connect with family and friends at any time.  
                    </p>
                </div> 

        </div>  

        <footer style="background-color: black;
                color: white; padding-top: 10px; font-size: 16pt;
                padding-bottom: 10px;" class="container-fluid text-center">
            <p>Bus Ticketing System - Admin Panel</p> 
        </footer>

    </body>
</html>
