<!DOCTYPE html>
<html style=" padding: 20px;background-color: #3C1874;">
<head>
	<title>WARS SYSTEM</title>

	<style type="text/css">
		
		body{background-color:  #12232E;padding: 10px;color: white;}
		table, th, td {border: 2px solid white;
						border-collapse: collapse;}
		th, td{padding: 9px;
				text-align: right;}
		table#table{width:60%;
					background-color: darkgreen;
					margin-left: 20%;padding: 10px;border-radius: 10px;}
		.buttoni{padding: 10px;margin:10px;background-color: #F033FF;border-radius: 20px;}
		.buttoni:hover{background-color: cornflowerblue;cursor:pointer; }
		#footer{background-color: darkblue;}
		#logIn{background-image: url("Sacco-savings.PNG");}
		.details{display: flex;flex-flow: column;}
		.yetu{align-self: center;margin:10px;display: flex; flex-direction: column;}
		th{background-color: lightgreen;color: black;}
		#error{color:red;}
		.error{color:red;font-size:1.2em;margin-top:10em;}

		
	</style>
	
</head>
<body >
	<center><h1>Wajane Automated Recording System<br>(WARS)</h1>
	
		<p id="motto" style="color: blue; font-size: 1.5em;">motto</p>
		<script type="text/javascript">
			var motto = document.getElementById("motto");
			
			setInterval(function(){

				motto.innerText="PAMOJA TWAPAA!";

				if(motto.style.color=="blue"){motto.style.color="red";}
				else if(motto.style.color=="red"){motto.style.color="green";}
				else if(motto.style.color=="green"){motto.style.color="blue"}

			},250)


		</script>
	</center><br>

	<p id="now"></p>
	
	<script type="text/javascript">
		var now=document.getElementById("now");
			now.style.color="pink";
		
		setInterval(function(){

			now.innerText=Date();
		},200)
		
	</script>		
	<hr size="5"><br>
	
	<div style="display: flex;flex-direction: row;">
		<div style="display: flex;object-position: left; "><button class="buttoni"  onclick=window.close()>Close Tab</button></div>

		<div style="display: flex; object-position: right;"><button class="buttoni"  onclick="window.location='http://localhost/welcomePage.php';">Home Page</button></div>
	</div>


</body>
