<?php 
$conn=mysqli_connect('localhost','root','','web');
?>

<html>
<head>
</head>

<link rel="stylesheet" type="text/css" href="saglogin.css"/>
<body>
    
    <?php 
     if(isset($_POST['login'])){

        extract($_POST);

        $query="select * from reg where Email='$email' AND Password='$password'";
         $run_query =mysqli_query($conn,$query);

         if($run_query){
          if(mysqli_num_rows($run_query)>0){

            $_SESSION['Email']=$email;
            $_SESSION['Password']=$password;

            header("location:admin.html");

          }
          else{
            echo"<big><center><div class='alert alert-warning'><font color='white'><strong>warning!</strong>login not successfull...</div></center></big>";
          }


         }

     }

    ?>
            <div class="loginBox">
            <img width="100" src="immage/user.png" class="user">
            <h2>Log In Here</h2>
            <form action="" method="post">
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter Email" required="">
                <p>Password</p>
                <input type="password" name="password" placeholder="******" required="">

                <input type="submit" name="login" value="login">
            </form>
        </div>

    </body>
</html>