<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<?php include 'include/header.php';?>



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
      <a href="#" class="navbar-brand">
        BankingApp
      </a>



      <!-- Navbar nav -->
      <ul class="navbar-nav d-none d-md-flex"> <!-- d-none = display: none, d-md-flex = display: flex on medium screens and up (width > 768px) -->
        <li class="nav-item active">
          <a href="#" class="nav-link">Bankkonto</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Überweisen</a>
        </li>
        <li class="nav-item">
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
            <a href="#" class="dropdown-item">Bankkonto</a>
            <a href="#" class="dropdown-item">Überweisen</a>
            <a href="#" class="dropdown-item">History</a>
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
      <img src="https://eu.ui-avatars.com/api/?name=Julian+Meilinger&size=90" alt="pfp" class="pfp-dash rounded-circle mx-auto d-block">
      <h5 class="text-center">Julian Meilinger</h5>


      <li class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
        <i class="material-icons">cake</i>
        </span>
        11.06.2001
    </li>

    <li class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
        <i class="material-icons">home</i>
        </span>
        Hinterseberweg 12
    </li>

    <li class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
        <i class="material-icons">location_city</i>
        </span>
        Imst 6460
    </li>

    <li class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
        <i class="material-icons">flag</i>
        </span>
        Österreich
    </li>


    </div>




    <!-- Content wrapper -->
    <div class="content-wrapper">
      
    


    <div class="row">
      <div class="col-6">
        
      <div class="w-400 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
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
          <dd class="col-lg-2">120€</dd>
        </dl>

        </div>
      </div>




      <div class="w-400 mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
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
          <dt class="col-lg-4">IABN:</dt>
          <dd class="col-lg-8">AT35 3500 0404 2343 2343</dd>
        </dl>

        <dl class="row bic-row">
          <dt class="col-lg-4">BIC:</dt>
          <dd class="col-lg-8">RSV12354334</dd>
        </dl>


        </div>
      </div>











      </div>
      <div class="col-6">
        2 of 3 (wider)
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