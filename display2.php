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


echo $result['Firstname']." ".$result['Email']." ".$result['Password'];

if($total != 0)
{
  ?>
  <link rel="stylesheet" type="text/css" href="table.css">
    <center>
    <table border=1>
    <tr>
    <th><u>Firstname</u></th>
     <th><u>Email</u></th>
      <th><u>Password</u></th>
      <th colspan="2"><u>Operation</u></th>
    </tr>
   


  <?php

  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
        <td>".$result['Firstname']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Password']."</td>
        <td><a href='update.php?fn=$result[Firstname]&em=$result[Email]&ps=$result[Password]'>Edit</a></td>

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

