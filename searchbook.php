
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="searchbook.css">
	<meta charset="UTF-8">
	<title>Viewbook & Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">

				<?php
                $conn=mysqli_connect('localhost','root','','web');

                if(isset($_POST['search']))
                {
                	$searchKey=$_POST['search'];
                	$sql="SELECT * FROM viewbook WHERE Book_Type LIKE '%$searchKey%' ";
                }
                else
                {
                $sql="SELECT * FROM viewbook";
                $searchKey=" ";
                }
                $result=mysqli_query($conn,$sql);
                ?>

				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Book_Name" value="<?php echo $searchKey; ?>" > 
					</div>
					<div class="col-md-6-text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table-bordered">
					<tr>
						<th>Book_Id</th>
						<th>Book_Type</th>
						<th>Book_Name</th>
					</tr>
					<?php while($row=mysqli_fetch_object($result)) { ?>
					<tr>
						<td><?php echo $row->Book_Id?></td>
						<td><?php echo $row->Book_Type?></td>
						<td><?php echo $row->Book_Name?></td>
					</tr>
                    <?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>