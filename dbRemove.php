<?php


if(!isset($_POST['remove_button'])){
	header("Location: welcomePage.php?Error=Follow right chanel");
}
else{


if (empty( $_POST["mNumber"]) || empty($_POST["mPassword"])  || empty($_POST["mName"])) {
		# code...
		header("Location: ../removeMember.php?Error=InputAllFields");
		
	}else{






require 'dbConnect.php';

$mName = $conn->real_escape_string($_REQUEST['mName']);
$mNumber = $conn->real_escape_string($_REQUEST['mNumber']);
//$mPassword = $conn->real_escape_string($_REQUEST['mPassword']);
//$mPassword=password_hash($mPassword, PASSWORD_DEFAULT);

//capitalize each word and chang to uppercase
$mName=ucwords($mName);
$mNumber=strtoupper($mNumber);

//chech if member exist
$sql1 = "SELECT mNumber, mName FROM members WHERE mNumber='$mNumber' AND mName='$mName' ";


$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
	# code...
		$sql = "DELETE FROM members WHERE mNumber='$mNumber'  AND mName='$mName'";
		$result = $conn->query($sql);

		if ($result) {
			# code...
			echo " Record deleted successfully";
		} else {
			# code...
			echo "Error encountered! ".$result->error;
		}
} else {
	# code...
	die("Record with such details dont exist!");
}

}





$conn->close();

}
?>