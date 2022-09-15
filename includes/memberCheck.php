<?php

require '../header.php';
?>

<div style="display: flex; font-weight: bold;flex-flow: column;">
<p id="memberName" style="align-self: center;">Member Name Here</p>
<p id="memberNumber" style="align-self: center;">Member No. Here</p>
</div>





<?php

require '../dbConnect.php';


$mNumber=$_SESSION['mNumber'];
$mName=$_SESSION['mName'];
$mPassword=$_SESSION['mPassword'];

$mName = $conn->real_escape_string($mName);
$mNumber = $conn->real_escape_string($mNumber);
$mPassword = $conn->real_escape_string($mPassword);
//$mLoan = $conn->real_escape_string($_REQUEST['mLoan']);
//$mSavings = $conn->real_escape_string($_REQUEST['mSavings']);
//$mName = $conn->real_escape_string($_REQUEST['mName']);
//$date = $conn->real_escape_string($_REQUEST['date']);
//$mPassword=password_verify(password, hash)

$mName=ucwords($mName);
$mNumber=strtoupper($mNumber);

$sql1 = "SELECT mNumber, mName,mPassword FROM members WHERE mNumber='$mNumber' AND mName='$mName' ";
$result1 = $conn->query($sql1);
$balFig=null;

if ($result1->num_rows > 0) {

  $row = $result1->fetch_assoc();
  $pwd=$row['mPassword'];

  if (password_verify($mPassword, $pwd)) {
    # code...
    
          # code...
            $sql = "SELECT mNumber, mName, loan, savings FROM members WHERE mNumber = '$mNumber' AND mName='$mName'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row

          echo "<table id='table' border='1px'>
          <caption style='color:white;font-weight:bold;font-size:1.2em;'>My Records</caption>
          <tr><th>Member No.</th><th>Member Name</th><th>Member Loan</th><th>Member Savings</th><th>Balancing Figure</th></tr>
          <tbody>";


          while($row = $result->fetch_assoc()) {
            $balFig=$row["savings"]-$row["loan"];
             echo "<tr><td>" . $row["mNumber"]. "</td><td>" . $row["mName"]. "</td><td>" . $row["loan"]. "</td><td>" . $row["savings"]. "</td><td>" . $balFig. "</td></tr> ";
          }
          echo "<tbody></table>";
          echo "</div>
            <div style='display: flex;flex-direction: row;justify-content: center;''>
            <p >My balancing-off figure is <p id='balFig' style='margin-left: 10px;background-color: white;color:purple;padding:5px;'>Ksh. ".$balFig."</p></p>
            </div>";
        } else {
          echo "No such user in the records!";
        }
  } else {
    # code...
    echo("<center><p style='color:red;font-size:1.5em;align-self:center;' onload='window.alert('Attempt failed!');'>Invalid Password "." Kindly try again</p></center>");
    
  }
  


}else{
  echo "Query failed due to lack of record with such details in database!";//.$result1->error;
}






$conn->close();



?>









<?php
require '../footer.php';

?>
