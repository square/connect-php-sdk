<?php
session_start();
require('vendor/autoload.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sandbox Dasboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		//get the access token from the page
		function setAccessToken() {
			var at = document.getElementById('access-token').value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					alert("Access Token set");
					console.log(this.responseText);
				}
			};
			xhttp.open("POST", "setter.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("at="+at);
		}
		function setLocation() {
			var location = document.getElementById('location-id').value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					alert("location id set");
					console.log(this.responseText);
				}
			};
			xhttp.open("POST", "setter.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("location="+location);
		}
	</script>
</head>
<body>
	<div id="navbar">

		<div id="top">
			<div id="navbar-logo"></div>
			<br>
			<br>
			<br>
			access token<br>
			<input id="access-token" onchange="setAccessToken()" value="<?php echo $_SESSION['at'];?>"><br>
			location id<br>
			<input id="location-id" onchange="setLocation()" value="<?php echo $_SESSION['location'];?>">
		</div>

		<div class="nav-item">
			<a href="/locations.php">Locations</a>
			<a href="/transactions.php">Transactions</a>
		</div>
	</div>