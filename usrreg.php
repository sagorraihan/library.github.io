<?php 
$conn=mysqli_connect('localhost','root','','web');
?>

<html>
<head>
</head>

<link rel="stylesheet" type="text/css" href="usrreg.css"/>
<body>
    
   <?php
   if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $id=$_POST['id'];
    $email=$_POST['email'];
    $password=($_POST['password']);

    $query="insert into user(name, id, email, password) value('$name', '$id', '$email', '$password')";
    $run=mysqli_query($conn,$query);

    if($run){
      echo"<font color='white'><center><b>Data Insert Successfully</b></center>";
    }
     else{
      echo "<center><font color='white'><big><b>Data insert failed</b></big></center>".mysqli_error($conn);
    }
  



   }

  ?>
            <div class="form">
            <img width="100" src="immage/reg.png" class="user">
            <h2>Register Form</h2>
            <form action="" method="post">
                <p>Name</p>
                <input type="text" name="name" placeholder="Enter Name" required="">
                <p>Id</p>
                <input type="value" name="id" placeholder="Enter Id" required="">
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter Email" required="">
                <p>Password</p>
                <input type="password" name="password" placeholder="******" required="">

                <input type="submit" name="submit" value="submit">

     <p>
     <font color='white'><small><b>Already a member?</b></small><a href="usrlogin.php"><font color='cyan'><b><i>Log in</i></b></a>
     </p>
            </form>
        </div>

    </body>
</html>