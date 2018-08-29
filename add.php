<?php   session_start();  ?>

<?php
      if(!isset($_SESSION['live']))
       {
           header("Location: index.php");
       }
?>

<?php
include_once("connection.php");
if(isset($_POST['Submit'])) {
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$des = mysqli_real_escape_string($con, $_POST['des']);
	$link = mysqli_real_escape_string($con, $_POST['link']);
	$tdate = mysqli_real_escape_string($con, $_POST['tdate']);
	$result = mysqli_query($con, "INSERT INTO news(title,des,link,tdate) VALUES('$title','$des','$link','$tdate')");
	header("Location: admin.php");
}
?>

<html>

<head>
	<title>Add</title>
</head>


            <body style="background-color: black;">

                <style>
                    * {
                        color: white;
                    }
                </style>

                <center>
                    <div class="container">
                        <br>
                        <br>
                        <h4>Add</h4>
                        <br>

                        <form action="add.php" method="POST">
                            <div class="form">
                                <div class="col-7">
                                    <input type="text" class="form-control" placeholder="title" required name="title" />
                                </div>
                                <br>
                                <div class="col-7">
                                    <input type="text" class="form-control" placeholder="desc" name="des" />
                                </div>
                                <br>
                                <div class="col-7">
                                    <input type="text" class="form-control" placeholder="link" name="link" />
                                </div>
                                <br>
                                <div class="col-7">
                                    <input type="text" class="form-control" placeholder="date" name="tdate" />
                                </div>
                                <br>
                                <div class="col-auto">
                                    <input class="btn btn-outline-primary" type="Submit" value="Add" name="Submit" />
                                    <a href="admin.php" class="btn btn-outline-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </center>
            </body>

</html>
