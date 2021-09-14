<?php 
/**
 * 
 *  ./app/controllers/pageController.php
 * 
 */

 namespace App\Controllers\PageController;
 use App\Models\PageModel;
 /**
  * indexAction function
  *
  * @param \PDO $conn
  * @param integer $id
  * @return void
  */
 function showAction(\PDO $conn, int $id){
    include "../app/models/pageModel.php";
    $page = PageModel\findOneById($conn, $id);

    GLOBAL $content, $title;
    $title = $page['titre'];
    ob_start();
        include "../app/views/pages/show.php";
    $content = ob_get_clean();
 }
 