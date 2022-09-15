<?php

$value="no";


if(isset($_POST["login_submit"])) {
	# code...
	session_start();

	$value="yes";
	$_SESSION['mName']=$_POST["mName"];
	$_SESSION['mNumber']=$_POST["mNumber"];
	$_SESSION['mPassword']=$_POST["mPassword"];
	$_SESSION['validated']=$value;
	

	$mName=$_POST["mName"];
	$mNumber=$_POST["mNumber"];
	$mPassword=$_POST["mPassword"];

	if (empty( $_POST["mNumber"]) || empty($_POST["mPassword"])  || empty($_POST["mName"])) {
		# code...
		header("Location: ../memberLogin.php?Error=InputAllFields");
		
	} else {
		# code...
		require '../memberViewPage.php';
	}
	

	

} else {
	# code...
	$value="no";
	header("Location: ../welcomePage.php?Error=Follow right channel");
}


?>