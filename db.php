<html>
   <head>
      <title>Create a MariaDB Database</title>
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

         echo 'Connected successfully<br />';
         $sql = 'CREATE DATABASE CORPORATE';
        $retval = mysqli_query( $sql, $conn);
         
        if(! $retval ) {
            die('Could not create database: ' . mysqli_error());
         }

         
         echo "Database CORPORATE created successfully\n";
         mysqli_close($conn);
      ?>
   </body>
</html>
