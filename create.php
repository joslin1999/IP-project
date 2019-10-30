<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style>
  
  .card{
   border: 10px solid blue;
  }
  body {
  background-color: lightblue;
}
   </style>
    <title>Create New Account</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.html">
							  	<img src="img/logo.png" width ="100",height="50" alt="">
							  </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="index.html">HOME</a>
                               
                    <?php
                    session_start();
                    if (isset($_SESSION['email']) && isset($_SESSION['pword']))
                    {
                      echo "<a class='nav-link' href='logout.php'>LOG OUT</a>";
                    }
                    else{
                          echo "<a class='nav-link' href='login.php'>LOGIN</a>";
                      }?>
                </form>
            </div>
        </nav>
    <br><br>
  <div class="container">
  <div class="card style=" >
  <div class="card-body">
    <p>
  <center><h1>Create New Account</center></h1>
  <form action="createacc.php" method="POST">
  <div class="form-group">
    <label for="exampleInputUsernmae1">Full Name:</label>
    <input type="Username" class="form-control" id="exampleInputUsername1" name="fullname" aria-describedby="UsernameHelp" placeholder="Enter Username" required >
    </div>
  Gender:
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
  <label class="form-check-label" for="exampleRadios1">
   Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Female" checked>
  <label class="form-check-label" for="exampleRadios1">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Other" checked>
  <label class="form-check-label" for="exampleRadios1">
    Other
  </label>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Date of Birth:</label>
    <input type="date" class="form-control" id="exampleInputdate1" name="dob" aria-describedby="dateHelp" required>
  </div>

  <div class="form-group">
    <label for="exampleInputtell1">Contact No:</label>
    <input type="tel" class="form-control" id="exampleInputtel1" name="cno" aria-describedby="telHelp" placeholder="contact no."required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password:</label>
    <input type="password" class="form-control" id="exampleInputpassword" aria-describedby="passwordHelp" name="pword" placeholder="Enter password" required>
    <small>(8 characters minimum)</small>
  </div>
  <br><br>
  <center><button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br><center>
  </form>
  </p>
  </div>
  </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>