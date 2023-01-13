<?php 
$conn=mysqli_connect('localhost','root','','web');

 $_GET['bi'];
 $_GET['bt'];
 $_GET['bn'];

?>

<html>
<head></head>
<body>
  
  <?php
   if(isset($_POST['submit']))
   {
     
     $book_id = $_POST['book_id'];
     $book_type = $_POST['book_type'];
     $book_name = $_POST['book_name'];

     $query="UPDATE VIEWBOOK SET Book_Type='$book_type', Book_Name='$book_name' WHERE Book_Id='$book_id' ";
     $data=mysqli_query($conn,$query);

     if($data)
     {
      echo "<font color='white'>Records updated successfully";
     }

     else
     {
      echo "Records not updated";
     }
    

   }

  ?>
    <link rel="stylesheet" type="text/css" href="updatebooks.css">
        <div class="form">
            <img width="100" src="immage/insert.png" class="user">
            <h2>Update Form</h2>
            <form action="" method="post">
                <p>Book_Id</p>
                <input type="text" name="book_id" placeholder="Enter Book Id" required="">
                <p>Book_Type</p>
                <input type="text" name="book_type" placeholder="Enter Book Type" required="">
                <p>Book_Name</p>
                <input type="text" name="book_name" placeholder="Enter Book Name" required="">

                <input type="submit" name="submit" value="submit">

                 <p>
     <font color='white'><small><b>Go to View Book? </b></small><a href="http://localhost/Project/Library%20Project/viewbook.php"><font color='cyan'><b><i>Click Here</i></b></a>
     </p>

    </form>

    </div>
    </body>
</html>