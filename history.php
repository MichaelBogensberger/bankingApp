<!DOCTYPE html>
<html>
<head>
<title>History</title>


<?php 
  include 'include/header.php';
  include 'include/database.php';
  include 'include/fun.php';
  session_start();
  if(!isset($_SESSION["id"])){
    header('Location: ./einloggen.php');
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
        <a href="logout.php">
          <button class="btn btn-primary">Logout</button>
        </a>
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
                    $data = getTransaktions($_SESSION["id"]);

                    foreach ($data as $key) {

                      $sender = getUser($key["sender"]);
                      $empfaenger = getUser($key["empfaenger"]);

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