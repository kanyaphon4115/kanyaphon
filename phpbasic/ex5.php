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
         function test($n)
        {
           return $n % 13 == 0 || $n % 13 == 1;
        }
           var_dump(test(13));
           echo "<br>";
           var_dump(test(14));
           echo "<br>";
           var_dump(test(27));
           echo "<br>";
           var_dump(test(41));
    ?>
</body>
</html>