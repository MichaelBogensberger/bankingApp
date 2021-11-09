<?php

include 'include/database.php';

$username = isset($_POST["username"]) ? $_POST["username"] : "niklasheim";
$password = isset($_POST["password"]) ? $_POST["password"] : "123";

if($username && $password){
    $db = connect();
    $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(isset($data[0]["id"])){
        session_start();
        $_SESSION["id"] = $data[0]["id"];
        $_SESSION["username"] = $data[0]["username"];
        $_SESSION["vorname"] = $data[0]["vorname"];
        $_SESSION["nachname"] = $data[0]["nachname"];
        $_SESSION["geburtsdatum"] = $data[0]["geburtsdatum"];
        $_SESSION["guthaben"] = $data[0]["guthaben"];
        $_SESSION["bic"] = $data[0]["bic"];
        $_SESSION["iban"] = $data[0]["iban"];
        $_SESSION["strasse"] = $data[0]["strasse"];
        $_SESSION["plz"] = $data[0]["plz"];
        $_SESSION["stadt"] = $data[0]["stadt"];
        $_SESSION["land"] = $data[0]["land"];
    } else {
        header('Location: ./loginpage.php');
    }
}

?>





