<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function returnFactoriel($intParam)
{
    // $fact = 1;
    // for($int = 1; $int <= $intParam; $int++)
    // {
    //     $fact = $fact * $int;
    // }
    // return $fact;

    return gmp_fact($intParam);

}

echo returnFactoriel(6);

function returnFactRecursive($intParam) //Bonus, fonction recursive qui retourne la factorielle du nombre entré en paramètre
{
    if($intParam === 0)
    {
        return 1;
    }
    else
    {
        return $intParam*returnFactRecursive($intParam-1);
    }  
}
echo returnFactRecursive(4);

?>
</body>
</html>