<?php
include("database.php");

?>
<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:120px 18px">
  <h1 class="w3-margin w3-jumbo">WELCOME!</h1>
  <button class="w3-button w3-white w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

<div class="w3-container w3-light grey w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Work</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
  <a href="login.php" class="w3-bar-item w3-button">LOGIN</a>
  <a href="register.php" class="w3-bar-item w3-button">REGISTER</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">
<div class="w3-quarter">
<h2>Our Work</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
    <div class="w3-col m7">
  </div>

<script>
// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</body>
<?php

include("footer.php");

?>
