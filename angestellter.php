<!DOCTYPE html>
<html>
<head>
<title>Angestellter</title>

<?php 
      include 'include/header.php';
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
      <a href="angestellter.php" class="navbar-brand">
        BankingApp
      </a>


      <!-- Navbar nav -->
      <ul class="navbar-nav d-none d-md-flex"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
        <li class="nav-item active">
          <a href="angestellter" class="nav-link">Zahlungen</a>
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
            <a href="angestellter.php" class="dropdown-item">Zahlungen</a>
            <div class="dropdown-divider"></div>
            <div class="dropdown-content">
                <button class="btn btn-primary btn-block">Logout</button>
            </div>
          </div>
        </div>
      </div>
    </nav>

    
    
        <!-- Sidebar overlay -->
        <div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>


        <!-- Sidebar -->
        <div class="sidebar">
        <img src="https://eu.ui-avatars.com/api/?name=R&size=90" alt="pfp" class="pfp-dash rounded-circle mx-auto d-block">
        <h5 class="text-center">Regina</h5>


        <li class="sidebar-link sidebar-link-with-icon">
            <span class="sidebar-icon">
            <i class="material-icons">manage_accounts</i>
            </span>
            Angestellter
        </li>

        <li class="sidebar-link sidebar-link-with-icon">
            <span class="sidebar-icon">
            <i class="material-icons">fingerprint</i>
            </span>
            User-ID: 1
        </li>




        </div>



    <!-- Content wrapper -->
    <div class="content-wrapper">
      
    


    <div class="row">


      <div class="col-lg-2 col-md-12 col-sm-12">
      </div>

      <div class="col-lg-8 col-md-12 col-sm-12">



            <div class="content">
                


                <form action="..." method="..." class="w-400 mw-full">


                    <!-- Input -->
                    <div class="form-group">
                    <label for="iban" class="required">Empfänger IBAN</label>
                    <input name="iban" type="text" class="form-control" id="iban" placeholder="IBAN" required="required">
                    </div>

                    <div class="form-group">
                    <label for="money" class="required">Betrag</label>
                    <input name="betrah" type="number" min="1" step="any" class="form-control" id="money" placeholder="€" required="required">
                    </div>

                    <div class="form-group">
                        <!-- First radio button -->
                        <div class="custom-radio">
                        <input checked="checked" type="radio" name="radio-set-1" id="radio-1" value="radio-1">
                        <label for="radio-1">Abheben</label>
                        </div>

                        <!-- Second radio button (checked by default) -->
                        <div class="custom-radio">
                        <input type="radio" name="radio-set-1" id="radio-2" value="radio-2">
                        <label for="radio-2">Einzahlen</label>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>

                </div class="content">












      </div>

      </div>
      <div class="col-lg-2 col-md-12 col-sm-12">
      
      
    


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