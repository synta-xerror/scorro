<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaasje</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nummer">
        <input type="submit">
    </form>
</body>
</html>

<?php
$n = $_POST['nummer'] -1;
$i = 0;

while ($i <= $n) {
    $i++;
    prime($i);
}

function prime($i)
{
    //1 is geen prime
    if ($i== 1) {
        echo "<div style='background-color:red;'>1 is geen prime</div>";
    }
    // enigste even prime getal
    if ($i == 2) {
        echo "<div style='background-color:green;'>2 is een prime</div>";
    }

    //ene vander gek algortitme berekent de wortel
    $x = sqrt($i);
    //rond het af
    $x = floor($x);
    //hokespokes berekening om kijken of prime is
    for ($b = 2 ; $b <= $x ; ++$b) {
        if ($i % $b == 0)
        break;
    }

if ($i === 1 or $i === 2) {
    } else if ($x == $b -1) {
        echo "<div style='background-color:green;'> " . $i . " is een prime</div>";
    } else {
        echo "<div style='background-color:red;'> " . $i . " is geen prime</div>";
    }
}
?>