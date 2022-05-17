<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','petsonthenet');

// get the post records
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$email = $_POST['email'];



// database insert SQL code
$sql = "INSERT INTO `user` (`name`, `phone_number`, `address`, `email`) VALUES ('$name', '$phone_number', '$phone_number', '$email')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
    header( "Location: ../pet_cart.php" );
}

?>