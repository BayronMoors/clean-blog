<?php 
/**
 * 
 *  ./app/router.php
 * 
 */
   use App\Controllers\PageController;
   use App\Controllers\PostController;


   if(isset($_GET['pageID'])){
      include_once "../app/controllers/pageController.php";
      PageController\showAction($conn, $_GET['pageID']);
   }
   else if(isset($_GET['postID'])){
      include_once "../app/controllers/postController.php";
      PostController\showAction($conn, $_GET['postID']);
   }
   else if(isset($_GET['more'])){
      include_once "../app/controllers/postController.php";
      PostController\ajaxAction($conn, $_GET['more']);
   }
   else if(isset($_GET['update'])){
      include_once "../app/controllers/postController.php";
      PostController\ajaxUpdateAction($conn, $_GET['id'], $_GET['field'], $_GET['value']);
   }
   else if(isset($_GET['post'])){
      include_once "../app/routers/post.php";
   }
   else{
      include_once "../app/controllers/pageController.php";
      PageController\showAction($conn, 1);
   }
