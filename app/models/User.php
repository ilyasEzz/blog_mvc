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


  public function login($email, $password) {
    $this->model->query('SELECT * FROM users WHERE email = :email');
    $this->model->bind(':email', $email);

    $row = $this->model->get();
    $hashed_password = $row->password;

    if(password_verify($password, $hashed_password)) {
      return $row;
    } else {
      return false;
    }
  }


  public function getUserById($id) {
    $this->model->query('SELECT * FROM users WHERE id = :id ');
    $this->model->bind(':id', $id);

    $row = $this->model->get();
    return $row;
  }
}