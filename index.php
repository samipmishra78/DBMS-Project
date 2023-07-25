<?php
if(isset($_POST['Number'])){
$servername="localhost";
$username="root";
$password="";
$database="reg";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry connection failed".mysqli_connect_error());
}
$phone=$_POST['Number'];
$password=$_POST['Password'];
$query="SELECT Number FROM form WHERE Number='$phone'";
        $ran=mysqli_query($conn,$query) or die("Cannot selected !".mysqli_query($con));
            if(mysqli_num_rows($ran)>0){
                echo "Phone number already Registered";

        }
        else{
       
    $sql="INSERT INTO `form`(`Number`, `Password`) VALUES ('$phone', '$password')";
    if($conn->query($sql)== true){
        echo "successfully Registered";
    }
}
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="index.css">
 
</head>
<body>
<header>
        <nav>
            <li>
                <a target="_self"  href="index.php">Insert</a>
            </li>
            <li>
                <a target="_self" href="display.php">Display</a>
            </li>
            <li>
                <a target="_self" href="update.php">Modify</a>
            </li>
            <li>
                <a target="_self" href="delete.php">Delete</a>
            </li>
            <li>
                <a  target="_self" href="Search.php">Search</a>
            </li>
        </nav>
    </header>
    
    <h1>SIGN IN</h1>

    
    <form action="index.php" method="post">
        <div>
        PhoneNumber:<input type="number" name="Number" id="number" placeholder="Enter Your Phone number" >
        </div>
        <div>
        Password:<input type="password" name="Password" id="password" placeholder="Enter Your Password">
        </div>
        <button class="button" id="submit">Submit</button>
        
        
    </form>
</body>
</html>