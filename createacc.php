
<?php
if (isset($_POST['submit']))
{ $fullname=$_POST["fullname"];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];
    $email=$_POST["email"];
  $cno=$_POST["cno"];
  $pword=$_POST["pword"];
  $dbname= "sjs";
  $host ="localhost";
  $dbUsername="root";
  $dbPassword="";
  $conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    
          $query="INSERT into admin(fullname,gender,dob,email,cno,pword) values ('$fullname','$gender','$dob','$email','$cno','$pword')";
          $result=mysqli_query($conn,$query);
          if($result)
          {
            header("Location:login.php");
          }
          else
          {
            die("Not Successful".mysqli_error($conn));
          }
  
} 
?>