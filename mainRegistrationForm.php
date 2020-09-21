
<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="http://example.com/public1/style.css" type="text/css">
<body>  
<nav id="navbar" class="nav">
  <ul class="nav-list">
    <li>
      <a href="home.php">Home</a>
    </li>
    <li>
      <a href="mainRegistrationForm.php">Registration</a>
    </li>
  </ul>
</nav>

<?php
// define variables and set to empty values
//$nameErr = $userNameErr = $password= $repeatPasswordErr = "";
$name = $username = $password = $repeatPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = test_input($_POST["name"]);
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
}


  // if (empty($_POST["name"])) {
  //   $nameErr = "Name is required";
  // } else {
  //   $name = test_input($_POST["name"]);
  // }
  
  // if (empty($_POST["username"])) {
  //   $userNameErr = "username is required";
  // } else {
  //   $userName = test_input($_POST["username"]);
  // }

  // if (empty($_POST["password"])) {
  //   $passwordErr = "Password is required";
  // } else {
  //   $password = test_input($_POST["password"]);
  // }
    



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<h2>PHP/HTML Example</h2>
<p><span class="error">* required field</span></p>
<form name="regForm" method="post" 
action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Full Name: <input type="text" id="name" name="name" >

  <br><br>
  Username: <input type="text" id="username" name="username" >
  
  <br><br>

  Password: <input type="password" name="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
  title="Must contain at least one number and one uppercase 
  and lowercase letter, and at least 12 or more characters" onkeyup="check()">
 >

  
  <input id="checkbox" type="checkbox" onclick="showPassword()">Show Password
  <br></br>

  Repeat Password: <input type="password" id="rpsw"
   name= "repeatPassword" onkeyup="check()">
  
  <h2 id='message'>If I am green it's matching else try again </h2>

  <input type="submit"  name="submit" id="mess1">  

  <div id="mess">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>12 characters</b></p>
  </div>


</form>  



<?php

  //Send user information and encrypted password to json file  

  $password = password_hash($password, PASSWORD_ARGON2I);
  
  $ar = array(
      "name" => $name,
      "username" => $username, 
      "password" => $password,
  );

  file_put_contents("users.json", json_encode($ar));



?>

<script src="frontRegistration.js">  </script> 


 <?php
 foreach ($ar as $key => $value) {
  echo '<li>'.$key."-".$value['name']."</li>";
}

      echo "<h3>Welcome:</h3>";
      echo $name;
      echo "<br>";
      echo $username;
      echo "<br>"; 
      echo "<p>Your special ID is:</p>";
      echo uniqid();

  
      ?>

</body>
</html>

