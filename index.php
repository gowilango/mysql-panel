<?php  session_start(); ?>
    <?php
if(isset($_SESSION['live']))
 {
    header("Location: admin.php");
 }
if(isset($_POST['login']))
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

     //
     //
     //password to login to the panel
     //
     //

      if($user == "admin@admin.com" && $pass == "password")
         {
          $_SESSION['live']=$user;
          echo '<script type="text/javascript"> window.open("admin.php","_self");</script>';
        }
        else
        {
          echo '<script type="text/javascript"> window.alert("Please, Check the Email and Password");</script>';
        }
}
 ?>
        <html>

        <head>
            <title>MySql-Panel</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        </head>

        <body style="background-color: black; margin-top: 14%;">
            <div class="container">
                <center>
                    <h3 style="color:white;">MySQL-Panel</h3>
                    <br>
                    <form action="" method="post">
                        <div class="form">
                            <div class="col-5">
                                <input type="email" class="form-control" placeholder="email" required name="user" />
                            </div>
                            <br>
                            <div class="col-5">
                                <input type="password" class="form-control" placeholder="password" required name="pass" />
                            </div>
                            <br>
                            <div class="col-auto">
                                <input class="btn btn-outline-primary" value="login" type="submit" name="login" />
                            </div>
                    </form>
                </center>
                </div>
        </body>

        </html>
