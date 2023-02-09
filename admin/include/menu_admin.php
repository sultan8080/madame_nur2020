<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand bg-white" href="index.html"> <img src="../public/images/logo/logo.png" width="" height="60px" alt="Chez Madame NUR">
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0 text-white">
        Bienvenue
    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../index.php">Visiter le site</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="password_change.php">Changer le Mot de pass</a>
                <!-- password change -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?logout=1">Se déconnecter</a>
            </div>
        </li>
    </ul>
</nav>

<?php  
    if(isset($_GET['logout'])){
        $session->destroy();
    }
?>