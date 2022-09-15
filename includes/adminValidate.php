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

	$mike="#mike@Admin";

	require '../dbConnect.php';

	$mName = $conn->real_escape_string($mName);
	$mNumber = $conn->real_escape_string($mNumber);
	$mPassword = $conn->real_escape_string($mPassword);
	$mPassword=$mPassword.$mike;

	if (empty( $_POST["mNumber"]) || empty($_POST["mPassword"])  || empty($_POST["mName"])) {
		# code...
		header("Location: ../adminLogin.php?Error=InputAllFields");
		
	} else {

		$sql1 = "SELECT mNumber, mName,mPassword FROM members WHERE mNumber='$mNumber' AND mName='$mName' ";
		$result1 = $conn->query($sql1);
		

		if ($result1->num_rows > 0) {
		$row=$result1->fetch_assoc();
		$pwd=$row['mPassword'];
		if (password_verify($mPassword, $pwd)) {
			# code...
			require '../adminLanding.php';
			//require '../viewAll.php';
		} else {
			# code...
		}
		
		# code...
		echo "<center><p class='error' style='color:red;font-size:1.2em;margin-top:10em;'>Invalid Password!</p></center>";
		
		
	}else{
		echo "<center><p class='error' style='color:red;font-size:1.2em;margin-top:10em;'>Invalid administrator credentials!</p></center>";
	}
	

	}

} else {
	# code...
	$value="no";
	header("Location: ../welcomePage.php?Error=Followrightchannel");
}


?>