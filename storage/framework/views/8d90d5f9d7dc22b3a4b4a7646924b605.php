<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    
        <style>
            .container{
                margin-top: 100px;
                opacity: 0.9;
            }
            
            .card-header{
                padding-top: 50px;
                padding-left: 50px;
                font-family: serif black;
            }
            
            .card-body{
                font-weight: bold;
            }
            
            body{
                background-image: url('https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg');
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2>Administrator Login</h2> <hr>
                        <div class="card-body">
                            <form method="POST" action="login">
                                
                                <div class="form-group row">
                                    <label for="adminID" class="col-md-4 col-form-label text-md-right">Administrator ID </label>

                                    <div class="col-md-6">
                                        <input id="adminID" type="number" class="adminID" name="adminID" value="" required autofocus>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="password" name="password" required>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <a href="#" class="btn btn-link">Forgot Password?</a>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH D:\xampp\htdocs\StrategysinTicketingSystem\resources\views/Login/index.blade.php ENDPATH**/ ?>