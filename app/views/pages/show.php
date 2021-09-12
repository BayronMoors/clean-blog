<?php 
/**
 * 
 *  ./app/views/pages/show.php
 * 
 */
?>
<header class="masthead" style="background-image: url('img/<?php echo $page['image']; ?>')">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                  <h1><?php echo $page['titre']; ?></h1>
                  <span class="subheading"><?php echo $page['sousTitre']; ?></span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Textes -->
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="clearfix">
                <?php echo $page['texte']; ?>
              </div>

              <!-- post or form -->
              
            </div>
          </div>
        </div>