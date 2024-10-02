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
       $sql = "SELECT * FROM users";
       $result = $conn->query($sql);
       if(!$result){
        die("Error : ". $conn->$conn_error);
       }
     ?>

<h1>สมาชิก</h1><br>  
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th> ธุรกรรม </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["uid"]."</td>"."<td>".$row["uname"]." ".$row["ulastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a href='edit.php?uid=".$row["uid"]."'><button> Edit </button></a>"."</td>";
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
        <a href='insert.php'><button> Insert Student</button></a>
        <a href='insert2.php'><button> Insert Movies</button></a>
     
</body>
</html>