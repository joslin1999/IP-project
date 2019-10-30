<?php
if(isset($_POST['submit']))
{
    $email=$_POST["email"];
    $pword=$_POST["pword"];
    $connection=mysqli_connect("localhost","root","","sjs");//1.username 2.password 3.database name
    if(($email=='joslin@gmail.com'and $pword='joslinasd')or ($email=='joslin@gmail.com' and $pword=='joslin123'))
    {
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['pword']=$pword;
        $query="SELECT * FROM packages";
        $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));         
        $row=mysqli_fetch_assoc($result);
    }
    else{
         session_start();
         $_SESSION['email']=$email;
         $_SESSION['pword']=$pword;
         $query="SELECT * FROM users where email='$email' and pword='$pword'";
         $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));         
         $row=mysqli_fetch_assoc($result);
          if(($row["email"]==$email) && ($row["pword"]==$pword))
          {
            $query="SELECT * FROM packages where email='$name'";
            $result=mysqli_query($connection,$query) or die("Error".mysqli_error($connection));         
            $row=mysqli_fetch_assoc($result);
          }
             else{header("Location:login.php");}
        } 
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>ADMIN</title>
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

        Package List
        <?php
         if($result->num_rows>0)
        {
            
            echo "<br><center>";
          echo "<table border=1 width=2>";
          echo"<tr>
          <th>Name   </th><th>Type       </th><th>Location    </th><th>Price   </th><th>Features            </th><th>Details   </th></tr>";
          while($row=$result->fetch_assoc()) 
           { 
             echo "<tr><td>".$row["name"]."</td>";
             echo "<td>".$row["type"]."</td>";
             echo "<td>".$row["location"]."</td>";
             echo "<td>".$row["price"]."</td>";
             echo "<td>".$row["features"]."</td>";
             echo "<td>".$row["details"]."</td></tr>";
            
            }
        } 
        else 
        {
         print("0 results");
        } 

        ?>
      
      
</body>
</html>