<?php
include('header.php');
include('database.php');
?>

<?php 
if(isset($_SESSION['role']) && $_SESSION['role'] != 'Teacher'){
	header('Location:/hrishita/sms/index.php');
}
?>
	
<?php
$sql = "SELECT * FROM register";
$result = $conn->query($sql);
?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
	<h1 class="w4-margin w4-jumbo">EDIT!</h1>
  <br><br>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

<table width="100" border="3" cellspacing="2" cellpadding="2"> 
<tr> 
          <td> <font face="Arial">NAME</font> </td> 
          <td> <font face="Arial">EMAIL</font> </td> 
          <td> <font face="Arial">GENDER</font> </td> 
   		  <td> <font face="Arial">ROLE</font> </td>
		  <td> <font face="Arial">EDIT</font> </td> 
		  <td> <font face="Arial">DELETE</font> </td>

</tr>

<?php
$NAME = $EMAIL = $GENDER = $ROLE ="";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
?>
<tr> 
          <td> <font face="Arial"><?php echo $row["name"] ?></font> </td> 
          <td> <font face="Arial"><?php echo $row["email"] ?></font> </td>        
          <td> <font face="Arial"><?php echo $row["gender"] ?></font> </td> 
          <td> <font face="Arial"><?php echo $row["role"] ?></font> </td> 
 <td> <font face="Arial">
<a href="Update.php?user_id=<?php echo $row["user_id"]; ?>">Update</a>          
</td>

<td> <font face="Arial"> 
<a href="delete.php?user_id=<?php echo $row["user_id"]; ?>">Delete</a>   
</td>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

<?php
include("footer.php");
?>