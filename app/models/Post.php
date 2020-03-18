<?php 

class Post {
  private $model;

  public function __construct() {
    $this->model = new Model;
  }

  public function getPosts() {

    $this->model->query('SELECT *,
    posts.id as postId, users.id as userId,
    posts.created_at as postCreated,
    users.created_at as userCreated
    FROM posts
    INNER JOIN users ON posts.user_id = users.id
    ORDER BY posts.created_at DESC
    ');

    $results = $this->model->getAll();
    return $results;
  }


  public function addPost($data)  {
    $this->model->query('INSERT INTO posts (title, user_id, body) VALUES(:title, :user_id, :body)');

    $this->model->bind(':title', $data['title']);
    $this->model->bind(':user_id', $data['user_id']);
    $this->model->bind(':body', $data['body']);

    return ($this->model->execute()) ? true : false; 
  }
  

  public function getPostById($id) {
    $this->model->query('SELECT * FROM posts WHERE id = :id ');
    $this->model->bind(':id', $id);

    $row = $this->model->get();
    return $row;
  }
}