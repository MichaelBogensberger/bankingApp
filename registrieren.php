<!DOCTYPE html>
<html>
<head>
<title>Registrieren</title>


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
                    Registrieren
                    </h1>




              <form action="..." method="...">
                <!-- First row -->
                <div class="form-row row-eq-spacing-sm">
                  <div class="col-sm">
                    <label for="first-name" class="required">Vorname</label>
                    <input type="text" class="form-control" id="first-name" placeholder="Max" required="required">
                  </div>
                  <div class="col-sm">
                    <label for="last-name" class="required">Nachname</label>
                    <input type="text" class="form-control" id="last-name" placeholder="Mustermann" required="required">
                  </div>
                </div>


                <div class="form-row row-eq-spacing-sm">

                <div class="col-sm-5">
                    <label for="birth" class="required">Geburtsdatum</label>
                    <input type="date" class="form-control" id="birth" placeholder="" required="required">
                  </div>

                  <div class="col-sm-7">
                    <label for="username" class="required">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="" required="required">
                  </div>

                </div>


                <div class="form-row row-eq-spacing-sm">
                  <div class="col-sm-8">
                    <label for="strasse" class="required">Straße</label>
                    <input type="text" class="form-control" id="strasse" placeholder="Evergreen terrace 742" required="required">
                  </div>

                  <div class="col-sm-4">
                    <label for="land" class="required">Land</label>
                    <input type="text" class="form-control" id="land" placeholder="Österreich" required="required">
                  </div>
                </div>



                <div class="form-row row-eq-spacing-sm">
                  <div class="col-sm-7">
                    <label for="city" class="required">Stadt</label>
                    <input type="text" class="form-control" id="city" placeholder="Imst" required="required">
                  </div>

                  <div class="col-sm-5">
                    <label for="plz" class="required">PLZ</label>
                    <input type="number" min="0" max="9999" class="form-control" id="plz" placeholder="6460" required="required">
                  </div>
                </div>






                <!-- Submit button container -->
                <div class="text-right"> <!-- text-right = text-align: right -->
                  <input class="btn btn-primary btn-block" type="submit" value="Submit">
                </div>
              </form>






            </div>

      </div>
      <div class="col-lg-4 col-sm-2 col-md-1">
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