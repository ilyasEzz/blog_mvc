<?php

class Posts extends Controller {
  public function __construct() {
    $this->postModel = $this->model('Post');
    $this->userModel = $this->model('User');
  }

  public function index() {
    $posts = $this->postModel->getPosts();

    $data = [
      'posts' => $posts
    ];

    return $this->view('posts/index', $data);
  }

  public function add() {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'title' => trim($_POST['title']),
        'body' => trim($_POST['body']),
        'user_id' => trim($_SESSION['user_id']),
        'title_err' => '',
        'body_err' => ''
      ];

      // Validate data
      if(empty($data['title'])) {
        $data['title_err'] = "Please enter title";
      }

      if(empty($data['body'])) {
        $data['body_err'] = "Please enter body text";
      }

      // Validated Data
      if(empty($data['title_err']) && empty($data['title_err'])) {

        if($this->postModel->addPost($data)) {
          message('post_added', "Post Added!");
          return redirect('posts/index');
        } else {
          die("Something went wrong");
        }

      } else {
        return $this->view('posts/add', $data);
      }
    }

    $data = [
      'title' => '',
      'body' => '',
    ];

    return $this->view('posts/add', $data);
  }

  
  public function show($id)  {
    $post = $this->postModel->getPostById($id);
    $user = $this->userModel->getUserById($post->user_id);
    
    $data = [ 
      'post' => $post,
      'user' => $user
    ];

    return $this->view('posts/show', $data);
  }
}

