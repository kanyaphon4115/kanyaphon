<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php
       require 'conn.php';
       $sql = "SELECT * FROM movies";
       $result = $conn->query($sql);
       if(!$result){
        die("Error : ". $conn->$conn_error);
       }
     ?>

<h1>ภาพยนต์</h1><br>  
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ</th>
                    <th>ประเภท</th>
                    <th>ระยะเวลา</th>
                    <th>วันที่</th>
                    <th> ธุรกรรม </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["mid"]."</td>"."<td>".$row["mname"]."</td>"."<td>".$row["mtype"]."</td>"."<td>".$row["mtime"]."</td>"."<td>".$row["mdate"]."</td>"."<td>"."<a href='edit2.php?mid=".$row["mid"]."'><button> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table> 
        <br>
        <a href='insert2.php'><button> Insert Movie</button></a>
        <a href='insert.php'><button> Insert Student</button></a>
     
</body>
</html>