<?php

require 'header.php';
?>

<div style="display: flex; font-weight: bold;flex-flow: column;">
<p id="memberName" style="align-self: center;">Member Name Here</p>
<p id="memberNumber" style="align-self: center;">Member No. Here</p>
</div>





<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warssystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$mNumber=$_SESSION['mNumber'];
$sql = "SELECT mNumber, mName, loan, balFig, savings FROM members WHERE mNumber = '$mNumber'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

	echo "<table id='table' border='1px'>
	<tr><th>Member No.</th><th>Member Name</th><th>Member Loan</th><th>Member Savings</th><th>Balancing Figure</th></tr>
	<tbody>";


  while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["mNumber"]. "</td><td>" . $row["mName"]. "</td><td>" . $row["loan"]. "</td><td>" . $row["savings"]. "</td><td>" . $row["balFig"]. "</td></tr> ";
  }
  echo "<tbody></table>";
} else {
  echo "0 results";
}
$conn->close();



?>







</div>
<div style="display: flex;flex-direction: row;justify-content: center;">
<p >My balancing-off figure is <p id="balFig" style="margin-left: 10px;background-color: cornflowerblue;">Ksh. 00.00</p></p>
</div>

<?php
require 'footer.php';

?>
