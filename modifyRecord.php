<?php
require 'header.php';
?>
<div style="display:flex; flex-direction: column;">
<p style="align-self: center;">Modifying Records</p>
</div>

<?php

if (isset($_GET['Error'])) {
	# code...
	echo "<center><p id='error'>Input all fields</p></center>";
}
?>

<form action="dbModify.php" method="POST">
<div class="details" style="display: flex;flex-direction: column;background-color: black;max-width: 50%;margin-left: 25%;">
	<div class="yetu" ><label>Name : </label><input type="text" name="mName" placeholder="Helena Ken"></div>
	<div class="yetu" ><label>Member No.:</label><input type="text" name="mNumber" placeholder="WN07"></div>	
	<div class="yetu" ><label>Loan</label><input type="text" name="mLoan" placeholder="Ksh. " ></div>
	<div class="yetu" ><label>Savings</label><input type="text" name="mSavings" placeholder="Ksh. " ></div>
	<div class="yetu" ><label>Date</label><input type="date" name="date" placeholder="20/11/2020" required="" ></div>
	<button name="saveChanges_button" class="buttoni" style="max-width: 34%;align-self: center;">Save Changes</button>


</div>
</form>


<?php
require 'footer.php';
?>