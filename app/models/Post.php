<?php 

class Post {
  private $model;

  public function __construct() {
    $this->model = new Model;
  }

  public function getPosts() {

    $this->model->query('SELECT *,
    posts.id as postId,
    users.id as userId,
    posts.created_at as postCreated,
    users.created_at as userCreated
    FROM posts
    INNER JOIN users
    ON posts.user_id = users.id
    ORDER BY posts.created_at DESC
    ');
    $results = $this->model->getAll();
    return $results;
  }
}