<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function returnNumberSize($int1,$int2)
{
    if($int1==$int2) //elseif
    {
        return "Les deux nombres sont identiques";
    }
    elseif($int1>$int2)
    {
        return "Le premier nombre est plus grand";
    }
        elseif($int1<$int2)
    {
            return "Le premier nombre est plus petit";
    }
    else{
        return "Entrez des valeurs compatibles";
    }
}

echo returnNumberSize(3,4);
?>
</body>
</html>