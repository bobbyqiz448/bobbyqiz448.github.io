<?php

if (!isset($_POST["mName"])) {
	header("Location:welcomePage.php");

	# code...
}


require 'header.php';

?>

<div id="containerAdmin" ">

	<div style="display: flex;font-weight: bold;flex-direction: column; ">
	<p id="admin" style="align-self: center;">Administrator</p>
	<p id="memberNumber" style="align-self: center;">Member No. Here</p>
	</div>
<form method="POST">
	<div id="buttons" style="width:100%; display: flex;flex-direction: row; justify-content: center;">
		
			<div style="display: flex;flex-direction: column; ">

				<button class="buttoni" type="submit" name="addMember_button" onclick=window.open("http://localhost/addMember.php")>Add Member</button>

				<button class="buttoni" type="submit" name="removeMember_button" onclick=window.open("http://localhost/removeMember.php")>Remove Member</button>
			</div>
			<div style="display: flex;flex-direction: column;">

				<button class="buttoni" type="submit" name="modifyRecord_button" onclick=window.open("http://localhost/modifyRecord.php")>Modify Records</button>

			 	<button class="buttoni" type="submit" name="viewAll_button" onclick=window.open("http://localhost/viewAll.php")>View All</button>

			</div>
		
	</div>

</form>

</div>




<?php
require 'footer.php';
?>