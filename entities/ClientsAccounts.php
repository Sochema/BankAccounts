<?php

class ClientsAccounts{
  protected $_id;
  protected $_iban;
  protected $_holder;
  protected $_amount;


//CONSTRUCTEUR
public function __construct($AllAccounts){
    $this->hydrate($AllAccounts);
  }

//SETTERS
  public function setId($id){
    $id = (int)$id;
      if(is_int($id) && $id>0){
        $this->_id=$id;
      }
  }

  public function setIban($iban){
    $iban = (int) $iban;
    $this->_iban=$iban;
  }

  public function setHolder($holder){
    if(is_string($holder)){
    $this->_holder=$holder;
    }
  }

  public function setAmount($amount){
    $amout = (int)$amount;
      if(is_int($amount)){
        $this->_amount=$amount;
      }
  }


//GETTER
public function getId(){
  return $this->_id;
}

public function getIban(){
  return $this->_iban;
}

public function getHolder(){
  return $this->_holder;
}

public function getAmount(){
  return $this->_amount;
}


//FUNCTION HYDRATE

  public function hydrate(array $AllAccounts){
    foreach($AllAccounts as $key => $value){
      $method='set'.ucfirst($key);
      if (method_exists($this, $method)){
        //$method = mon setter et je lui rajoute la sa valeur, value
      $this->$method($value);
      }
    }
  }




}



 ?>
