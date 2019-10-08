<?php 
require_once __DIR__ . '/../vendor/autoload.php';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produits.php">Produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/panier.php">Panier</a>
            </li>
            <li class="nav-item">
                <?php if (!empty($session->connected) && $session->connected) { ?>
                    <a class="nav-link" href="/logout.php">Déconnexion</a>
                <?php } else { ?>
                    <a class="nav-link" href="/login.php">Connexion</a>
                <?php } ?>
            </li>
        </ul>
    </div>
</nav>