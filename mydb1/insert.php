<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<form method="post" action="insertsuccess.php">
<h1>insert user</h1><br>  

       <p>
          <label>ID</label>
          <input type="text" name="uid" id="uid">
        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="uname" id="uname">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="ulastname" id="ulastname">

        </p>

        <p>

            <label>ที่อยู่</label>

            <input type="text" name="address" id="address">

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone">

        </p>
        <input type="submit" value="บันทึก">
        <a href='main.php'></a>
    </form>

</body>
</html>