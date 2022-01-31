<!DOCTYPE html>
<html>
<head>
<title>Login</title>


<?php 
      include 'include/header.php';

  ?>

</head>
<body>

<div 
    class="page-wrapper with-navbar-fixed-bottom" 
    data-sidebar-type="overlayed-sm-and-down">
    <!-- Sticky alerts (toasts), empty container -->
    <div class="sticky-alerts"></div>
    <!-- Content wrapper -->

    <div class="content-wrapper">
    <div class="row">

      <div class="col-lg-4 col-sm-2 col-md-1">
      </div>

      <div class="col-lg-4 col-sm-8 col-md-10">

            <div class="content">
                    <h1 class="card-title login-txt">
                    Login
                    </h1>


                    <?php

if(isset($_GET['error'])) 
{

    echo "<script> window.onload = function() {
      toastDangerAlert();
    }; </script>";

}
    


?>


            <form action="login.php" method="POST" class="w-400 mw-full">
                <div class="form-group">
                    <label for="bn" class="required">Benutzername</label>
                    <input name="username" type="text" class="form-control" id="bn" required="required">
                    </div>

                    <div class="form-group">
                    <label for="pw" class="required">Passwort</label>
                    <input name="password" type="password" class="form-control" id="pw" placeholder="" required="required">
                </div>

                <input class="btn btn-primary btn-block" type="submit" value="Submit">
            </form>

               <a href="registrieren.php" class="reg-a"><p class="reg-txt text-center">Registrieren</p></a>

            </div>



      </div>
      <div class="col-lg-4 col-sm-2 col-md-1">
      </div>
      </div>
    </div>

    <!-- Navbar fixed bottom -->
    <nav class="navbar navbar-fixed-bottom">
      Michael Bogensberger, Niklas Heim
      <div class="form-inline d-none d-md-flex ml-auto">
        <a href="einloggenAngestellter.php"><button class="btn btn-primary">Login für Angestellte</button>
      </div>


    </nav>

  </div>

</body>

<script type="text/javascript">
halfmoon.toggleDarkMode();




  // Toasts danger alert
  function toastDangerAlert() {
    halfmoon.initStickyAlert({
      content: "Der Username oder das Passwort waren nicht korrekt",
      title: "Login fehlgeschlagen",
      alertType: "alert-danger",
      fillType: "filled"
    });
  }


</script>


</html>