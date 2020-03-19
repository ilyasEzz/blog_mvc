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
          message('register_success', 'You are registered!');
          return redirect('users/login');
        } else {
          return die("Something went wrong");
        }
        
      } else {
        return $this->view('users/register', $data);
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

      return $this->view('users/register', $data);
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

      // Validate Email
      if(empty($data['email'])) {
        $data['email_err'] = "Please enter email";
      }

      // Validate Password
      if(empty($data['password'])) {
        $data['password_err'] = "Please enter password";
      }

      // Check if User Exists
      if(!$this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = "No User Found";
      }

      // If Validated
      if(empty($data['email_err']) && empty($data['password_err'])) {
        // Check and set logged In user
        $loggedInUser = $this->userModel->login($data['email'], $data['password']);

        // Create Session
        if($loggedInUser) {
          return $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = "Password Incorrect";
          return $this->view('users/login', $data);
        }
      // if Not Validated
      } else {
        return $this->view('users/login', $data);
      }

    } else {
      $data = [
        'email' => "", 
        'password' => "", 
        'email_err' => "", 
        'password_err' => "", 
      ];

      return $this->view('users/login', $data);
    }
  }

  public function createUserSession($user) {
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->name;
    $_SESSION['user_is_admin'] = $user->is_admin;

    return redirect('posts/index');
  }


  public function logout() {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_is_admin']);
    
    session_destroy();
    return redirect('users/login');
  }


  public function  dashboard() {
      if(!isAdmin()) return redirect("pages/index");

      $users =$this->userModel->getAll();

      $data = [
          'users' => $users
      ];

      return $this->view('users/dashboard', $data);
  }

  public function edit($id) {
    if(!isAdmin()) return redirect('pages/index');

    // POST REQUEST
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
        $data = [
          'id' => $id,
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'name_err' => '',
          'password_err' => '',
        ];

            // Validate data
            if(empty($data['name'])) {
              $data['name_err'] = "Please enter name";
            }

            if(empty($data['email'])) {
              $data['email_err'] = "Please enter email";
            }

            if(empty($data['password'])) {
              $data['password_err'] = "Please enter password";
            }

       
            // Validated Data
            if(empty($data['name_err']) && empty($data['email_err']) 
                && empty($data['password_err'])  ) {

              $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

              if($this->userModel->updateUser($data)) {
                message('user_message', "User Updated!");
                return redirect('user/dashboard');
              } else {
                die("Something went wrong");
              }

            } else {
                die(var_dump($data));
                return $this->view('users/edit', $data);
            }

        } else {
            // No POST REQUEST
            $user = $this->userModel->getUserById($id);


            $data = [
              'id' => $id,
              'name' => $user->name,
              'email' => $user->email,
              'password' => $user->password,
              'is_admin' => $user->is_admin
            ];

            return $this->view('users/edit', $data);
        }
    }
}


