<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>


  <?php 
      include 'include/header.php';
      include 'include/database.php';
      include 'include/fun.php';

      session_start();
      if(!isset($_SESSION["id"])){
        header('Location: ./einloggen.php');
      }

      updateGuthaben($_SESSION["id"]);
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
        <li class="nav-item active">
          <a href="#" class="nav-link">Bankkonto</a>
        </li>
        <li class="nav-item">
          <a href="transaction.php" class="nav-link">Überweisen</a>
        </li>
        <li class="nav-item">
          <a href="history.php" class="nav-link">History</a>
        </li>
      </ul>



      <!-- Navbar form (inline form) -->
      <div class="form-inline d-none d-md-flex ml-auto">

      <!--
        <button class="btn btn-action mr-5" type="button" onclick="halfmoon.toggleDarkMode()" aria-label="Toggle dark mode">
              <span class="sidebar-icon gh-span">
                <i class="material-icons">dark_mode</i>
              </span>
        </button>
      -->

      
        <a href="logout.php"><button class="btn btn-primary">Logout</button>
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
            <a href="history.php" class="dropdown-item">History</a>
            <div class="dropdown-divider"></div>
            <div class="dropdown-content">
              <a href="logout.php"><button class="btn btn-primary btn-block">Logout</button></a>
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
      <div class="col-lg-6 col-md-12 col-sm-12">
        
      <div class=" mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
        <div class="card">

          <li class="sidebar-link sidebar-link-with-icon gh-title">
            <span class="sidebar-icon gh-span">
            <i class="material-icons">attach_money</i>
            </span>
            Guthaben
          </li>

          <p class="text-muted">
           Unter diesem Reiter finden Sie Ihr aktuelles Guthaben über folgendes Konto.
          </p>

        <dl class="row">
          <dt class="col-lg-10">Aktueller Wert:</dt>
          <dd class="col-lg-2"><?php echo $_SESSION["guthaben"] ?>€</dd>
        </dl>

        </div>
      </div>




      <div class=" mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
        <div class="card">

          <li class="sidebar-link sidebar-link-with-icon gh-title">
            <span class="sidebar-icon gh-span">
            <i class="material-icons">info</i>
            </span>
            Bankkonto
          </li>

          <p class="text-muted">
           Hier finden Sie Informationen über Ihr Bankkonto wie zb. IBAN oder BIC.
          </p>

        <dl class="row iban-row">
          <dt class="col-lg-4">IBAN:</dt>
          <dd class="col-lg-8"><?php echo $_SESSION["iban"] ?></dd>
        </dl>

        <dl class="row bic-row">
          <dt class="col-lg-4">BIC:</dt>
          <dd class="col-lg-8"><?php echo $_SESSION["bic"] ?></dd>
        </dl>


        </div>
      </div>











      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
      
      
      <div class="content">
            <h2 class="card-title">
              History
            </h2>


            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Datum</th>
                  <th>Sender</th>
                  <th>Empfänger</th>
                  <th>Betrag</th>
                </tr>
              </thead>
              <tbody>

              <?php
                    $data = getTransaktions($_SESSION["id"]);
                
                    $max = count($data);
                    if($max > 8) $max = 8;
                    
                    for($i = 0; $i < $max; $i++) {

                      $sender = getUser($data[$i]["sender"]);
                      $empfaenger = getUser($data[$i]["empfaenger"]);

                      ?>
                      <tr class="">
                        <th><?php echo $data[$i]["datum"] ?></th>
                        <td><?php echo $sender["vorname"] . " " . $sender["nachname"] ?></td>
                        <td><?php echo $empfaenger["vorname"] . " " . $empfaenger["nachname"] ?></td>
                        <td><?php echo $data[$i]["betrag"] ?></td>
                      </tr>
                      <?php
                    }
                ?>

                
            </table>

            <a href="history.php" class="more-a">
              <button class="btn btn-block my-10" type="button">mehr Anzeigen</button>
            </a>



      </div>






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