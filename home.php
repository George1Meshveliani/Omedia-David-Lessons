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
foreach ($ar as $key => $value) {
  echo '<li>'.$key." -- ".$value['name']."</li>";
}
      echo "<h3>Welcome:</h3>";
      echo $name;
      echo "<br>";
      echo $userName;
      echo "<br>"; 
  
?>
</html>