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
        if(!isset($_GET['mid'])){
            header("refresh: 0; url=mainmovie.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movies WHERE mid='$_GET[mid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editsuccess2.php">
        <p>
            <label>ID<label>
            <input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" />
        </p>
    
        <p>

            <label>ชื่อ</label>
            <input type="text" name="mname" id="mname" value="<?=$row['mname'];?>" />

        </p>

        <p>

            <label>ประเภท</label>

            <input type="text" name="mtype" id="mtype" value="<?=$row['mtype'];?>" />

        </p>

        <p>

            <label>ระยะเวลา</label>

            <input type="time" name="mtime" id="mtime" value="<?=$row['mtime'];?>" />

        </p>

        <p>

            <label>วันที่</label>

            <input type="date" name="mdate" id="mdate" value="<?=$row['mdate'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href="mainmovie.php" class="home-button">Home</a>
    </form>

</body>
</html>