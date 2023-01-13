<?php 
$conn=mysqli_connect('localhost','root','','web');
?>

<html>
<head></head>

<link rel="stylesheet" href="reg.css"/>
<body>
  
  <?php
   if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="insert into reg(name, email, password) value('$name', '$email' ,'$password')";
    $run=mysqli_query($conn,$query);

    if($run){
      echo"<center><font color='black'><big>Data Insert Successfully</big></center>";
    }
    else{
      echo"error:".mysql_error($conn);
    }



   }

  ?>

<div class="form">
            <img width="100" src="immage/reg.png" class="user">
            <h2>Register Form</h2>
            <form action="" method="post">
                <p>Name</p>
                <input type="text" name="name" placeholder="Enter Name" required="">
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter Email" required="">
                <p>Password</p>
                <input type="password" name="password" placeholder="******" required="">

                <input type="submit" name="submit" value="submit">

     <p>
     <font color='white'><small><b>Log In</b></small><a href="http://localhost/Project/Library%20Project/sagorlogin.php"><font color='cyan'><b><i>   Click Here</i></b></a>
     </p>
            </form>
        </div>


    </body>
</html>