<?php
require 'header.php';
?>
<div style="display:flex; flex-direction: column;">
<p style="align-self: center;">Logging in as an Administrator</p>
</div>
<?php

if (isset($_GET['Error'])) {
	# code...
	echo "<center><p id='error'>Input all fields</p></center>";
}




?>
<form action="includes/adminValidate.php" method="POST" >
<div class="details" style="display: flex;flex-direction: column;background-color: black;max-width: 50%;margin-left: 25%;">
	<div class="yetu" style="padding-top: 20px" ><input value="Good Man" type="text" name="mName" placeholder="Your Name"></div>
	<div class="yetu" ><input value="WN50" type="text" name="mNumber" placeholder="Membership Number"></div>
	<div class="yetu" ><input value="T123" type="Password" name="mPassword" placeholder="Password"></div>
	<button class="buttoni" type="submit" name="login_submit" style="max-width: 34%;align-self: center;">Log In</button>


</div>
</form>




<?php
require 'footer.php';
?>