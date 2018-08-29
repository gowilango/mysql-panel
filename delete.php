<?php
include("connection.php");
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM news WHERE id=$id");
header("Location:index.php");
?>
