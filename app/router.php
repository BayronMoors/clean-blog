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
   else{
      include_once "../app/controllers/pageController.php";
      PageController\showAction($conn, 1);
   }
