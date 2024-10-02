<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      require 'conn.php';
      $sql_update="INSERT INTO movies(mid,mname,mtype,mtime,mdate) VALUES ('$_POST[mid]','$_POST[mname]','$_POST[mtype]' ,'$_POST[mtime]' ,'$_POST[mdate]')";

      $result= $conn->query($sql_update);

      if(!$result) {
        die("Error God Damn it : ". $conn->error);
      } else {

     echo "Insert Success <br>";
     header("refresh: 1; url=mainmovie.php");
     }

    ?> 
</body>
</html>