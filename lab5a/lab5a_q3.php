<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 4;
        $height = 2;
        $area = calculateArea($width, $height);
    ?>
    <p><b>The area of a rectangle with a width of <?php echo $width; ?> and a height of <?php echo $height; ?> is <?php echo $area; ?>.</b></p>
</body>
</html>
