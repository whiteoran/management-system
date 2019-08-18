<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "<pre>"; print_r($_GET); echo "</pre>";

$sql = "DELETE FROM register where user_id= " . $_GET["user_id"];

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
  
  header('Location: /hrishita/sms/list.php');
  
?>
