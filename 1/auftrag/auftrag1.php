<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Auftrag 1</h1>

        <?php

            for ($i = 1; $i <= 100; $i++) {
            echo "<br>";
            echo "<p style='font-size:" . $i . "px'> $i </p>";
            }
        ?>
    </body>
</html>