<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="mystyle5.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยินดีตอนรับ</title>
</head>
<body>
    <div class="background"></div>
    <h1 class="welcome"> welcome to my websit </h1>
       <div class="message">
         <?php
            $showuser = $_POST['username'];
            echo "Welcome to cs supermarket website: $showuser";
         ?>
       </div>
          <div class="form">
            <form action="shopping.html">
            shopping click here! <input type="submit" name="shop" value="shopping here!">
            </form>
          </div>
</body>
</html>


