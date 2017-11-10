<?php
require ("../entities/ClientsAccounts.php");
require ("../model/AccountsManager.php");

$AccountsManager= new AccountsManager();

if(isset($_POST['iban'], $_POST['holder'], $_POST['amount'])){
  if(is_int($_POST['iban'], $_POST['amout']) && is_string($_POST['holder'])){
    $ClientAccount= new ClientsAccounts($_POST);
    $AccountsManager->addAccounts($ClientAccount);
  } else {
    echo 'Error - Something is wrong. Reminder : The Iban should be between 0 and 10000000 included, the amount is an intege and the holder\'s name can\'t contain a number';
  }
}
  // $AllAccounts = $AccountsManager->getAccounts();

  // foreach($AllAccounts as $key=>$value){
  //   $AllAccounts[$key] = new ($value);
  //   // en fait $value correspond à ce qui va être envoyé dans mon constructeur Cats -> hydratation.
  // }


include "../views/indexVue.php";
 ?>
