<html>
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

$usersInfo = file_get_contents("users.json");
$resultedInfo =  json_decode($userinfo, true);

      echo "<h3>Welcome:</h3>";
      echo $name;
      echo "<br>";
      echo $userName;
      echo "<br>"; 
  
?>
</html>