<?php  
    include './include/database.php';
    include './include/fun.php';

    function val($string){
        if (!preg_match('/[^A-Za-z0-9]/', $string)) {
            return true;
        } else {
            return false;
        }
    }

    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $geburtsdatum = $_POST["geburtsdatum"];
    $username = $_POST["username"];
    $strasse = $_POST["strasse"];
    $land = $_POST["land"];
    $stadt = $_POST["stadt"];
    $plz = $_POST["plz"];
    $password = $_POST["password"];

    if(val($vorname) && val($nachname) && val($username) && val($land) && val($stadt) && val($plz) && val($strasse) && strlen($password) > 3){
        $iban = "AT 38 " . rand(1000, 9999) . " " . rand(1000, 9999) . " " . rand(1000, 9999) . " " . rand(1000, 9999);
        $bic = "AGENAT69";

        $db = connect();

        $sql = "INSERT INTO user (vorname, nachname, geburtsdatum, username, strasse, land, stadt, plz, guthaben, password, iban, bic) 
                VALUES ('$vorname', '$nachname', '$geburtsdatum', '$username', '$strasse', '$land', '$stadt', $plz, 0, '$password', '$iban', '$bic')";
        // use exec() because no results are returned
        $db->exec($sql);

        header('Location: ./einloggen.php');
    } else {
        header('Location: ./registrieren.php');
    }


    
?>