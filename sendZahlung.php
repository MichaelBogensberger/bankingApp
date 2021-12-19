<html>
<body>

<?php  
      session_start();
      if(!isset($_SESSION["id"])){
        header('Location: ./einloggen.php');
      }

include './include/database.php';
include './include/fun.php';

$iban = $_POST["iban"];
$betrag = $_POST["betrag"];
$art = $_POST["art"];
$currentUserId = $_SESSION['id'];
$idFromIban = getIdFromIban($iban);



echo "iban: " . $iban . "<br>";
echo "betrag: " . $betrag . "<br>";
echo "art: " . $art . "<br>";



echo $currentUserId;
echo "<br>";
echo $idFromIban;



$db = connect();

$sql = "INSERT INTO zahlung (betrag, art, user, angestellter) 
        VALUES ($betrag, $art, $idFromIban, '$currentUserId')";
// use exec() because no results are returned
$db->exec($sql);

    
    $guthabenEmpfaenger = getGuthabenFromId($idFromIban);
    echo "Guthaben vom Empfänger: " . $guthabenEmpfaenger;

    if ($art == 0) {
        $newGuthabenEmpfaenger = $guthabenEmpfaenger - $betrag;
    } else if ($art == 1) {
        $newGuthabenEmpfaenger = $guthabenEmpfaenger + $betrag;
    }

    $sqlUpdateMoneyEmpfaenger = "UPDATE user 
                                SET guthaben='$newGuthabenEmpfaenger'
                                WHERE id='$idFromIban'";

    $db->exec($sqlUpdateMoneyEmpfaenger);



    header('Location: angestellter.php');
  ?>



</body>
</html>