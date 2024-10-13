<?php
include_once 'users.php';
  class UsersContr extends Users {
    public function createUser($name, $email, $password) {
      $this->setUser($name, $email, $password);

    }
      public function register() {

          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $name = $_POST['username'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              $userController = new UsersContr();

              $userController->createUser($name, $email, $password);

              echo "User registered successfully!";

          } else {
              require "register.php";
          }
      }
      public function index() {
          require "homeview.php";
      }

      public function login() {

          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $username = $_POST['username'];
              $password = $_POST['password'];

              $user = $this->getUser($username);
              if ($user && $user['password'] === $password) {
                  if (session_status() === PHP_SESSION_NONE) {
                      session_start();
                  }
                  $_SESSION['username'] = $user['name'];
                  $_SESSION['id'] = $user['id'];

                  header('Location: index');
                  exit();
              } else {
                  echo "Invalid username or password. Please try again.";
              }
          } else {
              require "loginview.php";
          }

      }

      public function logout() {
          session_unset();
          session_destroy();
          header("Location: /WEBTopd3/index.php");
      }

  }
