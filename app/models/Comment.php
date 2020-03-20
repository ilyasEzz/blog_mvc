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


  public function getCommentById($id) {
    $this->model->query('SELECT * FROM comments WHERE id = :id');
    $this->model->bind(':id', $id);

    $row = $this->model->get();
    return $row;
  }


  public function addComment($data)  {
    $this->model->query('INSERT INTO comments (author, post_id, text) VALUES(:author, :post_id, :text)');

    $this->model->bind(':author', $data['author']);
    $this->model->bind(':post_id', $data['post_id']);
    $this->model->bind(':text', $data['text']);

    return ($this->model->execute()) ? true : false; 
  }


  public function deleteComment($id) {
    $this->model->query('DELETE FROM comments WHERE id = :id');
    $this->model->bind(':id', $id);

    return ($this->model->execute()) ? true : false; 
  }
}
