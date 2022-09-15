<?php


if(!isset($_POST['addNew_button'])){
	header("Location: welcomePage.php");
}
else{


if (empty( $_POST["mNumber"]) || empty($_POST["mPassword"])  || empty($_POST["mName"])) {
		# code...
		header("Location: ../addMember.php?Error=InputAllFields");
		
	}else{





require 'dbConnect.php';

$mName = $conn->real_escape_string($_REQUEST['mName']);
$mNumber = $conn->real_escape_string($_REQUEST['mNumber']);
$mPassword = $conn->real_escape_string($_REQUEST['mPassword']);
//capitalize each word and chang to uppercase
$mName=ucwords($mName);
$mNumber=strtoupper($mNumber);

$mPassword=password_hash($mPassword, PASSWORD_DEFAULT);
//check if record already exist
$sql1 = "SELECT mNumber From members WHERE mNumber='$mNumber'";

$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
	# code...
	echo "User with user number ".$mNumber." alredy exist!";
	
} else {
	# code...
$sql = "INSERT INTO members(mNumber, mPassword, mName)
		VALUES('$mNumber', '$mPassword', '$mName')";
$result = $conn->query($sql);

if ($result) {
	# code...
	echo "<center>Records added successfully!<br>";
	//sending email to new member
		$to = "bobbyqiz448@gmail.com";
		$subject = "Addmission to Wajane Pamoja";
		$txt = "You have been added successfully!";
		$headers = "From: bobbyqiz448@gmail.com" . "\r\n" ."CC:mutemi84@gmail.com";

		
		if(mail($to,$subject,$txt,$headers)){
			echo "Mail notification sent successfully!</center>";
		}else{
			echo "Failed to send notification!";
		}


} else {
	# code...
	echo "Error encountered! ";//.$result->error;
}





	
}

}


$conn->close();

}

?>