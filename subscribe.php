<?php
$email =$_POST['email'];

//Database connection

$conn = new msqli('localhost', 'root', '', 'subscribe');
if($conn->connect_error) {
	die('Connection Failed: '.$conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into subscribe(email)
		values(?)");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	echo "Subscribe sucessfully";
	$stmt->close();
	$conn->close();
}

?>

