<style>
td
{
  padding: 10px;
}


</style>

<?php 
$conn=mysqli_connect('localhost','root','','web');

error_reporting(0);

$query = "select * from reg";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


echo $result['name']." ".$result['email']." ".$result['password'];

if($total != 0)
{
  ?>
    <link rel="stylesheet" type="text/css" href="displayadmin.css">
    <center>
    <table border=1>
    <tr>
    <th><u>Name</u></th>
     <th><u>Email</u></th>
      <th><u>Password</u></th>
    </tr>
   


  <?php

  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['password']."</td>

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

