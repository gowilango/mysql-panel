<?php   session_start();  ?>

<?php
      if(!isset($_SESSION['live']))
       {
           header("Location: index.php");
       }
?>

<?php
include_once("connection.php");
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($con, $_POST['id']);
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$des = mysqli_real_escape_string($con, $_POST['des']);
	$link = mysqli_real_escape_string($con, $_POST['link']);
	$tdate = mysqli_real_escape_string($con, $_POST['tdate']);

	$result = mysqli_query($con, "UPDATE news SET title='$title', des='$des', link='$link', tdate='$tdate' WHERE id=$id");
	header("Location: index.php");

}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM news WHERE id=$id");

while($getnews = mysqli_fetch_array($result))
{
	$title = $getnews['title'];
	$des= $getnews['des'];
	$link = $getnews['link'];
	$tdate = $getnews['tdate'];
}
?>
<html>
<head>
	<title>Edit</title>
</head>
<body style="background-color: black;">

<style> *{color: white;} </style>

<center>
<div class="container"><br><br>
<h4>Edit</h4><br>
<form action="edit.php" method="POST">
  <div class="form">
   <input type="hidden" value="0" name="id"/>
    <div class="col-7">
      <input type="text" class="form-control" placeholder="title" value="<?php echo $title;?>" name="title"/>
    </div><br>
    <div class="col-7">
      <input type="text" class="form-control" placeholder="des" value="<?php echo $des;?>" name="des"/>
    </div><br>
    <div class="col-7">
      <input type="text" class="form-control" placeholder="link" value="<?php echo $link;?>" name="link"/>
    </div><br>
    <div class="col-7">
      <input type="text" class="form-control" placeholder="date" value="<?php echo $tdate;?>" name="tdate"/>
    </div><br>
    <div class="col-auto">
			<input type="hidden" name="id" value=<?php echo $_GET['id'];?> >
      <input class="btn btn-outline-warning" value="Update" name="update" type="submit"/> <a href="index.php" class="btn btn-outline-danger">Cancel</a>
    </div>
	</div>
</form>
</div>
</center>
</body>
</html>
