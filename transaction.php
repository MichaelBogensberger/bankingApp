<!DOCTYPE html>
<html>
<head>
<title>Transaktion</title>

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
     

    
    <?php
    if(isset($_GET['error'])) 
    {
        echo "<script> window.onload = function() {
          toastDangerAlert();
        }; </script>";
    }
  ?>


    


      <!-- Navbar brand -->
      <a href="index.php" class="navbar-brand">
        BankingApp
      </a>



      <!-- Navbar nav -->
      <ul class="navbar-nav d-none d-md-flex"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
        <li class="nav-item">
          <a href="index.php" class="nav-link">Bankkonto</a>
        </li>
        <li class="nav-item active">
          <a href="transaction.php" class="nav-link">Überweisen</a>
        </li>
        <li class="nav-item">
          <a href="history.php" class="nav-link">History</a>
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
            <a href="history.php" class="dropdown-item">History</a>
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



      <div class="col-6">
        


      <div class="content">
      </div class="content">


          <form action="include/sendtransaction.php" method="post" class="w-400 mw-full">


            <!-- Input -->
            <div class="form-group">
              <label for="iban" class="required">Empfänger IBAN</label>
              <input name="iban" type="text" class="form-control" id="iban" placeholder="IBAN" required="required">
            </div>

            <div class="form-group">
              <label for="bic" class="required">Empfänger BIC</label>
              <input name="bic" type="text" class="form-control" id="bic" placeholder="BIC" required="required">
            </div>


            <div class="form-group">
              <label for="money" class="required">Betrag</label>
              <input name="betrag" type="number" min="1" step="any" class="form-control" id="money" placeholder="€" required="required">
            </div>


            <div class="form-group">
              <label for="verwendungszweck" class="">Verwendungszweck</label>
              <input name="verwendungszweck" type="text" class="form-control" id="verwendungszweck" placeholder="Schutzgeld" required="required">
            </div>


            <div class="form-group">
              <label for="zahlungsreferenz" class="">Zahlungsreferenz</label>
              <input name="zahlungsreferenz" type="text" class="form-control" id="zahlungsreferenz" placeholder="Referenzen" required="required">
            </div>


            <!-- Submit button -->
            <input class="btn btn-primary" type="submit" value="Submit">
          </form>

      



      </div>


      <div class="col-5">



      <h5 class="fw-bc font-size-20">Verfügbare User</h5>
      <ul>
   
             <?php
                    $data = getAllData();

                    foreach ($data as $key) {


                      ?>
                           <li><code class="code font-size-14"><?php echo $key["username"]; echo " 👉🏻 "; echo $key["iban"];  ?> </code></li>
                         
                          </tr>
                      <?php
                    }
                ?>
            </ul>




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



  // Toasts danger alert
  function toastDangerAlert() {
    halfmoon.initStickyAlert({
      content: "Beim senden der Transaktion ist ein Fehler aufgetretten.",
      title: "Fehler",
      alertType: "alert-danger",
      fillType: "filled"
    });
  }



</script>


</html>