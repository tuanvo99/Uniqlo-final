<?php
$pages = array(
  'error' => ['errors'],
  'main' => ['layouts', 'archive', 'login', 'register', 'detail', 'detail_blog','cart','log'],
  'admin' => ['layouts', 'members', 'products','menproducts','womenproducts','shoesproducts', 'comments','order','order_details']
);
$controllers = array(

  'errors' => ['index'],
  'layouts' => ['index'], 
  'members' => ['index'],
  'products' => ['index','add','edit','delete','vote'],
  'menproducts' => ['index','add','edit','delete','vote','sortByPriceHighToLow','sortByPriceLowToHigh'],
  'womenproducts' => ['index','add','edit','delete','vote','sortByPriceHighToLow','sortByPriceLowToHigh'],
  'comments' => ['index','hide','add','edit','delete'],
  'admin' => ['index', 'add', 'edit', 'delete'],
  'user' => ['index', 'add', 'editInfo', 'editPass', 'delete'],
  'company' => ['index', 'add', 'edit', 'delete'],
  'login' => ['index', 'check', 'logout'],
  'order' => ['index','order'] ,
  'order_details' => ['index','order_details','confirm'] ,
  'detail' => ['index','vote'],
  'archive' => ['index'],
  'register' => ['index', 'submit', 'editInfo'],
  'cart' => ['index','submit','update','order'],
  'log' => ['index']
); 
if (!array_key_exists($page, $pages) || !array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $page = 'error';
  $controller = 'errors';
  $action = 'index';
}
if($page=='error'){
  $controller = 'errors';
  $action = 'index';
}
include_once('controllers/' .$page ."/" . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();