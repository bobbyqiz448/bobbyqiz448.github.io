<?php
require 'header.php';
?>
<div style="display:flex; flex-direction: column;">
<p style="align-self: center;">Logging in as a Member</p>
</div>
<?php

if (isset($_GET['Error'])) {
	# code...
	echo "<center><p id='error' >Input all fields</p></center>";
}


?>
<form action="includes/memberValidate.php" method="POST">
<div class="details" style="display: flex;flex-direction: column;background-color: black;max-width: 50%;margin-left: 25%;">
	<div class="yetu" ><label>Name : </label><input type="text" name="mName" placeholder="Helena Ken"></div>
	<div class="yetu" ><label>Member No.:</label><input type="text" name="mNumber" placeholder="WN07"></div>
	<div class="yetu" ><label>Password</label><input type="Password" name="mPassword" placeholder="qw22e*36H#Qz"></div>
	<button type="submit" name="login_submit" class="buttoni" style="max-width: 34%;align-self: center;">Log In</button>


</div>
</form>


<?php
require 'footer.php';
?>