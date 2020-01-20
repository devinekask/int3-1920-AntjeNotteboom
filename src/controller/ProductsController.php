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
    $this->set('title', "cart");
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
