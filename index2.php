
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
      <a href="index2.php">Registration</a>
    </li>
  </ul>
</nav>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $password= $repeatPasswordErr = "";
$name = $userName = $password = $repeatPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["username"])) {
    $userNameErr = "username is required";
  } else {
    $userName = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $userName = test_input($_POST["password"]);
  }
    
  

}

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
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Username: <input type="text" id="username" name="username" >
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Password: <input type="password" name="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
  title="Must contain at least one number and one uppercase 
  and lowercase letter, and at least 12 or more characters" onkeyup="check()">
  <span class="error" >* <?php echo $passwordErr;?></span>

  <input id="checkbox" type="checkbox" onclick="showPassword()">Show Password
  <br></br>
  Repeat Password: <input type="password" id="rpsw"
   name= "repeatPassword" onkeyup="check()">
  <span class="error"  >* <?php echo $repeatPasswordErr;?></span>
  <h2 id='message'>If I am green it's matching else try again </h2>

  <input type="submit"  name="submit" id="mess1"
   >  

  <div id="mess">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>12 characters</b></p>
  </div>


</form> 
<script> 
document.addEventListener('DOMContentLoaded',function(){
    document.getElementById('getMessage').onclick=function(){
      var req = new XMLHttpRequest();
      req.open('GET', '/jason/example.com/public1/index2.php.json', true);
      req.send();
      req.onload = function(){
        var json=JSON.parse(req.responseText);
        document.getElementsByClassName('mess1')[0].innerHTML = JSON.stringify(json)
      }
      
    };
  }); </script> 
<script src="index2.js">  </script> 


 <?php
      echo "<h3>Welcome:</h3>";
      echo $name;
      echo "<br>";
      echo $userName;
      echo "<br>"; 
  
      ?>

</body>
</html>

