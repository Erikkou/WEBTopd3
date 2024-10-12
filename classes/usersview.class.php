<?php
  class UsersView extends Users {
    public function showUser($naam) {
      $results = $this->getUser($naam);
      echo "Naam: " . $results[0]['users_naam'] . "<br>";

    }
  }
