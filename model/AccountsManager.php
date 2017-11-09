<?php

class AccountsManager {

  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=atelierPOO;charset=utf8', 'root', '');
      return $bdd;
  }

}


 ?>
