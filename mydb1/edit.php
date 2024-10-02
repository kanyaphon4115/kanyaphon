<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
     <?php
        if(!isset($_GET['uid'])){
            header("refresh: 0; url=main.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM users WHERE uid='$_GET[uid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editsuccess.php">
        <p>
            <label>ID<label>
            <input type="text" name="uid" id="uid" value="<?=$row['uid'];?>" />
        </p>
    
        <p>

            <label>ชื่อ</label>
            <input type="text" name="uname" id="uname" value="<?=$row['uname'];?>" />

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="ulastname" id="ulastname" value="<?=$row['ulastname'];?>" />

        </p>

        <p>

            <label>ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href="main.php" class="home-button">Home</a>
    </form>

</body>
</html>