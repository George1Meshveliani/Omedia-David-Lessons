
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {
  color: #FF0000;
  }
/*body {
  text-align: center;
}*/
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}

body {
  /*margin-left: 250px;
  margin-right: 250px;*/
  margin: 0 auto;
  width: 500px;
}



</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $password= $repeatPasswordErr = "";
$name = $email = $password = $repeatPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $email = test_input($_POST["email"]);
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Full Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Username: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Password: <input type="password" name="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
  title="Must contain at least one number and one uppercase 
  and lowercase letter, and at least 12 or more characters">
  <span class="error">* <?php echo $passwordErr;?></span>

  <input type="checkbox" onclick="showPassword()">Show Password
  <br></br>
  Repeat Password: <input type="password" id="rpsw" name= "repeatPassword">
  <span class="error">* <?php echo $repeatPasswordErr;?></span>
  <br></br>

  <input type="submit"  name="submit" 
  value="Submit" onclick = checkPasswordValidation()>  

  <div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>12 characters</b></p>
  </div>


</form> 

<script src="index2.js">  </script> 


 


<?php
echo "<h3>Welcome:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
?>

</body>
</html>

