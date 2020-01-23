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

  public function delete($id) {
    $sql = "DELETE FROM `products` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function insert($data) {
    $errors = $this->getValidationErrors($data);
    if(empty($errors)) {
      $sql = "INSERT INTO `products` (`title`, `author`, `price`, `description`) VALUES (:title, :author, :price, :description)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':title', $data['title']);
      $stmt->bindValue(':author', $data['author']);
      $stmt->bindValue(':price', $data['price']);
      $stmt->bindValue(':description', $data['description']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
    return false;
  }

  
  // public function insert($data) {
  //   $errors = $this->getValidationErrors($data);
  //   if(empty($errors)) {
  //     $sql = "INSERT INTO `checkout` (`email`, `name`, `country`, `state`, `city`, `postcode`, `street`, `bus`, `phone`) VALUES (:email, :name, :country, :state, :city, :postcode, :street, :bus, :phone)";
  //     $stmt = $this->pdo->prepare($sql);
  //     $stmt->bindValue(':email', $data['email']);
  //     $stmt->bindValue(':name', $data['name']);
  //     $stmt->bindValue(':country', $data['country']);
  //     $stmt->bindValue(':state', $data['state']);
  //     $stmt->bindValue(':city', $data['city']);
  //     $stmt->bindValue(':postcode', $data['postcode']);
  //     $stmt->bindValue(':street', $data['street']);
  //     $stmt->bindValue(':bus', $data['bus']);
  //     $stmt->bindValue(':phone', $data['phone']);
  //     if($stmt->execute()) {
  //       $insertedId = $this->pdo->lastInsertId();
  //       return $this->selectById($insertedId);
  //     }
  //   }
  //   return false;
  // }


}
