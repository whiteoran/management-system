
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-theme-d2
	w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu">
	<i class="fa fa-bars"></i></a>
   <a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="login.php" class="w3-bar-item w3-button">LOGIN</a>
  <a href="register.php" class="w3-bar-item w3-button">REGISTER</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

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
