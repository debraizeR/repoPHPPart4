<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function returnBonjour($lastname, $firstname, $age)
{
    return "Bonjour ".$lastname." ".$firstname." ".", tu as ".$age." ans";
}
echo returnBonjour("Debraize","Raphael", 23);

?>
</body>
</html>