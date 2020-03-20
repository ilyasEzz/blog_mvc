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

  function truncate($text, $chars = 25) {
    if (strlen($text) <= $chars) return $text;
    
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}
