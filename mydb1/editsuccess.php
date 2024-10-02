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
            $sql_update="UPDATE users SET uname='$_POST[uname]',ulastname='$_POST[ulastname]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' WHERE uid='$_POST[uid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=main.php");
            }

        ?>

</body>
</html>