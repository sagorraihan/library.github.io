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
    <link rel="stylesheet" type="text/css" href="updteadmin.css">
    <center>
    <table border=1>
    <tr>
    <th><u>Name</u></th>
     <th><u>Email</u></th>
      <th><u>Password</u></th>
      <th colspan="2"><u>Operation</u></th>
    </tr>
   


  <?php

  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['password']."</td>
        <td><a href='updteadmin1.php?fi=$result[name]&em=$result[email]&pa=$result[password]'>Edit</a></td>
   

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

