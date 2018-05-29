<?php

$conn = new mysqli("localhost","root","","iparkdb");
	if($conn->connect_error)
	{
		die("Connection Failed: " . $conn->connect_error);
	}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$status = 'unread';

$sql = "INSERT INTO `messeges_tbl`(`name`, `email`, `phone_number`, `message_desc`, `status`) VALUES ('$name','$phone','$email','$message','$status')";
$result = mysqli_query($conn,$sql);
if(!$result){
	echo "Error: ".mysqli_error();
}else{
	header("Location: contact.php");
	echo "<script>alert('Thank You! We will reply as soon as possible.');</script>";
}

?>