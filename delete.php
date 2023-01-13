<?php 
$conn=mysqli_connect('localhost','root','','web');

$firstname = $_GET['fn'];
$query = "DELETE FROM REG WHERE Firstname='$firstname' ";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Record Deleted')</script>";

	?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/display1.php">
	<?php
}
else
{
	echo "<font color='red'>Sorry,Deleted process failed";
}
?>
