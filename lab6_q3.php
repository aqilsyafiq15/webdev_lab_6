<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        // Calculate area of a rectangle
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 4;
        $height = 2;
        $area = calculateArea($width, $height);

        echo "<strong>The area of a rectangle with a width of $width and $height is $area</strong>";
    ?>
</body>
</html>
