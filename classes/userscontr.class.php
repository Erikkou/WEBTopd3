<?php
  class UsersContr extends Users {
    public function createUser($naam, $password) {
      $this->setUser($naam, $password);
    }
  }
