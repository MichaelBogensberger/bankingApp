<?php  
    include './include/database.php';
    include './inlcude/fun.php';

    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $geburtsdatum = $_POST["geburtsdatum"];
    $username = $_POST["username"];
    $strasse = $_POST["strasse"];
    $land = $_POST["land"];
    $stadt = $_POST["stadt"];
    $plz = $_POST["plz"];
    $passwort = $_POST["passwort"];

    $iban = "AT 38 " . rand(1000, 9999) . " " . rand(1000, 9999) . " " . rand(1000, 9999) . " " . rand(1000, 9999);
    $bic = "AGENAT69";

    $db = connect();

    $sql = "INSERT INTO user (vorname, nachname, geburtsdatum, username, strasse, land, stadt, plz, guthaben, passwort, iban, bic) 
            VALUES ('$vorname', '$nachname', '$geburtsdatum', '$username', '$strasse', '$land', '$stadt', $plz, 0, '$passwort', '$iban', '$bic')";
    // use exec() because no results are returned
    $db->exec($sql);

    header('Location: ./einloggen.php');
?>