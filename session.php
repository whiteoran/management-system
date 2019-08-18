<?php
include('header.php');
include('database.php');
?>
<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:128px 16px">
		<h1 class="w4-margin w4-jumbo">YOUR DETAILS!</h1>
  <br><br>
  <button class="w3-button w3-white w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>


<!DOCTYPE html>
<html>
<body>
<?php
echo "Name:  " . $_SESSION["name"] . ".<br>";
echo "email id: " . $_SESSION["email"] . ".<br>";
echo "gender: " . $_SESSION["gender"] . ".<br>";
echo "role: " . $_SESSION["role"] . ".<br>";
echo "user_id: " . $_SESSION["user_id"] . ".";
?>                 
</body>
</html>