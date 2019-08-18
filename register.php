<?php

include("header.php");
include("database.php");

?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr  = $passwordErr = $roleErr ="";
$name = $email = $gender = $comment = $form_password = $role ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["password"])) {
$passwordErr = "please enter a valid password";
  } else {
$form_password = test_input($_POST["password"]);
  }
  
    if (empty($_POST["role"])) {
    $roleErr = "role is required";
  } else {
    $role = test_input($_POST["role"]);
  }
  
  if(!empty($name) && !empty($form_password) && !empty($gender) && !empty($email) && !empty($role)){
  
$sql = "INSERT INTO Register(name, email , gender , password , role)
VALUES ('$name', '$email', '$gender' , '$form_password' ,'$role')";
	//echo $sql; exit;
if ($conn->query($sql) === TRUE) {
//echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header('Location: /hrishita/sms/list.php');
//echo "New record created successfully";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;  
}
?>

<header class="w3-container w3-black w3-center" style="padding:128px 16px">
		<h1 class="w4-margin w4-jumbo">REGISTER!</h1>
  <br><br>
  <button class="w3-button w3-white w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

<div class="w3-container w3-center w3-opacity w3-padding-64">

<h2>REGISTERATION FORM</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
<style>
.error {color: #FF0000;}
</style>

  Name:
  <input type="text" placeholder="Enter name " name="name" required>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail:
  <input type="text" placeholder="Enter Email" name="email" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password:
  <input type="password" placeholder="Enter Password" name="password" required>
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Address:
  <textarea name="comment" placeholder="Enter your address" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  role
  <input type="radio" name="role" <?php if (isset($role) && $role=="Student") echo "checked";?> value="Student">Student
  <input type="radio" name="role" <?php if (isset($role) && $role=="Teacher") echo "checked";?> value="Teacher">Teacher
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
		
   <input type="checkbox" onclick="myFunction()">
	By creating an account you agree to our
    <a href="#">Terms & Privacy</a>
	<br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php

include("footer.php");

?>
