<?php
  session_start();

  function isLoggedIn() {
    return (isset($_SESSION['user_id'])) ? true : false;
  }

  
  function redirect($page) {
    return header('location: ?url=' . $page);
  }


  function isAdmin() {
    return $_SESSION['user_is_admin'] ?? false;
  }


