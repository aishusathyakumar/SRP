<html>
   <head>
      <title>Connect to MariaDB Server</title>
   </head>

   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'aishwarya';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
      
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         
         echo 'Connected successfully';
         mysqli_close($conn);
      ?>
   </body>
</html>
