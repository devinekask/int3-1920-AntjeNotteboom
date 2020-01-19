<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class SeriesController extends Controller {

  private $productDAO;

  function __construct() {
    $this->productDAO = new SerieDAO();
  }

  public function index() {
    $this->set('title', 'Home');
    $following = $this->serieDAO->selectFollowing();
    $this->set('following', $following);

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertDate'){
        $insertedDate = $this->dateDAO->insertDate($_SESSION);
        if(!$insertedDate){
          $errors = $this->dateDAO->validate($_SESSION);
          $this->set('errors',$errors);
        }else{
          header('Location:index.php');
          exit();
        }
      }
    }

    $dates = $this->dateDAO->selectAll();
    $this->set('dates', $dates);

  }

  public function end(){
    $this->set('title', 'End');
    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertDate'){
        $insertedDate = $this->dateDAO->insertDate($_SESSION);
        if(!$insertedDate){
          $errors = $this->dateDAO->validate($_SESSION);
          $this->set('errors',$errors);
        }else{
          header('Location:index.php');
          exit();
        }
      }
    }
  }

  public function date(){
    $this->set('title','Date');
    $locations = $this->locationDAO->selectAll();
    $this->set('locations', $locations);
    $repeats = $this->repeatDAO->selectAll();
    $this->set('repeats', $repeats);
  }

  public function serie(){
    $this->set('title','Serie');
    $following = $this->serieDAO->selectFollowing();
    $this->set('following', $following);
    if(!empty($_GET['id'])){
      $serie = $this->serieDAO->selectById($_GET['id']);
    }
    $this->set('seasons',$this->serieDAO->selectAllSeasons());
    $this->set('episodes',$this->serieDAO->selectAllEpisodes());
  }

  public function extra(){
    $this->set('title','Extra');
    $snacks = $this->snackDAO->selectAll();
    $this->set('snacks', $snacks);
    $friends = $this->friendDAO->selectAll();
    $this->set('friends', $friends);
  }

  public function detail(){
    $this->set('title','Details');
    if(!empty($_GET['id'])){
      $serie = $this->serieDAO->selectById($_GET['id']);
    }

    if(empty($serie)){
      $_SESSION['error'] = 'De serie werd niet gevonden';
      header('Location:index.php');
      exit();
    }
    $this->set('serie',$serie);
    $this->set('seasons',$this->serieDAO->selectSeasons($_GET['id']));
    $this->set('episodes',$this->serieDAO->selectEpsiodesBySeason($_GET['id']));
  }

  public function search(){
    $this->set('title','Search');
    /*if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $series = $this->serieDAO->search($_GET['term']);
      $this->set('term',$_GET['term']);
    }else{
      $series = $this->serieDAO->selectAll();
      $this->set('term','');
    }
    $this->set('series', $series);*/
    $term = '';

    if(!empty($_GET['term'])){
      $term = $_GET['term'];
      $this->set('series',$this->serieDAO->selectSearch($term));
    }else{
      $this->set('series',$this->serieDAO->selectAll());
    }


  }

  public function location(){
    $this->set('title','Location');
    $locations = $this->locationDAO->selectAll();
    $this->set('locations', $locations);

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertLocation'){
        $insertedLocation = $this->locationDAO->insertLocation($_POST);
        if(!$insertedLocation){
          $errors = $this->locationDAO->validate($_POST);
          $this->set('errors',$errors);
        }else{
          header('Location:index.php?page=location');
          exit();
        }
      }
    }
  }

  public function friend(){
    $this->set('title','Friend');
    $friends = $this->friendDAO->selectAll();
    $this->set('friends', $friends);

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertFriend'){
        $insertedFriend = $this->friendDAO->insertFriend($_POST);
        if(!$insertedFriend){
          $errors = $this->friendDAO->validate($_POST);
          $this->set('errors',$errors);
        }else{
          header('Location:index.php?page=friend');
          exit();
        }
      }
    }
  }

}
