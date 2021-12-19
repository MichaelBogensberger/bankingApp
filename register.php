<?php  
    include './include/database.php';
    include './include/fun.php';

    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $geburtsdatum = $_POST["geburtsdatum"];
    $username = $_POST["username"];
    $strasse = $_POST["strasse"];
    $land = $_POST["land"];
    $stadt = $_POST["stadt"];
    $plz = $_POST["plz"];
    $password = $_POST["password"];

    $iban = "AT 38 " . rand(1000, 9999) . " " . rand(1000, 9999) . " " . rand(1000, 9999) . " " . rand(1000, 9999);
    $bic = "AGENAT69";

    $db = connect();

    $sql = "INSERT INTO user (vorname, nachname, geburtsdatum, username, strasse, land, stadt, plz, guthaben, password, iban, bic) 
            VALUES ('$vorname', '$nachname', '$geburtsdatum', '$username', '$strasse', '$land', '$stadt', $plz, 0, '$password', '$iban', '$bic')";
    // use exec() because no results are returned
    $db->exec($sql);

    header('Location: ./einloggen.php');
?>