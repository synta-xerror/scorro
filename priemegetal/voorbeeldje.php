<?php

set_time_limit(0); // Om timeouts te vermijden bij grote getallen

// Loadtime bepalen
$starttime = microtime();
$startarray = explode(" ", $starttime);
$starttime = $startarray[1] + $startarray[0];

?>

<html>
<head>
<style type="text/css">
body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
}

table tr td {
    font-size: 12px;
    padding: 5px;
}

fieldset {
    border: 1px solid #555;
    width: 400px;
    margin: 5px;
    display: inline-block;
    vertical-align: top;
}

legend {
    padding: 5px;
}

input {
    border: 1px solid #CCC;
    padding: 2px;
}

hr {
    background: #EEE;
    border: 0;
    height: 1px;
}
    
</style>
<title>Priemgetallen</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Check Priemgetal</legend>
        <table>
            <tr>
                <td>Getal</td>
                <td><input type="text" size="4" name="number" /></td>
                <td><input type="submit" name="check" value="Controleer Getal" /></td>
              </tr>
          </table>
        <?php
        
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $number = $_POST['number'];
                if(isset($_POST['check']) && !empty($number) && is_numeric($number)) {
                    $gevondenDelers = 0;
                    for($i = 1; $i <= $number; $i++) {
                        $result = $number / $i;
                        if(is_int($result)) {
                            $gevondenDelers++;
                        }
                    }
                    if($gevondenDelers == 2) { // Precies 2 delers, 1 en zichzelf
                        echo '<span style="background: #DFFFE3; padding: 2px;">Het getal <b>' . $number . '</b> is een priemgetal.</span>';
                    }
                    else {
                        echo '<span style="background: #FFDFE3; padding: 2px;">Het getal <b>' . $number . '</b> is geen priemgetal.</span>';
                    }
                }
            }
            
        ?>
       </fieldset>
    
    <fieldset>
        <legend>Lijsten Priemgetallen</legend>
        <table>
            <tr>
                <td>Van</td>
                <td><input type="text" size="4" name="number1" /></td>
                <td>Tot</td>
                <td><input type="text" size="4" name="number2" /></td>
                <td><input type="submit" name="lijst" value="Maak Lijst" /></td>
               </tr>
           </table>
        <?php
        
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $columns = 10;
                if(isset($_POST['lijst']) && !empty($number1) && !empty($number2) && is_numeric($number1) && is_numeric($number2)) {
                    $i = $number1;
                    $totalNumbers = $number2 - $number1 + 1;
                    $tableDesignCount = 1;
                    $priemgetal = 0;
                    echo '<table style="width: 100%;">';
                    while($i <= $number2) {
                        if($tableDesignCount == 1) {
                            echo '<tr>';
                        }
                        $gevondenDelers = 0;
                        for($i2 = 1; $i2 <= $i; $i2++) {
                            $result = $i / $i2;
                            if(is_int($result)) {
                                $gevondenDelers++;
                            }
                        }
                        
                        echo '<td><span style="padding: 2px; background: #';
                        if($gevondenDelers == 2) {
                            echo 'DFFFE3';
                            $priemgetal++;
                        }
                        else {
                            echo 'FFDFE3';
                        }
                        echo '">' .  $i++ . '</span></td>';
                        if($tableDesignCount == $columns) {
                            echo '</tr>';
                            $tableDesignCount = 0;
                        }
                        $tableDesignCount++;
                    }
                    echo '</table>';
                    echo '<p>Er zijn ' . $priemgetal . ' getallen van de ' . $totalNumbers . ' (' . round(($priemgetal/$totalNumbers)*100) . '%) getallen priem.</p>';
                }
            }
            
        ?>
       </fieldset>
</form>
<?php
$endtime = microtime();
$endarray = explode(" ", $endtime);
$endtime = $endarray[1] + $endarray[0];
$totaltime = $endtime - $starttime;
$totaltime = round($totaltime, 3);
echo "<center>Loadtime: " . $totaltime . " seconds.";
?>
</body>
</html>

while ($a !== $nummer) {  
    if ($i == 1){
    echo $i . "geen prieme";
    }
    for ($i = 2; $i <= sqrt($nummer); $i++){ 
        if ($nummer % $i == 0) 
            echo $i . "Geen prieme";
    } 
    echo $i . "Is preme";
    $i++;
    echo ("<br>");
    echo $i;
}


?>