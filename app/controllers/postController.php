<?php

/**
 * 
 *  ./app/controllers/postController.php
 * 
 */

namespace App\Controllers\PostController;

use App\Models\PostModel;

function indexAction(\PDO $conn)
{
    include_once "../app/models/postModel.php";
    $posts = PostModel\findAll($conn);

    global $script;
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
function showAction(\PDO $conn, int $id)
{
    include_once "../app/models/postModel.php";
    $post = PostModel\findOneById($conn, $id);

    global $title, $content, $script;
    $script = "<script src='js/posts/show.js'></script>";
    $title = $post['titre'];
    ob_start();
    include "../app/views/posts/show.php";
    $content = ob_get_clean();
}

/**
 * ajaxAction function
 *
 * @param \PDO $conn
 * @param integer $offset
 * @return void
 */
function ajaxAction(\PDO $conn, int $offset)
{
    include_once "../app/models/postModel.php";
    $posts = PostModel\findAll($conn, 10, $offset);

    include "../app/views/posts/list.php";
}

/**
 * ajaxUpdateAction function
 *
 * @param \PDO $conn
 * @param integer $id
 * @param string $field
 * @param string $value
 * @return void
 */
function ajaxUpdateAction(\PDO $conn, int $id, string $field, string $value)
{
    include_once "../app/models/postModel.php";
    echo PostModel\updateOneById($conn, $id, $field, $value);
}

/**
 * addAction function
 *
 * @return void
 */
function formAction()
{
    global $content;
    ob_start();
    include "../app/views/posts/form.php";
    $content = ob_get_clean();
}

/**
 * newPostAction function
 *
 * @param \PDO $conn
 * @param array $title
 * @return void
 */
function newPostAction(\PDO $conn, array $data)
{
    include_once "../app/models/postModel.php";
    PostModel\addOne($conn, $data);
    header("location: " . ROOT);
    die();
}

/**
 * deleteAction function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function deleteAction(\PDO $conn, int $id)
{
    include_once "../app/models/postModel.php";
    PostModel\deleteOneById($conn, $id);
    header("location: " . ROOT);
    die();
}

/**
 * formUpdateAction function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function formUpdateAction(\PDO $conn, int $id){
    include_once "../app/models/postModel.php";
    $post = PostModel\findOneById($conn, $id);

    global $content;
    ob_start();
    include "../app/views/posts/form.php";
    $content = ob_get_clean();
}

/**
 * updatedAction function
 *
 * @param \PDO $conn
 * @param array $data
 * @return void
 */
function updatedAction(\PDO $conn, array $data){
    include_once "../app/models/postModel.php";
    PostModel\updatedById($conn, $data);
    showAction($conn, $data['id']);
}