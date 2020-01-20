<?php

require_once( __DIR__ . '/DAO.php');

class ProductDAO extends DAO {

  public function selectAllProducts(){
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

  public function insert($data) {
    $errors = $this->getValidationErrors($data);©
    if(empty($errors)) {
      $sql = "INSERT INTO `checkout` (`email`, `name`, `country`, `state`, `city`, `postcode`, `street`, `bus`, `phone`) VALUES (:email, :name, :country, :state, :city, :postcode, :street, :bus, :phone)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':country', $data['country']);
      $stmt->bindValue(':state', $data['state']);
      $stmt->bindValue(':city', $data['city']);
      $stmt->bindValue(':postcode', $data['postcode']);
      $stmt->bindValue(':street', $data['street']);
      $stmt->bindValue(':bus', $data['bus']);
      $stmt->bindValue(':phone', $data['phone']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }


}
