<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
   $db_name="mysql-panel"; // database name
   $db_user="root"; // database username
   $db_pass="root"; // database password
   $db_host="localhost"; // domain (example : igowtham.com)

   $con=mysqli_connect("$db_host","$db_user","$db_pass","$db_name");

  if (!$con)
   {
   echo
   ('
   <script>
   console.log("connection error");
   </script>
   ');
   }

   else
   {
   echo
   ('
   <script>
   console.log("connected");
   </script>
   ');
   }
   ?>
