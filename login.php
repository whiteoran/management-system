<?php
include('header.php');
include('database.php');
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$form_password = $_POST["password"];

	$sql = "SELECT * FROM register WHERE name='$name' AND password='$form_password'";
	//echo $sql;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) { //print_r($row); exit;
			
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
            $_SESSION['gender'] = $row['gender'];
			$_SESSION['role'] = $row['role'];		// In this place itself, you have role value.. so u dont need to write another logic.		
		}
		// header('Location: /hrishita/sms/session.php');
		
		switch( $_SESSION['role'] ){

				case 'Student':
				header('Location: /hrishita/sms/session.php');
					exit();

				case 'Teacher':
					header('Location: /hrishita/sms/list.php');
					exit();
					
				default:
					echo "Wrong Username or Password";
			}
		
	}
}

?> 

<!--doctype html-->
<!-- Header -->

<header class="w3-container w3-black w3-center" style="padding:128px 16px">
		<h1 class="w4-margin w4-jumbo">LOGIN!</h1>
  <br><br>
<button class="w3-button w3-white w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

<div class="w3-container w3-center w3-opacity w3-padding-64">

	<?php
	  if(isset($found)){
		echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="index.php">Please try again</a></p>';
	  }
	?>
	
		<h2>LOGIN</h2>
		<br>
	<form action="login.php" method="POST">
		NAME: <input type="text" placeholder="Enter your name" name="name">
		<br><br>

		PASSWORD: <input type="password" placeholder="Enter your password"  value="" id="myInput" name="password">
		<br><br>
		
		<input type="checkbox" onclick="myFunction()">Show Password
		<br><br>


<script>
	function myFunction() {
	  var x = document.getElementById("myInput");
	  if (x.type === "password") {
		x.type = "text";
	  } else {
		x.type = "password";
	  }
	}
</script>

		<input type = "SUBMIT" name="submit" value="LOGIN">
		<input type = "reset"  name="RESET" value="RESET">
	</form>
</div>

	<?php
	include('footer.php');
	?>