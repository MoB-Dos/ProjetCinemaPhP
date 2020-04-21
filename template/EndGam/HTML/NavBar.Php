<?php

session_start ();


if (isset($_SESSION['login'])) {

?>

<header class="header-section">

<div class="header-warp">
    <div class="header-social d-flex justify-content-end">
        <p>Suivez nous :</p>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
    </div>
    <div class="header-bar-warp d-flex">
        <!-- site logo -->
        <a href="home.html" class="site-logo">
            <img src="./img/logo.png" alt="">
        </a>
        <nav class="top-nav-area w-100">

        <div class="user-panel">
                <a href="../../../Traitement/User/deco.php">Deconnexion</a> / <?php echo $_SESSION['login'] ?>
        </div>

            <!-- Menu -->
            <ul class="main-menu primary-menu">
                <li><a  href="home.php">Accueil</a></li>
                <li><a href="films.php">Films</a></li>
                <li><a href="reserver.php">Reserver une place </a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="../../../View/User/Info/Affichage.php">Affichage</a></li>
                
                <?php
                if ($_SESSION['admin'] == 1)
                {
                ?>    
                    <li><a href="../../../ndex.php">Panel Admin</a></li>
                
                <?php
                }
                ?>  

             </ul>
        </nav>
    </div>
</div>

 </header>
<?php
} else {
    ?>

    <header class="header-section">

<div class="header-warp">
    <div class="header-social d-flex justify-content-end">
        <p>Suivez nous :</p>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
    </div>
    <div class="header-bar-warp d-flex">
        <!-- site logo -->
        <a href="home.html" class="site-logo">
            <img src="./img/logo.png" alt="">
        </a>
        <nav class="top-nav-area w-100">
            
            <div class="user-panel">
                <a href="../../../View/User/Connexion.html">Se connecter</a> / <a href="../../../View/User/Inscription.html">S'inscrire</a>
            </div>
            
            <!-- Menu -->
            <ul class="main-menu primary-menu">
                <li><a  href="home.php">Accueil</a></li>
                <li><a href="films.php">Films</a></li>
                <li><a href="reserver.php">Reserver une place </a></li>
                <li><a href="contact.php">Contact</a></li>
                
             </ul>
        </nav>
    </div>
</div>

 </header>

 <?php

}

?>