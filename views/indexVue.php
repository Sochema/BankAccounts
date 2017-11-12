<?php include("template/header.php"); ?>

<div class="menu d-flex justify-content-around">
  <button class="btn btn-outline-secondary" data-toggle="modalOne" data-target="#modalOne">TRANSFER</button>
  <button class="btn btn-outline-secondary" data-toggle="modal2" data-target="#myModal2">PAYMENT</button>
  <button class="btn btn-outline-secondary" data-toggle="modal3" data-target="#myModal3">WITHDRAWAL</button>
</div>

<!-- CARDS  -->
<div class="card d-flex justify-content-around">
  <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">

    </p>
  </div>
</div>


<!--ADD FORM-->

<form method="post" action="">
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
