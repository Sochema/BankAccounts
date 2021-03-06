<?php

class AccountsManager {

  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=ScampiaAccounts;charset=utf8', 'root', 'root');
      return $bdd;
  }

  //FUNCTION WHICH GET ACCOUNTS DETAILS FROM THE DATABASE
    public function getAccounts(){
      $requete=$this->getBdd()-> query('SELECT * FROM accounts');
      $AllAccounts=$requete->fetchAll(PDO::FETCH_ASSOC);
      return $AllAccounts;
      // Fetch Assoc = Renvoie moi ça sous la forme d'un tableau associatif
    }

    //FUNCTION WHICH ADDS ACCOUNTS TO THE DATA BASE
      public function addAccounts($theAccount){
        $requete=$this->getBdd()->prepare('INSERT INTO accounts(iban, holder, amount) VALUES (:iban, :holder, :amount)');
        $requete->execute(array(
          'iban' => $theAccount->getIban(),
          'holder' => $theAccount->getHolder(),
          'amount' => $theAccount->getAmount()
        ));
      }

      //FUNCTION DELETE ACCOUNT
      public function deleteAccount($theAccount){
        $requete=$this->getBdd()->prepare('DELETE FROM accounts WHERE id=:id');
        $requete->execute(array(
          'id' => $theAccount
        ));
      }

      //FUNCTION WITHDRAWAL ACCOUNT


}


 ?>
