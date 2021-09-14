<?php 
/**
 * 
 *  ./app/models/pageModel.php
 * 
 */

 namespace App\Models\PageModel;

 /**
  * findOneById function
  *
  * @param \PDO $conn
  * @param integer $id
  * @return array
  */
 function findOneById(\PDO $conn, int $id):array{
    $sql= "SELECT *
           FROM pages
           WHERE id = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
 }

 /**
  * findAll function
  *
  * @param \PDO $conn
  * @return array
  */
 function findAll(\PDO $conn):array{
    $sql= "SELECT *
    FROM pages
    ORDER BY tri ASC;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
 }