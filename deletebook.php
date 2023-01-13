<?php 
$conn=mysqli_connect('localhost','root','','web');

$book_id = $_GET['bi'];
$query = "DELETE FROM VIEWBOOK WHERE Book_Id='$book_id' ";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Record Deleted')</script>";

	?>
       <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Project/Library%20Project/viewbook.php">
	<?php
}
else
{
	echo "<font color='red'>Sorry,Deleted process failed";
}
?>
