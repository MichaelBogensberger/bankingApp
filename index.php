<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<!-- Halfmoon CSS -->
<link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />

<!-- Halfmoon JS -->
<script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">



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

    

    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
      ...





    </div>
    <!-- Navbar fixed bottom -->
    <nav class="navbar navbar-fixed-bottom">
      ...
    </nav>
</div>








</body>



<script type="text/javascript">
halfmoon.toggleDarkMode();
</script>


</html>