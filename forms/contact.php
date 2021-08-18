<?php
include 'connect.php';

if(isset($_POST['submit']))
{
	$name	= $_POST['name'];
	$email		= $_POST['email'];
	$topic	= $_POST['subject'];
	$content = $_POST['message'];

	$sql = "INSERT INTO contacts (fullname, email, topic, content) VALUES ('$name', '$email',  '$topic', '$content')";

	if ($conn->query($sql) === TRUE) {
		echo '<script>alert("Your contact details and message has been received")</script>';
		header("refresh:1; /index.php");
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

?>
