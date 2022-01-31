<html>
<body>

<?php  
      session_start();
      if(!isset($_SESSION["id"])){
        header('Location: ./einloggen.php');
      }

include 'database.php';
include 'fun.php';

$betrag = $_POST["betrag"];
$verwendungszweck = $_POST["verwendungszweck"];
$zahlungsreferenz = $_POST["zahlungsreferenz"];
$iban = $_POST["iban"];
$bic = $_POST["bic"];
$currentUserId = $_SESSION['id'];
$idFromIban = getIdFromIban($iban);
$currentDate = date("Y-m-d");

date_default_timezone_set("Europe/Prague");
$currentTime = date("h:i:sa");

echo "betrag: " . $betrag . "<br>";
echo "ver: " . $verwendungszweck . "<br>";
echo "zahlungsreferenz: " . $zahlungsreferenz . "<br>";
echo "iban: " . $iban . "<br>";
echo "bic: " . $bic . "<br>";


echo $currentUserId;
echo "<br>";
echo $idFromIban;

if($idFromIban == null || $betrag <= 0 || $betrag >= 100000) {
  header('Location: ../transaction.php?error=1');
}



$db = connect();

$sql = "INSERT INTO transaktion (betrag, sender, empfaenger, zahlungsreferenz, verwendungszweck, datum, uhrzeit) 
        VALUES ($betrag, $currentUserId, $idFromIban, '$zahlungsreferenz', '$verwendungszweck', '$currentDate', '$currentTime')";
// use exec() because no results are returned
$db->exec($sql);



    $newGuthabenSender = $_SESSION['guthaben'] - $betrag;
    echo "new Guthaben: " . $newGuthabenSender;
    
    $guthabenEmpfaenger = getGuthabenFromId($idFromIban);
    echo "Guthaben vom Empfänger: " . $guthabenEmpfaenger;

    $newGuthabenEmpfaenger = $guthabenEmpfaenger + $betrag;


    $sqlUpdateMoneySender = "UPDATE user 
                            SET guthaben='$newGuthabenSender'
                            WHERE id='$currentUserId';";

    $db->exec($sqlUpdateMoneySender);


    $sqlUpdateMoneyEmpfaenger = "UPDATE user 
                                SET guthaben='$newGuthabenEmpfaenger'
                                WHERE id='$idFromIban'";

    $db->exec($sqlUpdateMoneyEmpfaenger);



   header('Location: ../index.php');
  ?>



</body>
</html>