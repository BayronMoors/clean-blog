<?php

/**
 * 
 *  ./app/models/postModel.php
 * 
 */

namespace App\Models\PostModel;

use DateTime;
use DateTimeZone;

/**
 * findAll function
 *
 * @param \PDO $conn
 * @param integer $limit
 * @param integer $offset
 * @return array
 */
function findAll(\PDO $conn, int $limit = 10, int $offset = 0): array
{
  $sql = "SELECT *
    FROM posts
    ORDER BY date(datePublication) DESC
    LIMIT :limit
    OFFSET :offset;";
  $rs = $conn->prepare($sql);
  $rs->bindValue(":limit", $limit, \PDO::PARAM_INT);
  $rs->bindValue(':offset', $offset, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}


/**
 * findOneById function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return array
 */
function findOneById(\PDO $conn, int $id): array
{
  $sql = "SELECT *
          FROM posts
          WHERE id = :id;";
  $rs = $conn->prepare($sql);
  $rs->bindValue(":id", $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}

/**
 * updateOneById function
 *
 * @param \PDO $conn
 * @param integer $id
 * @param string $field
 * @param string $value
 * @return void
 */
function updateOneById(\PDO $conn, int $id, string $field, string $value) {
 $sql = "UPDATE posts
         SET `$field` = :value
         WHERE id = :id;";
 $rs = $conn->prepare($sql);
 $rs->bindValue(':value', $value, \PDO::PARAM_STR);
 $rs->bindValue(':id', $id, \PDO::PARAM_INT);
 return ($rs->execute())?1:0;
}

/**
 * addOne function
 *
 * @param \PDO $conn
 * @param array $data
 * @return void
 */
function addOne(\PDO $conn, array $data){
  $sql = 'INSERT INTO POSTS
  (titre, sousTitre, texte, datePublication, user )
  VALUES ( :title , :subTitle,:content, :createdAt, 1 );';
  $rs = $conn->prepare($sql);
  $rs->bindValue(":title", $data['title'], \PDO::PARAM_STR);
  $rs->bindValue(":subTitle", $data['subTitle'], \PDO::PARAM_STR);
  $rs->bindValue(":content", $data['content'], \PDO::PARAM_STR);
  $rs->bindValue(":createdAt", date('Y-m-d'), \PDO::PARAM_STR);
  return $rs->execute();
}

/**
 * deleteOneById function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function deleteOneById(\PDO $conn, int $id){
  $sql ="DELETE FROM POSTS
         WHERE id = :id;";
  $rs =$conn->prepare($sql);
  $rs->bindValue(":id", $id, \PDO::PARAM_INT);
  return $rs->execute();
}

/**
 * updateById function
 *
 * @param \PDO $conn
 * @param array $data
 * @return void
 */
function updatedById(\PDO $conn, array $data){
  $sql = "UPDATE posts
          SET `titre` = :title, `sousTitre` = :subTitle, `texte` = :content
          WHERE id = :id;";
  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
  $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
  $rs->bindValue(':subTitle', $data['subTitle'], \PDO::PARAM_STR);
  $rs->bindValue(':content', $data['content'], \PDO::PARAM_STR);
  return $rs->execute();
}