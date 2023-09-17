<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

// a = 1, 11, 21, 31, 41, 51, 61, 71, 81, 91
// ata bojar jonna https://youtu.be/XDHWyeTu0pQ?si=Lo4LQdz7Q7zEBVth
for ($a = 1; $a <= 100; $a = $a + 10) {

    // a = 1, b = 1, 2, 3, 4, 5, 6, 7, 8, 9, 10
    // a = 11, b = 11, 12, 13, 14, 15, 16, 17, 18, 19, 20

    for ($b = $a; $b < $a + 10; $b++) {

        // b = 1, 1 < 1 + 10
        // b = 2, 2 < 1 + 10
        // b = 3, 3 < 1 + 10
        // b = 4, 4 < 1 + 10
        // b = 5, 5 < 1 + 10
        // b = 6, 6 < 1 + 10
        // b = 7, 7 < 1 + 10
        // b = 8, 8 < 1 + 10
        // b = 9, 9 < 1 + 10
        // b = 10,10 < 1 + 10

        echo $b . " ";

    }

    echo "<br>";

}



?>
</body>
</html>
