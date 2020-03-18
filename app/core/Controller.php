<?php 
/*
 * Base Controller
 * Loads the Models and Views
 */

class Controller{

  public function model($model) {
    require_once '../app/models/' . $model . '.php';
    return new $model();
  }


  public function view($view, $data =  []) {
    $template = '../app/views/' . $view . '.php';
    
    if(file_exists($template)) {
      require_once $template;
    } else {
      die("View Does Not Exist");
    }
  }
} 

