<style>
td
{
  padding: 10px;
}


</style>

<?php 
$conn=mysqli_connect('localhost','root','','web');

error_reporting(0);

$query = "select * from user";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


echo $result['Name']." ".$result['Id']." ".$result['Email']." ".$result['Password'];

if($total != 0)
{
  ?>
  <link rel="stylesheet" type="text/css" href="userdisplay.css">
    <center>
    <table border=1>
    <tr>
    <th><u>Name</u></th>
     <th><u>Id</u></th>
      <th><u>Email</u></th>
    </tr>
   


  <?php

  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
        <td>".$result['Name']."</td>
        <td>".$result['Id']."</td>
        <td>".$result['Email']."</td>
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
