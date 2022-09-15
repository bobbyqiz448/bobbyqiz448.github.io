<?php
require 'header.php';
?>
<div style="display:flex; flex-direction: column;">
<p style="align-self: center;">Adding Member</p>
</div>

<?php

if (isset($_GET['Error'])) {
	# code...
	echo "<center><p id='error'>Input all fields</p></center>";
}
?>

<form method="POST" action="dbInsert.php">
<div class="details" style="display: flex;flex-direction: column;background-color: black;max-width: 50%;margin-left: 25%;">
	<div class="yetu" ><label>Name : </label><input type="text" name="mName" placeholder="Helena Ken"></div>
	<div class="yetu" ><label>Member No.:</label><input type="text" name="mNumber" placeholder="WN07"></div>
	<div class="yetu" ><label>Password</label><input type="Password" name="mPassword" placeholder="qw22e*36H#Qz"></div>
	<button name="addNew_button" class="buttoni" style="max-width: 34%;align-self: center;">Add New</button>


</div>
</form>


<?php
require 'footer.php';
?>