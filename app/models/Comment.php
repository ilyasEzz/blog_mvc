<?php 

class Comment {
  private $model;

  public function __construct() {
    $this->model = new Model(); 
  }

  public function getCommentsByPost($id) {
    $this->model->query('SELECT * FROM comments WHERE post_id = :id');
    $this->model->bind(':id', $id);

    $results = $this->model->getAll();
    return $results;
  }
}