<?php


if(!isset($_POST['saveChanges_button'])){
	header("Location: welcomePage.php");
}
else{


	if (empty( $_POST["mNumber"]) || empty($_POST["date"])  || empty($_POST["mName"])) {
		# code...
		header("Location: ../modifyRecord.php?Error=InputAllFields");
		
	}else{




require 'dbConnect.php';

$mName = $conn->real_escape_string($_REQUEST['mName']);
$mNumber = $conn->real_escape_string($_REQUEST['mNumber']);
//$mPassword = $conn->real_escape_string($_REQUEST['mPassword']);
$mLoan = $conn->real_escape_string($_REQUEST['mLoan']);
$mSavings = $conn->real_escape_string($_REQUEST['mSavings']);
//$mName = $conn->real_escape_string($_REQUEST['mName']);
$date = $conn->real_escape_string($_REQUEST['date']);
$x=$mName;
$mName=strtoupper($x);
$mName=ucwords($mName);
$mNumber=strtoupper($mNumber);
//echo "date is".$date;
//$x=$mPassword;
//$mPassword=password_hash($x, PASSWORD_DEFAULT);


$sql1 = "SELECT mNumber, mName FROM members WHERE mNumber='$mNumber' AND mName='$mName' ";
$result1 = $conn->query($sql1);

if ($result1) {
	# code...
	if ($result1->num_rows > 0) {
		# code...

//if user exist, update records
$sql = "UPDATE members SET loan='$mLoan', savings='$mSavings',changeDate='$date' WHERE mNumber='$mNumber' AND mName='$mName' ";
$result = $conn->query($sql);

	if ($result) {
	# code...
		echo " Record modified successfully";
	} else {
	# code...
		die("Error encountered while updating the records! ".$result->error) ;
		}

	} else {
		# code...
		echo "No such user in our records";
	}
	
	
} else {
	# code...
	echo "Error encountered! ".$result->error;
}




$conn->close();

}
}
?>