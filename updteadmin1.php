<?php 
$conn=mysqli_connect('localhost','root','','web');

 $_GET['fi'];
 $_GET['em'];
 $_GET['pa'];

?>

<html>
<head></head>
<body>
  
  <?php
   if(isset($_POST['submit']))
   {
     
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $query="UPDATE REG SET NAME='$name', PASSWORD='$password' WHERE EMAIL='$email' ";
     $data=mysqli_query($conn,$query);

     if($data)
     {
      echo "<center><big><font color='white'>Records updated successfully</big></center>";
     }

     else
     {
      echo"Records not updated";
     }
    

   }

  ?>
    <link rel="stylesheet" type="text/css" href="updteadmin1.css">
        <div class="form">
            <img width="100" src="immage/insert.png" class="user">
            <h2>Update Form</h2>
            <form action="" method="post">
                <p>Name</p>
                <input type="text" name="name" placeholder="Enter Name" required="">
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter Email" required="">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password" required="">

                <input type="submit" name="submit" value="submit">

                 <p>
     <font color='white'><small><b>Go to View? </b></small><a href="http://localhost/Project/Library%20Project/displayadmin.php"><font color='cyan'><b><i>Click Here</i></b></a>
     </p>

    </form>

    </div>
    </body>
</html>