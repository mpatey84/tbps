<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //TEAM INFORMATION
    $teamname = $_POST["team_name"];
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];

    echo "Team Name: " . $teamname . "<br>";
    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Email: " . $email . "<br>";

    //ATLANTIC DIVISION
    $af1 = $_POST["af1"];
    $atlF1 = $_POST["fordbl"];
    $af2 = $_POST["af2"];
    $atlF2 = $_POST["fordbl"];
    $af3 = $_POST["af3"];
    $atlF3 = $_POST["fordbl"];
    $ad1 = $_POST["ad1"];
    $atlD1 = $_POST["dedbl"];
    $ad2 = $_POST["ad2"];
    $atlD2 = $_POST["dedbl"];
    $at = $_POST["at"];
    $atlT = $_POST["tdbl"];

    echo "Atlantic Forward 1: {$af1} <br>";
    echo "Atlantic Forward 2: {$af2} <br>";
    echo "Atlantic Forward 3: {$af3} <br>";
    echo "Atlantic Defense 1: {$ad1} <br>";
    echo "Atlantic Defense 2: {$ad2} <br>";
    echo "Atlantic Team: {$at} <br>";

    //METROPOLITAN DIVISON
    $mf1 = $_POST["mf1"];
    $metF1 = $_POST["fordbl"];
    $mf2 = $_POST["mf2"];
    $metF2 = $_POST["fordbl"];
    $mf3 = $_POST["mf3"];
    $metF3 = $_POST["fordbl"];
    $md1 = $_POST["md1"];
    $metD1 = $_POST["dedbl"];
    $md2 = $_POST["md2"];
    $metD2 = $_POST["dedbl"];
    $mt = $_POST["mt"];
    $metT = $_POST["tdbl"];

    echo "Metropolitan Forward 1: {$mf1} <br>";
    echo "Metropolitan Forward 2: {$mf2} <br>";
    echo "Metropolitan Forward 3: {$mf3} <br>";
    echo "Metropolitan Defense 1: {$md1} <br>";
    echo "Metropolitan Defense 2: {$md2} <br>";
    echo "Metropolitan Team: {$mt} <br>";

    //CENTRAL DIVISION
    $cf1 = $_POST["cf1"];
    $cenF1 = $_POST["fordbl"];
    $cf2 = $_POST["cf2"];
    $cenF2 = $_POST["fordbl"];
    $cf3 = $_POST["cf3"];
    $cenF3 = $_POST["fordbl"];
    $cd1 = $_POST["cd1"];
    $cenD1 = $_POST["dedbl"];
    $cd2 = $_POST["cd2"];
    $cenD2 = $_POST["dedbl"];
    $ct = $_POST["ct"];
    $cenT = $_POST["tdbl"];

    echo "Central Forward 1: {$cf1} <br>";
    echo "Central Forward 2: {$cf2} <br>";
    echo "Central Forward 3: {$cf3} <br>";
    echo "Central Defense 1: {$cd1} <br>";
    echo "Central Defense 2: {$cd2} <br>";
    echo "Central Team: {$ct} <br>";

    //PACIFIC DIVISION
    $pf1 = $_POST["pf1"];
    $pacF1 = $_POST["fordbl"];
    $pf2 = $_POST["pf2"];
    $pacF2 = $_POST["fordbl"];
    $pf3 = $_POST["pf3"];
    $pacF3 = $_POST["fordbl"];
    $pd1 = $_POST["pd1"];
    $pacD1 = $_POST["dedbl"];
    $pd2 = $_POST["pd2"];
    $pacD2 = $_POST["dedbl"];
    $pt = $_POST["pt"];
    $pacT = $_POST["tdbl"];

    echo "Pacific Forward 1: {$pf1} <br>";
    echo "Pacific Forward 2: {$pf2} <br>";
    echo "Pacific Forward 3: {$pf3} <br>";
    echo "Pacific Defense 1: {$pd1} <br>";
    echo "Pacific Defense 2: {$pd2} <br>";
    echo "Pacific Team: {$pt} <br>";

}
if (isset($_POST["fordbl"])) {
    $forwardDblPts = $_POST["fordbl"];
    // Now $selectedValue contains the unique value of the selected radio button in the 'fordbl' group.
    // Perform actions based on $selectedValue.
} else {
    // No radio button in the 'fordbl' group was selected.
}
echo "Forward selected for double points: {$forwardDblPts}<br>";

if (isset($_POST["dedbl"])) {
    $defenseDblPts = $_POST["dedbl"];
    // Now $selectedValue contains the unique value of the selected radio button in the 'fordbl' group.
    // Perform actions based on $selectedValue.
} else {
    // No radio button in the 'fordbl' group was selected.
}
echo "Defense selected for double points: {$defenseDblPts}<br>";

if (isset($_POST["tdbl"])) {
    $teamDblPts = $_POST["tdbl"];
    // Now $selectedValue contains the unique value of the selected radio button in the 'fordbl' group.
    // Perform actions based on $selectedValue.
} else {
    // No radio button in the 'fordbl' group was selected.
}
echo "Team selected for double points: {$teamDblPts}<br>";

?>