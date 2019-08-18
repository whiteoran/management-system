<?php
include("header.php");
include("database.php");
?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr  = $passwordErr = "";
$name = $email = $gender = $form_password = "";
$new_name = $new_email = "";

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
  
  if(!empty($name) && !empty($form_password) && !empty($gender) && !empty($email)){
  
$sql = "UPDATE register SET name='$name' , email='$email' where user_id= " . $_POST["user_id"];

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

header('Location: /hrishita/sms/list.php');
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;  
}

?>

<?php

//print_r($_GET);

$sql = "SELECT * FROM register WHERE user_id = ". $_GET['user_id'];
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//echo "<pre>"; print_r($row); echo "</pre>";

?>

<h2>UPDATE FORM</h2>
<style>
.error {color: #FF0000;}
</style>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<input type="hidden" name="user_id" value="<?php echo $row['user_id']?>">
  Name: <input type="text" name="name" value="<?php echo $row['name']?>">
  <span class="error">* 
  <?php echo $nameErr;?>
  </span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $row['email']?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $row['password']?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="Update" value="update">
<?php

?>
  </form>
</body>