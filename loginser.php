<?php

$error ;
if(isset($_POST['USER'])){
	if(empty($_POST['USER'])||empty($_POST['PASS'])){
		$error="Username or password is invalid";
	}
	else{
		$USER=$_POST['USER'];
		$PASS=$_POST['PASS'];
		$dbhost='localhost';
		$username='root';
		$password='';
		$conn= mysqli_connect("$dbhost","$username","$password");
		
		$db=mysqli_select_db($conn,"database1");
		$query=mysqli_query($conn,"SELECT * FROM LOGIN WHERE USER='$USER' AND PASS='$PASS'");
		$rows=mysqli_num_rows($query);
		if($rows==1){
			header("Location:welcome.php");
		}
		else{
			$error="username or password is invalid";
		
		}
		mysqli_close($conn);
		

	}
}
?>








?>