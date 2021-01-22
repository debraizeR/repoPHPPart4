<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function returnSum($int1 = 5, $int2 = 5, $int3 = 5)
{
    return $int1 +$int2+$int3;
}
echo returnSum(1, 2, 3);

function returnMultiSum(...$int) /* Bonus, fonction qui retourne la somme d'un nombre variable de paramètres */ 
{
    $sum = 0;
    foreach($int as $i)
    {
        $sum = $sum + $i;
    }
    return $sum;
}

echo returnMultiSum(1,2,3,4,5);

?>
</body>
</html>