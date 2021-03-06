<?php
require ("../model/AccountsManager.php");

function loadClass($class){
  require("../entities/".$class.".php");
}
spl_autoload_register("loadClass");

$AccountsManager= new AccountsManager();

if(isset($_POST['submit'])){
  if(isset($_POST['iban'])){
    if (preg_match("#^[0-9]{9}$#", $_POST['iban'])) {
      if(isset($_POST['holder']) && is_string($_POST['holder'])) {
      // htmlspecialchars;
        if(isset($_POST['amount']) && $_POST['amount']>=0) {
          $ClientAccount= new ClientsAccounts($_POST);
          $AccountsManager->addAccounts($ClientAccount);
        } else {
          echo "The amount is not valid - The amount is a number over 0";
        }
      } else {
        echo "The holder's name is not valid. It should not contain any numbers.";
      }
    // }
    } else {
      echo "The IBAN is not valid. The IBAN composed of 9 numbers.";
    }
  }
}

//TO DISPLAY THE ACCOUNT ONE BY ONE
  $AllAccounts = $AccountsManager->getAccounts();
  foreach($AllAccounts as $key=>$value){
    $AllAccounts[$key] = new ClientsAccounts($value);
    // en fait $value correspond à ce qui va être envoyé dans mon constructeur Cats -> hydratation.
  }

//DELETE ACCOUNT
// $deleteAccount = $AccountsManager->deleteAccount($_GET['id']);

if(isset($_GET['accountId'])){
  $ClientId = $_GET['accountId'];
  $deleteAccount = $AccountsManager->deleteAccount($ClientId);
  header('Location: index.php');
}



include "../views/indexVue.php";
