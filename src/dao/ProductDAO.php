<?php

require_once( __DIR__ . '/DAO.php');

class SerieDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `products`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `products` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectFollowing(){
    $sql = "SELECT * FROM `series` WHERE `following` = 'yes' ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectSeasons($id){
    $sql = "SELECT DISTINCT `season` FROM `episodes` WHERE `serie_id` = :id ORDER BY `season`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectEpsiodesBySeason($id){
    $sql = "SELECT * FROM `episodes` WHERE `serie_id` = :id AND `season`= 1 ORDER BY `episode` ASC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllSeasons(){
    $sql = "SELECT DISTINCT `season` FROM `episodes` ORDER BY `season`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllEpisodes(){
    $sql = "SELECT DISTINCT `episode` FROM `episodes` ORDER BY `episode`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
