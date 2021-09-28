<?php

/**
 * 
 *  ./app/views/posts/form.php
 * 
 */
?>
<header class="masthead" style="background-image: url('img/<?php echo $page['image']; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Gestion de post</h1>
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
            <form name="sentMessage" id="contactForm" action="<?php echo (strlen( $post['id']) > 1) ? "post/updated/".$post['id'] : "post/added"; ?>" method="Post">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>titre</label>
                        <input type="text" class="form-control" name="titre" placeholder="titre" id="titre" required data-validation-required-message="Please enter your email address." value="<?php echo (strlen( $post['titre']) > 1) ? $post['titre'] : ""; ?>">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>sous titre</label>
                        <input type="text" class="form-control" name="sousTitre" placeholder="Sous titre" id="soustitre" required data-validation-required-message="Please enter your email address." value="<?php echo (strlen( $post['sousTitre']) > 1) ? $post['sousTitre'] : ""; ?>">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Contenu</label>
                        <textarea rows="5" class="form-control" placeholder="Contenu" id="contenu" name="contenu" required data-validation-required-message="Please enter a message." ><?php echo (strlen( $post['texte']) > 1) ? $post['texte'] : ""; ?></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="sendMessageButton"><?php echo (strlen( $post['id']) > 1) ? "Editer" : "Ajouter"; ?></button>
                </div>
            </form>
        </div>
    </div>
</div>