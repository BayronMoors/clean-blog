<?php

/**
 * 
 *  ./app/views/posts/show.php
 * 
 */
?>
<div class="postDetails" data-id="<?php echo $post['id']; ?>">
    <header class="masthead" style="background-image: url('img/<?php echo $post['image']; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <div>
                            <h1 class="editable" data-field="titre"><?php echo $post['titre']; ?></h1>
                        </div>
                        <div>
                            <h2 class="subheading editable" data-field="sousTitre"><?php echo $post['sousTitre']; ?></h2>
                        </div>
                        <span class="meta">Posted on <?php echo datify($post['datePublication']); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Textes -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <!-- EDIT -->
                    <div class="clearfix">
                        <a class="btn btn-secondary" href="post/update/<?php echo $post['id']; ?>">Edit Post &rarr;</a>
                        <a class="btn btn-secondary" href="post/delete/<?php echo $post['id']; ?>">Delete Post &rarr;</a>
                    </div>


                    <!-- POST DETAILS -->
                    <div >
                        <span class="editable" data-field="texte"><?php echo $post['texte']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>