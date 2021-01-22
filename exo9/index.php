<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function returnBiggerNumber($int1, $int2)
{
    return max($int1, $int2);

    // if($int1 != $int2)
    // {
    //     if($int1<$int2)
    //     {
    //         return $int2;
    //     }
    //     else
    //     {
    //         return $int1;
    //     }
    // }
    // else
    // {
    //     return "les deux ont la même valeur";
    // }
}

function returnBiggerNumber2(...$int)
{
    rsort($int)
    return $int[0];
}

echo returnBiggerNumber(5,4);
echo returnBiggerNumber2(1,5,223,5,2235);


?>
</body>
</html>