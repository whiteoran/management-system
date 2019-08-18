<?php session_start(); //echo "<pre>"; print_r($_SESSION); echo "</pre>";?>
<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-theme-d2
	w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu">
	<i class="fa fa-bars"></i></a>
   <a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>

	<?php if(isset($_SESSION['user_id'])){ ?>
		<a href="session.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Welcome, <?php echo $_SESSION['name']?>!</a>
	<?php } else{?>
		<a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">REGISTER</a>
	<?php }?>
	
	<?php if(isset($_SESSION['user_id'])){ ?>
		<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">LOGOUT </a>
	<?php } else{?>
		<a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">LOGIN</a>
	<?php }?>
	
	<?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'Teacher'){ ?>
		<a href="list.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">LIST </a>
	<?php } ?>
  </div>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
