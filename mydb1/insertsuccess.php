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
      $sql_update="INSERT INTO users(uid,uname,ulastname,address,telephone) VALUES ('$_POST[uid]','$_POST[uid]','$_POST[ulastname]' ,'$_POST[address]' ,'$_POST[telephone]')";

      $result= $conn->query($sql_update);

      if(!$result) {
        die("Error God Damn it : ". $conn->error);
      } else {

     echo "Insert Success <br>";
     header("refresh: 1; url=main.php");
     }

    ?> 
</body>
</html>