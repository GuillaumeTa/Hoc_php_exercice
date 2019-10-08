    <?php if($profile['pageAccueil'] == true) {?>    
        <div class="card" style="min-width: 200px;">
            <img src="<?php echo $profile['image']; ?>" class="card-img-top" alt="Profile pic">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $profile['nom']; ?>
              </h5>
              <p class="card-text">
                <?php echo $profile['prix']; ?>
              </p>
            </div>
        </div>
    <?php } ?>
    