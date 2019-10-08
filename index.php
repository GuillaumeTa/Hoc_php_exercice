<?php require_once 'vendor\autoload.php';
require_once('templates\header.php'); 
require_once('templates\nav.php'); 

use App\Service\ProduitService;
use App\View;

$produitService = new ProduitService();

  echo View::render(
    'templates\produits\list.php', 
    ['produits' => $produitService -> findAll()]
  );

require_once('templates\footer.php'); ?>