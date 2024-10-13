<?php

include_once 'Dbh.class.php';
  class Users extends Dbh {
    protected function getUser($name) {
      $sql = "SELECT * FROM users WHERE name = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name]);
      // Use fetch() for 1 row, and fetchAll() for all rows
      $results = $stmt->fetch(PDO::FETCH_ASSOC);
      return $results;
    }

    protected function setUser($naam, $email, $password) {
      $sql = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$naam, $email, $password]);
    }
  }
