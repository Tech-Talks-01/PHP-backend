<?php
require "vendor/autoload.php";

    $client         = new MongoDB\Client;
    $db           = $client->project3;
    $collection   = $db->user2;

if(isset($_POST['reg'])){
  $name   = $_POST['name'];
  $age    = $_POST['age']; 
  $email  = $_POST['email'];
  $password   = $_POST['password'];
  $cursor = $collection->find([
    "email" => $email
   ]);
 $count = 0;
 foreach ($cursor as $document ) {
   $count = 1;
 }
 if($count==1)
 {
        echo "<script type='text/javascript'>
                alert('Email Already Exits!');
            </script>";
 }

 else
 //insert registration data 
 {
    $i = $collection->insertOne(
      ['name'=>$name,'age' => $age,'email' => $email,'password' => $password]
    );
    if($i!=NULL) {
       header("location:login.php");
     }else{
      printf("Record not inserted");
    }
 }
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tech Talks Registration</title>
  </head>
  
  <body>
    <div class="container" style="text-align: center; background-color:#2C3335; color: #DAE0E2; " >
        <h1 style="text-align: center;"> Tech Talks </h1>
        <h6 style="text-align: center;">A computer science portal for students.</h6><br>
    </div>
    <div class="container-fluid">
        <div class="column">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #FAD02E !important;">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" href="aboutUs.html">About Us</a>
                    <a class="nav-item nav-link" href="contactUs.html">Contact Us</a>
                  </div>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-item nav-link active" href="registration.php">Register</a></li>
                    <li><a class="nav-item nav-link" href="login.php">Login</a></li>
                </ul>
              </nav>

               <!-- Registration form -->
               <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-md-5 mx-auto">
                        <h1> Registration </h1>
                       <form action="#" method="POST">
                            <div class="form-group">
                                <label for="name">Full Name </label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="form-group" >
                                <label for="Email">Email Address</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="CPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="CPassword" onblur="validatePassword()" required>
                                </div>
                            <button type="submit" class="btn btn-primary" name="reg">Submit</button>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="passwordval.js"></script>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>