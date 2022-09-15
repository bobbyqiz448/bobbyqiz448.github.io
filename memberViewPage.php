<?php
//session_start();

$valid="no";
$valid=$_SESSION['validated'];
session_destroy();
if($valid=="yes") {
	# code...
	require 'memberCheck.php';;
}else{
	# code...
	header("Location: ../welcomePage.php");
}

//if (!isset($_SESSION['memberName'])) {
	# code...
	//$_SESSION['validated']
	//
//} else {
	# code...
	//require 'includes/check.php';
//}
?>