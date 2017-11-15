<?php include("template/header.php"); ?>



<div class="container-fluid">
  <div class="cards justify-content-around">

<?php foreach ($AllAccounts as $AnAccount){ ?>
<!-- CARDS  -->
<div class="card m-10" style="width: 20rem;">
  <div class="card-body">
    <h4 class="card-title"><strong>IBAN: </strong><?php echo $AnAccount->getIban();?></h4>
    <h6 class="card-subtitle mb-2 text-muted"><strong>Holder: </strong><?php echo $AnAccount->getHolder(); ?></h6>
    <p class="card-text"><strong>Amount: </strong><?php echo $AnAccount->getAmount(); ?> €</p>
    <div class="row" id="menubar">
      <a class="col-6 delete btn btn-outline-secondary" href="index.php?accountId=<?php echo $AnAccount->getId(); ?>">DELETE ACCOUNT</a>
      <a class="col-6 btn btn-outline-secondary" href="index.php?accountId=<?php echo $AnAccount->getId(); ?>">TRANSFER</a>
      <a class="col-6 btn btn-outline-secondary" href="index.php?accountId=<?php echo $AnAccount->getId(); ?>">PAYMENT</a>
      <a class="col-6 btn btn-outline-secondary" href="index.php?accountId=<?php echo $AnAccount->getId(); ?>">WITHDRAWAL</a>
    </div>
  </div>
</div>
<?php
 }
 ?>
 </div>
</div>

<!--ADD FORM-->

<form class="addform" method="post" action="">
  <h2> CREATE YOUR OWN ACCOUNT </h2>
  <div class="form-group">
    <label for="iban">Iban</label>
    <input type="number" name="iban" class="form-control" id="iban" placeholder="Iban">
    <small>The IBAN number is composed of 9 numbers</small>
  </div>
  <div class="form-group">
    <label for="holder">Holder's name</label>
    <input name="holder" type="text" class="form-control" id="holder" placeholder="Holder">
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="number" name="amount" class="form-control" id="amount" placeholder="€">
    <small>To open an account, the amount should be positive.</small>
  </div>
<input type="submit" name="submit" class="btn btn-outline-secondary"></input>
</form>


<hr>


<form class="" method="post" action="">
  <h2> WITHDRAWAL </h2>
  <div class="form-group">
    <label for="amount">Amount of the payment</label>
    <input type="number" name="amount" class="form-control" id="amount" placeholder="€">
    <small>Enter your amount (it should be a positive amount).</small>
  </div>
<input type="submit" name="submit" class="btn btn-outline-secondary"></input>
</form>

<hr>



<form class="" method="post" action="">
  <h2> PAYMENTS </h2>
  <div class="form-group">
    <label for="debited">Debited Account</label>
    <input type="number" name="debited" class="form-control" id="debited" placeholder="IBAN account">
    <small>Enter the IBAN number of the debited account</small>
  </div>
  <div class="form-group">
    <label for="credited">Credited Account</label>
    <input name="credited" type="number" class="form-control" id="credited" placeholder="IBAN account">
  </div>
  <div class="form-group">
    <label for="amount">Amount of the payment</label>
    <input type="number" name="amount" class="form-control" id="amount" placeholder="€">
    <small>Enter a positive account.</small>
  </div>
<input type="submit" name="submit" class="btn btn-outline-secondary"></input>
</form>



<!--
      <div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Transfer</h4>
      </div>
      <div class="modal-body">
        <p>Debited account</p>
        <input type="text" name="debit">
        <p>Credited account</p>
        <input type="text" name="credit">
        <p>Amount in dollars</p>
        <input type="text" name="amount">
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit" class="btn btn-outline-secondary" data-dismiss="modal">Submit</button>
      </div> -->










<?php include("template/footer.php"); ?>
