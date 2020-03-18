<?php

class Posts extends Controller {
  public function __construct() {
    $this->var = $var;
  }

  public function index() {
    $data = [];

    return $this->view('posts/index', $data);
  }
}