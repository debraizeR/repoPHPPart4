<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function returnGender($age, $gender)
{
    if($age >= 18) //elseif
    {
        if($gender == "Homme")
        {
            return "Vous êtes un homme et vous êtes majeur";
        }
        if($gender == "Femme")
        {
            return "Vous êtes une femme et vous êtes majeure";
        }
    }
    else
    {
        if($gender == "Homme")
        {
            return "Vous êtes un homme et vous êtes mineur";
        }
        if($gender == "Femme")
        {
            return "Vous êtes une femme et vous êtes mineure";
        }
    }
}
echo returnGender(17,"Homme");

?>
</body>
</html>