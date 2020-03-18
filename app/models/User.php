<?php 

class User {
  private $model;

  public function __construct() {
    $this->model = new Model;
  }

  public function register($data){
    $this->model->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');

    $this->model->bind(':name', $data['name']);
    $this->model->bind(':email', $data['email']);
    $this->model->bind(':password', $data['password']);

    return ($this->model->execute()) ? true : false; 
  }

  public function findUserByEmail($email) {
    $this->model->query('SELECT * FROM users WHERE email = :email');
    $this->model->bind(':email', $email);

    $row = $this->model->get();
    return ($this->model->rowCount() > 0) ? true : false; 
  }
}