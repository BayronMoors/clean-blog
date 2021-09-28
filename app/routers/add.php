<?php  
/**
 * 
 *  ./app/routers/add.php
 * 
 */
use App\Controllers\PostController;

 switch($_GET['add']){
     case "form":
        include_once "../app/controllers/postController.php";
        PostController\formAction();
        break;
    case "post":
        include_once "../app/controllers/postController.php";
        PostController\newPostAction($conn,[
            "title" => $_POST['titre'],
            "subTitle" => $_POST['sousTitre'],
            "content" => $_POST['contenu']
        ]);
        break;
 }