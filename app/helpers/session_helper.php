<?php
  session_start();

  function isLoggedIn() {
    return (isset($_SESSION['user_id'])) ? true : false;
  }


  function isAdmin() {
    return $_SESSION['user_is_admin'] ?? false;
  }


  // Flash message helper
  // EXAMPLE - flash('register_success', 'You are now registered');
  // DISPLAY IN VIEW - message('register_success');
  function message($name = '', $message = '', $class = 'alert alert-success'){
    if(!empty($name)){
      if(!empty($message) && empty($_SESSION[$name])){
        if(!empty($_SESSION[$name])){
          unset($_SESSION[$name]);
        }

        if(!empty($_SESSION[$name. '_class'])){
          unset($_SESSION[$name. '_class']);
        }

        $_SESSION[$name] = $message;
        $_SESSION[$name. '_class'] = $class;
      } elseif(empty($message) && !empty($_SESSION[$name])){
        $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
        echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
        unset($_SESSION[$name]);
        unset($_SESSION[$name. '_class']);
      }
    }
  }