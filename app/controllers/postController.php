<?php 
/**
 * 
 *  ./app/controllers/postController.php
 * 
 */

 namespace App\Controllers\PostController;
 use App\Models\PostModel;

 function indexAction(\PDO $conn){
     include_once "../app/models/postModel.php";
     $posts = PostModel\findAll($conn);

     GLOBAL $script;
     $script = "<script src='js/posts/index.js'></script>";

     include "../app/views/posts/index.php";
 }

 /**
 * showAction function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function showAction(\PDO $conn, int $id){
    include_once "../app/models/postModel.php";
    $post = PostModel\findOneById($conn, $id);

    GLOBAL $title, $content;
    $title = $post['titre'];
    ob_start();
        include "../app/views/posts/show.php";
    $content = ob_get_clean();
}


function ajaxAction(\PDO $conn, int $offset){
    include_once "../app/models/postModel.php";
    $posts = PostModel\findAll($conn, 10, $offset);

    include "../app/views/posts/list.php";
}