<?php 
/**
 * 
 *  ./app/router.php
 * 
 */
   use App\Controllers\PageController;

   if(isset($_GET['pageID'])){
      include_once "../app/controllers/pageController.php";
      PageController\showAction($conn, $_GET['pageID']);
   }
   else{
      include_once "../app/controllers/pageController.php";
      PageController\showAction($conn, 1);
   }
