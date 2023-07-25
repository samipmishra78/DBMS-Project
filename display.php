<?php
$servername="localhost";
$username="root";
$password="";
$database="reg";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry connection failed".mysqli_connect_error());
}
$sql="SELECT *FROM `form`";
$result = $conn->query($sql);
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Database Record</title>

	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center; 
		}

        body{
            background-color:darkgrey;
        }

		th,
		td {
			font-weight: bold;
			/* border: 1px solid black; */
			padding: 15px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>

		<table>
			<tr>
				<th>Phone</th>
				<th>Password</th>
				
			</tr
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				
				<td><?php echo $rows['Number'];?></td>
				<td><?php echo $rows['Password'];?></td>
		
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
