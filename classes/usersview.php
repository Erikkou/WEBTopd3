<?php
  class UsersView extends Users {
    public function showUser($name) {
      $results = $this->getUser($name);
      echo "Name: " . $results[0]['users_name'] . "<br>";

    }
  }
