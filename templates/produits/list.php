<?php require_once __DIR__ . '/../../vendor/autoload.php'; 
use App\View;
?>

<div class="container fluid">
    <div class="row" style="margin-bottom:10px;">
      <div class="col-md-12 w-100 d-flex flex-row justify-content-around align-items-center">
        <?php foreach ($produits as $profile) {
          echo View::render( 
              'templates\produits\card.php', 
             ['profile' => $profile]
          );
         } ?>
      </div>
    </div>
  </div> 