<?php

require_once( __DIR__ . '/DAO.php');

class OrderDAO extends DAO {

  // public function selectDataByProduct($product_id){
  //   $sql = "SELECT * FROM `checkout_products` WHERE `product_id` = :product_id";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':product_id',$product_id);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  public function selectDataById($id){
    $sql = "SELECT * FROM `checkout` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insertData($data){
    $errors = $this->validate($data);
    if(empty($errors)){
      $sql = "INSERT INTO `checkout` (`email`,`name`,`country`,`state`,`city`,`postcode`,`street`,`bus`,`phone`) VALUES(:email ,:name, :country, :state, :city, :postcode, :street, :bus, :phone)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':email',$data['email']);
      $stmt->bindValue(':name',$data['name']);
      $stmt->bindValue(':country',$data['country']);
      $stmt->bindValue(':state',$data['state']);
      $stmt->bindValue(':city',$data['city']);
      $stmt->bindValue(':postcode',$data['postcode']);
      $stmt->bindValue(':street',$data['street']);
      $stmt->bindValue(':bus',$data['bus']);
      $stmt->bindValue(':phone',$data['phone']);
      if($stmt->execute()){
        return $this->selectDataById($this->pdo->lastInsertId());
      }
    }
    return false;
  }

  public function update($id, $data) {
    $errors = $this->getValidationErrors($data);
    if(empty($errors)) {
      $sql = "UPDATE `products` SET `title` = :title, `author` = :author, `price` = :price, WHERE `id` = :id";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':title', $data['title']);
      $stmt->bindValue(':author', $data['author']);
      $stmt->bindValue(':price', $data['price']);
      $stmt->bindValue(':id', $id);
      if($stmt->execute()) {
        return $this->selectById($id);
      }
    }
    return false;
  }

  public function delete($id) {
    $sql = "DELETE FROM `products` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function getValidationErrors($data){
    $errors = [];
    if (empty($data['email'])) {
      $errors['email'] = 'The email is required';
    }
    if (empty($data['name'])) {
      $errors['name'] = 'The name is required';
    }
    if (empty($data['country'])) {
      $errors['country'] = 'The country is required';
    }
    if (empty($data['state'])) {
      $errors['state'] = 'The state is required';
    }
    return $errors;
  }

}
