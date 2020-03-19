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

    return (password_verify($password, $hashed_password))  
    ? $row : false;
  }


  public function getUserById($id) {
    $this->model->query('SELECT * FROM users WHERE id = :id ');
    $this->model->bind(':id', $id);

    $row = $this->model->get();
    return $row;
  }

  public function getAll() {
      $this->model->query('SELECT * FROM users');
      $results = $this->model->getAll();
      return $results;
  }


  public function updateUser($data)  {
    $this->model->query('UPDATE users SET name = :name, email = :email, 
                        password = :password WHERE id = :id');

    $this->model->bind(':id', $data['id']);
    $this->model->bind(':name', $data['name']);
    $this->model->bind(':email', $data['email']);
    $this->model->bind(':password', $data['password']);

    return ($this->model->execute()) ? true : false; 
  }


  public function deleteUser($id) {
    $this->model->query('DELETE FROM users WHERE id = :id');
    $this->model->bind(':id', $id);

    return ($this->model->execute()) ? true : false; 
  }
}