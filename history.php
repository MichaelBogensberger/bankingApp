<!DOCTYPE html>
<html>
<head>
<title>History</title>


<?php 
  include 'include/header.php';
  session_start();
  if(!isset($_SESSION["id"])){
    // header('Location: ./loginpage.php');
  }
?>



</head>
<body>

<div 
    class="page-wrapper with-navbar with-sidebar with-navbar-fixed-bottom" 
    data-sidebar-type="overlayed-sm-and-down">
    <!-- Sticky alerts (toasts), empty container -->
    <div class="sticky-alerts"></div>

    <!-- Navbar -->
    <nav class="navbar">
     
    


      <!-- Navbar brand -->
      <a href="index.php" class="navbar-brand">
        BankingApp
      </a>



      <!-- Navbar nav -->
      <ul class="navbar-nav d-none d-md-flex"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
        <li class="nav-item">
          <a href="index.php" class="nav-link">Bankkonto</a>
        </li>
        <li class="nav-item">
          <a href="transaction.php" class="nav-link">Überweisen</a>
        </li>
        <li class="nav-item active">
          <a href="#" class="nav-link">History</a>
        </li>
      </ul>



      <!-- Navbar form (inline form) -->
      <div class="form-inline d-none d-md-flex ml-auto">
        <button class="btn btn-primary">Logout</button>
      </div>


      <!-- Navbar content (with the dropdown menu) -->
      <div class="navbar-content d-md-none ml-auto"> <!-- d-md-none = display: none on medium screens and up (width > 768px), ml-auto = margin-left: auto -->
        <div class="dropdown with-arrow">
          <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">
            Menu
            <i class="fa fa-angle-down" aria-hidden="true"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right w-200" aria-labelledby="navbar-dropdown-toggle-btn-1"> <!-- w-200 = width: 20rem (200px) -->
            <a href="index.php" class="dropdown-item">Bankkonto</a>
            <a href="transaction.php" class="dropdown-item">Überweisen</a>
            <a href="#" class="dropdown-item">History</a>
            <div class="dropdown-divider"></div>
            <div class="dropdown-content">
                <button class="btn btn-primary btn-block">Logout</button>
            </div>
          </div>
        </div>
      </div>
    </nav>

    



<?php
include 'include/sidenav.php';
?>




    <!-- Content wrapper -->
    <div class="content-wrapper">
      
    


    <div class="row">




      <div class="col-1">
      </div>



      <div class="col-10">
        


      
      <div class="content">
            <h2 class="card-title">
              History
            </h2>



          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Datum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Betrag</th>
                <th>Sender</th>
                <th>Empfänger</th>
                <th>Zahlungsreferenz</th>
                <th>Verwendungszweck</th>
                <th class="text-right">Uhrzeit</th>
              </tr>
            </thead>
            <tbody>

                <?php
                    include 'include/database.php';

                    $db = connect();
                    $sql = "SELECT * FROM transaktion WHERE sender = :id OR empfaenger = :id";
                    $stmt = $db->prepare($sql);
                    $stmt->bindValue(':id', $_SESSION["id"]);
                    $stmt->execute();
                    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($data as $key) {

                      $sql1 = "SELECT * FROM user WHERE id = :sender";
                      $stmt1 = $db->prepare($sql1);
                      $stmt1->bindValue(':sender', $key["sender"]);
                      $stmt1->execute();
                      $sender = $stmt1->fetch(PDO::FETCH_ASSOC);

                      $sql2 = "SELECT * FROM user WHERE id = :empfaenger";
                      $stmt2 = $db->prepare($sql2);
                      $stmt2->bindValue(':empfaenger', $key["empfaenger"]);
                      $stmt2->execute();
                      $empfaenger = $stmt2->fetch(PDO::FETCH_ASSOC);

                     

                      ?>
                          <tr class='<?php echo ($_SESSION["id"] == $sender["id"]) ? "table-danger" : "table-success"; ?>'>
                              <th><?php echo $key["datum"] ?></th>
                              <th><?php echo $key["betrag"] ?></th>
                              <td data-toggle="tooltip" data-title='<?php echo $sender["iban"] ?>'><?php echo $sender["vorname"] . " " . $sender["nachname"] ?></td>
                              <td data-toggle="tooltip" data-title='<?php echo $empfaenger["iban"] ?>'><?php echo $empfaenger["vorname"] . " " . $empfaenger["nachname"] ?></td>
                              <td><?php echo $key["zahlungsreferenz"] ?></td>
                              <td><?php echo $key["verwendungszweck"] ?></td>
                              <td class="text-right"><?php echo $key["uhrzeit"] ?></td>
                          </tr>
                      <?php
                    }
                ?>

              <!-- <tr class="table-danger">
                <th>11.06.2021</th>
                <th>11.06.2021</th>
                <td data-toggle="tooltip" data-title="AT35 3500 0233 2342 2333">Julian Meilinger</td>
                <td data-toggle="tooltip" data-title="AT35 3500 0233 2342 2333">Niggolas Heim</td>
                <td>Schutzgeld</td>
                <td>mehr Infos stehen hier</td>
                <td class="text-right">11:20</td>
              </tr>

              <tr class="table-success">
                <th>11.06.2021</th>
                <th>11.06.2021</th>
                <td data-toggle="tooltip" data-title="AT35 3500 0233 2342 2333">Julian Meilinger</td>
                <td data-toggle="tooltip" data-title="AT35 3500 0233 2342 2333">Niggolas Heim</td>
                <td>Schutzgeld</td>
                <td>mehr Infos stehen hier</td>
                <td class="text-right">11:20</td>
              </tr> -->


            </tbody>
          </table>  


      </div>

      </div>


      <div class="col-1">
      </div>








      </div>
    </div>




      






    <!-- Navbar fixed bottom -->
    <nav class="navbar navbar-fixed-bottom">
      Michael Bogensberger, Niklas Heim
    </nav>




  </div>








  







</body>



<script type="text/javascript">
halfmoon.toggleDarkMode();
</script>


</html>