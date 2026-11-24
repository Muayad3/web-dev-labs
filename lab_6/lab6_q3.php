<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 5;
        $height = 3;
        $area = calculateArea($width, $height);

        echo "<b>The area of a rectangle with a width of $width and a height of $height is $area</b>";
    ?>
</body>
</html>
