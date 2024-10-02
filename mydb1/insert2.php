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
<form method="post" action="insertsuccess2.php">
<h1>insert movie</h1><br>  

       <p>
          <label>ID</label>
          <input type="text" name="mid" id="mid">
        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="mname" id="mname">

        </p>

        <p>

            <label>ประเภท</label>

            <input type="text" name="mtype" id="mtype">

        </p>

        <p>

            <label>ระยะเวลา</label>

            <input type="time" name="mtime" id="mtime">

        </p>

        <p>

            <label>วันที่</label>

            <input type="date" name="mdate" id="mdate">

        </p>
        <input type="submit" value="บันทึก">
        <a href='mainmovie.php'></a>
    </form>

</body>
</html>