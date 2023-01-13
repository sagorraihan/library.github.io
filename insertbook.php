<?php 
$conn=mysqli_connect('localhost','root','','web');
?>

<html>
<head></head>
<link rel="stylesheet" type="text/css" href="insertbook.css"/>
<body>
  
  <?php
   if(isset($_POST['submit'])){

    $book_id=$_POST['book_id'];
    $book_type=$_POST['book_type'];
    $book_name=$_POST['book_name'];

    $query="insert into viewbook(Book_Id, Book_Type, Book_Name) value('$book_id', '$book_type' ,'$book_name')";
    $run=mysqli_query($conn,$query);

    if($run){
      echo "<center><font color='white'><big><b>Data Insert Successfully</b></big></center>";
    }

    else{
      echo "error:".mysql_error($conn);
    }



   }

  ?>
    
      <div class="form">
            <img width="100" src="immage/insert.png" class="user">
            <h2>Insert Form</h2>
            <form action="" method="post">
                <p>Book_Id</p>
                <input type="text" name="book_id" placeholder="Enter Book Id" required="">
                <p>Book_Type</p>
                <input type="text" name="book_type" placeholder="Enter Book Type" required="">
                <p>Book_Name</p>
                <input type="text" name="book_name" placeholder="Enter Book Name" required="">

                <input type="submit" name="submit" value="submit">

     <p>
     <font color='white'><small><b>Go to View Book? </b></small><a href="searchbook.php"><font color='cyan'><b><i>Click Here</i></b></a>
     </p>

    </form>

    </div>

    </body>
</html>