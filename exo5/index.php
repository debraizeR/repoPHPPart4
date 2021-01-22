<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function returnStringInt($string, $int)
{
    return $string." ".$int;
}
echo returnStringInt("Le nombre est:", 6);
?>
</body>
</html>