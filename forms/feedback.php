<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO feedback (name,email,message)
	 VALUES ('$name','$email','$message')";
	 if (mysqli_query($conn, $sql)) {
		echo "Feedback Submitted successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>