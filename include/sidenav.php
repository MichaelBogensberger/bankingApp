
<!-- Sidebar overlay -->
<div class="sidebar-overlay" onclick="halfmoon.toggleSidebar()"></div>


    <!-- Sidebar -->
    <div class="sidebar">
      <img src="https://eu.ui-avatars.com/api/?name=<?php echo $_SESSION["vorname"] . '+' . $_SESSION["nachname"] ?>&size=90" alt="pfp" class="pfp-dash rounded-circle mx-auto d-block">
      <h5 class="text-center"><?php echo $_SESSION["vorname"] . $_SESSION["nachname"] ?></h5>


      <li class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
        <i class="material-icons">cake</i>
        </span>
        <?php echo $_SESSION["geburtsdatum"] ?>
    </li>

    <li class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
        <i class="material-icons">home</i>
        </span>
        <?php echo $_SESSION["strasse"] ?>
    </li>

    <li class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
        <i class="material-icons">location_city</i>
        </span>
        <?php echo $_SESSION["stadt"] . " " . $_SESSION["plz"] ?>
    </li>

    <li class="sidebar-link sidebar-link-with-icon">
        <span class="sidebar-icon">
        <i class="material-icons">flag</i>
        </span>
        <?php echo $_SESSION["land"] ?>
    </li>


    </div>