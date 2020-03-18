<?php 

class User {
  private $model;

  public function __construct() {
    $this->model = new Model;
  }

  public function findUserByEmail($email) {
    $this->model->query('SELECT * FROM users WHERE email = :email');
    $this->model->bind(':email', $email);

    $row = $this->model->get();
    return ($this->model->rowCount() > 0) ? true : false; 
  }
}