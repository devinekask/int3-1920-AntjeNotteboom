<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class ProductsController extends Controller {

  private $productDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function index() {
    $products = $this->productDAO->selectAllProducts();
    $this->set('products', $products);
    $this->set('title', 'Home');

    // if(!empty($_POST['action'])){
    //   if($_POST['action'] == 'insertDate'){
    //     $insertedDate = $this->productDAO->insertDate($_SESSION);
    //     if(!$insertedDate){
    //       $errors = $this->productDAO->validate($_SESSION);
    //       $this->set('errors',$errors);
    //     }else{
    //       header('Location:index.php');
    //       exit();
    //     }
    //   }
    // }

    // $dates = $this->productDAO->selectAll();
    // $this->set('dates', $dates);

  }

  public function detail(){
    if(empty($_GET['id']) || !$product = $this->productDAO->selectById($_GET['id'])) {
      $_SESSION['error'] = 'Geen boek gevonden';
      header('Location: index.php');
    }
    $this->set('product', $product);
    $this->set('title', "detail");
  }

  public function cart(){
      if(!empty($_POST['action'])) {
        if ($_POST['action'] == 'add') {
          $this->_handleAdd();
          header('Location: index.php?page=detail&id=' . $_POST['id']);
          exit();
        }
        if ($_POST['action'] == 'empty') {
          $_SESSION['cart'] = array();
        }
        if ($_POST['action'] == 'update') {
          $this->_handleUpdate();
        }
        header('Location: index.php?page=cart');
        exit();
      }
      if (!empty($_POST['remove'])) {
        $this->_handleRemove();
        header('Location: index.php?page=cart');
        exit();
      };
  }

  private function _handleAdd() {
    if (empty($_SESSION['cart'][$_POST['id']])) {
      $product = $this->productDAO->selectById($_POST['id']);
      if (empty($product)) {
        return;
      }
      $_SESSION['cart'][$_POST['id']] = array(
        'product' => $product,
        'quantity' => 0
      );
    }
    $_SESSION['cart'][$_POST['id']]['quantity']++;
  }

  private function _handleRemove() {
    if (isset($_SESSION['cart'][$_POST['remove']])) {
      unset($_SESSION['cart'][$_POST['remove']]);
    }
  }

  public function checkout(){
    $this->set('title', "checkout");
  }
  public function payment(){
    $this->set('title', "payment");
  }
  public function message(){
    $this->set('title', "message");
  }
  public function longreadHome(){
    $this->set('title', "longreadHome");
  }
  public function longreadError(){
    $this->set('title', "longreadError");
  }
  public function longread(){
    $this->set('title', "longread");
  }


  // public function end(){
  //   $this->set('title', 'End');
  //   if(!empty($_POST['action'])){
  //     if($_POST['action'] == 'insertDate'){
  //       $insertedDate = $this->productDAO->insertDate($_SESSION);
  //       if(!$insertedDate){
  //         $errors = $this->productDAO->validate($_SESSION);
  //         $this->set('errors',$errors);
  //       }else{
  //         header('Location:index.php');
  //         exit();
  //       }
  //     }
  //   }
  // }

  // public function date(){
  //   $this->set('title','Date');
  //   $locations = $this->locationDAO->selectAll();
  //   $this->set('locations', $locations);
  //   $repeats = $this->repeatDAO->selectAll();
  //   $this->set('repeats', $repeats);
  // }

  // public function serie(){
  //   $this->set('title','Serie');
  //   $following = $this->serieDAO->selectFollowing();
  //   $this->set('following', $following);
  //   if(!empty($_GET['id'])){
  //     $serie = $this->serieDAO->selectById($_GET['id']);
  //   }
  //   $this->set('seasons',$this->serieDAO->selectAllSeasons());
  //   $this->set('episodes',$this->serieDAO->selectAllEpisodes());
  // }

  // public function extra(){
  //   $this->set('title','Extra');
  //   $snacks = $this->snackDAO->selectAll();
  //   $this->set('snacks', $snacks);
  //   $friends = $this->friendDAO->selectAll();
  //   $this->set('friends', $friends);
  // }

  // public function detail(){
  //   $this->set('title','Details');
  //   if(!empty($_GET['id'])){
  //     $serie = $this->serieDAO->selectById($_GET['id']);
  //   }

  //   if(empty($serie)){
  //     $_SESSION['error'] = 'De serie werd niet gevonden';
  //     header('Location:index.php');
  //     exit();
  //   }
  //   $this->set('serie',$serie);
  //   $this->set('seasons',$this->serieDAO->selectSeasons($_GET['id']));
  //   $this->set('episodes',$this->serieDAO->selectEpsiodesBySeason($_GET['id']));
  // }

  // public function search(){
  //   $this->set('title','Search');
  //   /*if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
  //     $series = $this->serieDAO->search($_GET['term']);
  //     $this->set('term',$_GET['term']);
  //   }else{
  //     $series = $this->serieDAO->selectAll();
  //     $this->set('term','');
  //   }
  //   $this->set('series', $series);*/
  //   $term = '';

  //   if(!empty($_GET['term'])){
  //     $term = $_GET['term'];
  //     $this->set('series',$this->serieDAO->selectSearch($term));
  //   }else{
  //     $this->set('series',$this->serieDAO->selectAll());
  //   }


  // }

  // public function location(){
  //   $this->set('title','Location');
  //   $locations = $this->locationDAO->selectAll();
  //   $this->set('locations', $locations);

  //   if(!empty($_POST['action'])){
  //     if($_POST['action'] == 'insertLocation'){
  //       $insertedLocation = $this->locationDAO->insertLocation($_POST);
  //       if(!$insertedLocation){
  //         $errors = $this->locationDAO->validate($_POST);
  //         $this->set('errors',$errors);
  //       }else{
  //         header('Location:index.php?page=location');
  //         exit();
  //       }
  //     }
  //   }
  // }

  // public function friend(){
  //   $this->set('title','Friend');
  //   $friends = $this->friendDAO->selectAll();
  //   $this->set('friends', $friends);

  //   if(!empty($_POST['action'])){
  //     if($_POST['action'] == 'insertFriend'){
  //       $insertedFriend = $this->friendDAO->insertFriend($_POST);
  //       if(!$insertedFriend){
  //         $errors = $this->friendDAO->validate($_POST);
  //         $this->set('errors',$errors);
  //       }else{
  //         header('Location:index.php?page=friend');
  //         exit();
  //       }
  //     }
  //   }
  // }

}
