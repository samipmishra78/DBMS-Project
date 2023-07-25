<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method="post">
    <input type="text" placeholder="Enter Number" name="Search">
<button type="text" name="Submit">Search</button>
<br>
<?php
echo "<br>";
    $servername="localhost";
    $username="root";
    $password="";
    $database="reg";
    $conn=mysqli_connect($servername,$username,$password,$database);
    $num= $_POST['Search'];


    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($conn, "SELECT * FROM `form`
    WHERE `Number`='$num'");
    

while ($row = mysqli_fetch_array($result))
{        echo("Number"."\t\t"."Password");
        echo "<br>";
        echo $row['Number'] . " " . $row['Password'];
        echo "<br>";
}
    mysqli_close($conn);
    ?>

</form>

</body>
</html>