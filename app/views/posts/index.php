<?php

/**
 *  
 *  ./app/views/posts/index.php
 * 
 */
?>
<!-- ADD A POST -->
<div class="clearfix">
    <a class="btn btn-secondary float-left" href="post/new">Add Post &rarr;</a>
</div>

<!-- POSTS LIST -->
<div id="more">
    <?php include "../app/views/posts/list.php"; ?>
</div>
<!-- Pager -->
<div class="clearfix">
    <a class="btn btn-secondary float-right" id="olderPosts" href="#">Older Posts &rarr;</a>
</div>
</div>
</div>
</div>