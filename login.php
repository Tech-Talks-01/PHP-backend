<?php
require "vendor/autoload.php";
 $client         = new MongoDB\Client;
    $db           = $client->project3;
    $collection   = $db->user2;

if(isset($_POST['login']))
{
  $cursor = $collection->find([
     "email"    => $_POST['email'],
     "password" => $_POST['password']
    ]);
    $count = 0;
  foreach ($cursor as $document) {
    $count = 1;
  }
  if($count==1){
    header("Location:home.html");
  }else{
               echo "<script type='text/javascript'>
                alert('Something Went Wrong!');
            </script>";
  }
}
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Tech Talks Login</title>
  </head>
  <body>
    <div class="container" style="text-align: center; background-color:#2C3335; color: #DAE0E2; " >
            <h1 style="text-align: center;"> Tech Talks </h1>
            <h6 style="text-align: center;">A computer science portal for students.</h6><br>
    </div>
    <div class="container-fluid">
        <div class="column">
            <!-- Navbar -->
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
              </nav><br>

              <!-- Login form -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-md-7 col-md-5 mx-auto">
                            <h1> Login</h1>
                            <form action="#" method="POST"> 
                                <div class="form-group" >
                                <label for="Email">Email Address</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary" name='login'>Submit</button>
                            </form>
                        </div>  
                    </div>
                </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>