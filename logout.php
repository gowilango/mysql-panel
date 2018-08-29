<?php
  session_start();
  echo "Logout Successfully ";
  session_destroy();
  header("Location: index.php");
?>