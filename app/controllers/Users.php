<?php

class Users extends Controller{
  public function __construct() {
    $this->userModel = $this->model('User');
  }

  public function register() {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'name' => trim($_POST['name']), 
        'email' => trim($_POST['email']), 
        'password' => trim($_POST['password']), 
        'confirm_password' => trim($_POST['confirm_password']), 
        'name_err' => "", 
        'email_err' => "",  
        'password_err' => "", 
        'confirm_password_err' => "", 
      ];

      // Validate Email
      if(empty($data['email'])) {
        $data['email_err'] = "Please Enter an Email";
      } else {
        // Check Email
        if($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = "Email is already taken";
        } 
      }

      // Validate Name
      if(empty($data['name'])) {
        $data['name_err'] = "Please Enter a Name";
      } 

      // Validate Password
      if(empty($data['password'])) {
        $data['password_err'] = "Please Enter a Password";
      } elseif(strlen($data['password']) < 6) {
        $data['password_err'] = "Password must be at least 6 characters";
      }

      // Validate Confirm Password
      if(empty($data['confirm_password'])) {
        $data['confirm_password_err'] = "Please Confirm your Password";
      } else {
        if($data['confirm_password'] != $data['password']){
          $data['confirm_password_err'] = "Passwords do not match";
        } 
      }

      //  If Validated   
      if(!empty($data['name']) && !empty($data['email']) &&
         !empty($data['password']) && !empty($data['confirm_password'])) {

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Register User
        if($this->userModel->register($data)) {
          redirect('users/login');
        } else {
          die("Something went wrong");
        }
        
      } else {
        $this->view('users/register', $data);
      }

    } else {
      $data = [
        'name' => "", 
        'email' => "", 
        'password' => "", 
        'confirm_password' => "", 
        'name_err' => "", 
        'email_err' => "", 
        'password_err' => "", 
        'confirm_password_err' => "", 
      ];

      $this->view('users/register', $data);
    }
  }


  public function login() {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'email' => trim($_POST['email']), 
        'password' => trim($_POST['password']), 
        'email_err' => "",  
        'password_err' => "", 
      ];

      if(empty($data['email'])) {
        $data['email_err'] = "Please enter email";
      }

      if(empty($data['password'])) {
        $data['password_err'] = "Please enter password";
      }

      if(empty($data['email_err']) && empty($data['password_err'])) {
        die("Success");
      } else {
        $this->view('users/login', $data);
      }

    } else {
      $data = [
        'email' => "", 
        'password' => "", 
        'email_err' => "", 
        'password_err' => "", 
      ];

      $this->view('users/login', $data);
    }
  }
}