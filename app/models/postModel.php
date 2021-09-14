<?php

/**
 * 
 *  ./app/models/postModel.php
 * 
 */

namespace App\Models\PostModel;


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
    ORDER BY datePublication ASC
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
