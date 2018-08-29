<?php   session_start();  ?>

<?php
      if(!isset($_SESSION['live']))
       {
           header("Location: index.php");
       }
?>
<?php
include_once("connection.php");
$result = mysqli_query($con, "SELECT * FROM news ORDER BY id DESC");
?>
<html>
<head>
	<title>MySQL-Panel</title>
</head>

<body style="background-color: black">

<style>
td, tr, h3{
	color: white !important;
}
</style>

	<div class="container"><br>
		<h3>MySQL-Panel &nbsp; <a class="btn btn-outline-primary" href="add.php">Add</a> <a class="btn btn-outline-danger float-right" href="logout.php">Logout</a></h3>

	<table class="table">
	<tr>
		<td>id</td>
		<td>title</td>
		<td>des</td>
		<td>link</td>
		<td>date</td>
		<td></td>

	</tr>

	<?php
	while($getnews = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$getnews['id']."</td>";
		echo "<td>".$getnews['title']."</td>";
		echo "<td>".$getnews['des']."</td>";
		echo "<td>".$getnews['link']."</td>";
		echo "<td>".$getnews['tdate']."</td>";
		echo "<td><a class=\"btn btn-outline-warning\" href=\"edit.php?id=$getnews[id]\">Edit</a>  <a class=\"btn btn-outline-danger\" href=\"delete.php?id=$getnews[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "</tr>";
	}
	?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>

	</tr>
	</table>

</div>
</body>
</html>
