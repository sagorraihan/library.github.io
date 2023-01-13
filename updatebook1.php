<?php 
$conn=mysqli_connect('localhost','root','','web');

error_reporting(0);

$query = "select * from viewbook";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


echo $result['Book_Id']." ".$result['Book_Type']." ".$result['Book_Name'];

if($total != 0)
{
  ?>
    <link rel="stylesheet" type="text/css" href="updatebook1.css">
    <center>
    <table border=1>
    <tr>
    <th><u>Book Id</u></th>
     <th><u>Book Type</u></th>
      <th><u>Book Name</u></th>
      <th colspan="2"><u>Operation</u></th>
    </tr>
   


  <?php

  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
        <td>".$result['Book_Id']."</td>
        <td>".$result['Book_Type']."</td>
        <td>".$result['Book_Name']."</td>
        <td><a href='updatebooks.php?bi=$result[Book_Id]&bt=$result[Book_Type]&bn=$result[Book_Name]'>Edit</a></td>
   

       </tr>";
  }
}

else
{
  "No records found";
}


?>
 </table>
</center>

