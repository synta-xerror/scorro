<form action="" id="parkeertijd" method="POST">
    <div class="divclass">
        <table id="verkeerstijd" name="time">
        <tr>
            <th style='border:0;outline:0;display:inline-block' >Dag</th>
            <th>Uren</th>
            <th>Minuten</th>

        </tr>
        <tr>
            <td>maandag</td>
            <td><input type="text" name='maandag' value='0'></td>
            <td><input type="text" name='maandagm' value='0'></td>

        </tr>
        <tr>
            <td>Dinsdag</td>
            <td><input type="text" name='dinsdag'  value='0'></td>
            <td><input type="text" name='dinsdagm' value='0'></td>

        </tr>
        <tr>
            <td>Woensdag</td>
            <td><input type="text" name='woensdag' value='0'></td>
            <td><input type="text" name='woensdagm' value='0'></td>

        </tr>
        <tr>
            <td>Donderdag</td>
            <td><input type="text" name='donderdag' value='0'></td>
            <td><input type="text" name='donderdagm' value='0'></td>

        </tr>
        <tr>
            <td>Vrijdag</td>
            <td><input type="text" name='vrijdag' value='0'></td>
            <td><input type="text" name='vrijdagm' value='0'></td>
        </tr>
        </table>
    </div>
<input type='submit' name='submit' value='Submit'>
</form>

<?php
if (!empty($_POST)) {
    $maandag = $_POST["maandag"] * 3600 + $_POST["maandagm"] * 60;
    $dinsdag = $_POST["dinsdag"] * 3600 + $_POST["dinsdagm"] * 60;
    $woensdag = $_POST["woensdag"] * 3600 + $_POST["woensdagm"] * 60;
    $donderdag = $_POST["donderdag"] * 3600 + $_POST["donderdagm"] * 60;
    $vrijdag = $_POST["vrijdag"] * 3600 + $_POST["vrijdagm"] * 60;

    $seconden = [$maandag, $dinsdag, $woensdag, $donderdag, $vrijdag];

    $totaals = array_sum($seconden);

    $werktijd = gmdate("H:i:s", $totaals);
    echo "Werktijd:" . $werktijd . "<br>";

    $langste = max($seconden);

    if ($langste == $maandag) {
        $langsted = "maandag";
    } elseif ($langste == $dinsdag) {
        $langsted = "dinsdag";
    } elseif ($langste == $woensdag) {
        $langsted = "woensdag";
    } elseif ($langste == $donderdag) {
        $langsted = "donderdag";
    } elseif ($langste == $vrijdag) {
        $langsted = "vrijdag";
    }
    echo "Langste werkdag:" . $langsted . "<br>";

    $werkdagen = 5;
    if ($maandag == 0) {
        $a = $werkdagen - 1;
    } if ($dinsdag == 0) {
        $b = $a - 1;
    } if ($woensdag == 0) {
        $c = $b - 1;
    } if ($donderdag == 0) {
        $d = $c - 1;
    } if ($vrijdag == 0) {
        $e = $d - 1;
    } else {
        $e = 5;
    }
    echo "werkdagen: " . $e;

}
?>