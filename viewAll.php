<?php
session_start();
$mike=$_SESSION['validated'];
if($mike!="yes") {
	# code...
	session_destroy();
	header("Location:welcomePage.php?Error=Follow right channel");
}

require 'header.php';

?>

<div style="display: flex; font-weight: bold;flex-flow: column;">
<p id="memberName" style="align-self: center;">Member Name Here</p>
<p id="memberNumber" style="align-self: center;">Member No. Here</p>
</div>





<?php

require 'dbConnect.php';

$mNumber=$_SESSION['mNumber'];
$sql = "SELECT mNumber, mName, loan, savings FROM members ";
$result = $conn->query($sql);

echo "<button onclick='window.print();' class='button' styles='margin-left:90%;'>Print Page</button>";

if ($result->num_rows > 0) {
  // output data of each row

	echo "<table id='table' border='1px'>
	<tr><th>Member No.</th><th>Member Name</th><th>Member Savings</th><th>Member Loan</th><th>Balancing Figure <br>(saving-loan)</th></tr>
	<tbody>";

$totalBalFig=0;
$totalSavings=0;
$totalLoan=0;
  while($row = $result->fetch_assoc()) {

    $balFig=$row["savings"]-$row["loan"];
    $totalBalFig=$totalBalFig+$balFig;
    $totalSavings=$totalSavings+$row["savings"];
    $totalLoan=$totalLoan+$row["loan"];
     echo "<tr><td>" . $row["mNumber"]. "</td><td>" . $row["mName"]. "</td><td>" . $row["savings"]. "</td><td>" . $row["loan"]. "</td><td>" .$balFig. "</td></tr> ";
  }
  echo "<tr style='font-weight:bold;color:black;'><td colspan='2' align='center'><center>Totals</center></td><td>".$totalSavings."</td><td>".$totalLoan."</td><td>".$totalBalFig."</td></tr>";
  echo "<tbody></table>";

  
} else {
  echo "No records, please add records first!";
}
$conn->close();


echo "</div>
<div style='display: flex;flex-direction: row;justify-content: center;'>
<p >Total balancing-off figure is <p id='balFig' style='margin-left: 10px;background-color: cornflowerblue;padding: 5px;font-size:1.2em;'>Ksh. ".$totalBalFig."</p></p>
</div>";

?>









<?php
require 'footer.php';

?>
