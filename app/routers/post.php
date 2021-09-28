<?php  
/**
 * 
 *  ./app/routers/post.php
 * 
 */
use App\Controllers\PostController;

 switch($_GET['post']){
     case "delete":
        include_once "../app/controllers/postController.php";
        PostController\deleteAction($conn, $_GET['deleteID']);
        break;
     case "update":
        include_once "../app/controllers/postController.php";
        PostController\formUpdateAction($conn, $_GET['updateID']);
        break;
     case "updated":
        include_once "../app/controllers/postController.php";
        PostController\updatedAction($conn, [
            "id" => $_GET['updatedID'],
            "title" => $_POST['titre'],
            "subTitle" => $_POST['sousTitre'],
            "content" => $_POST['contenu']
        ]);
        break;
 }