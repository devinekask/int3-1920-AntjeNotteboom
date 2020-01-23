<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';
require_once __DIR__ . '/../dao/OrderDAO.php';

class ProductsController extends Controller {

  private $productDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function index() {
    $products = $this->productDAO->selectAllProducts();
    $this->set('products', $products);
    $this->set('title', 'Home');
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
}
