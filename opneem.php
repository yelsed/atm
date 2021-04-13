<?php
include 'waarnaartoe.php';
include 'begin.php';
echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>ATM</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php if(!isset($_SESSION['id'])): ?>

<p>LOGIN FAILED</p>

<a href="destroy.php">
  <button id="quit" class="controlButton clickable" data-state="quit">Kwit :)</button>
</a>
<br>
<?php else : ?>
  <form action="geld.php" method="POST" name="geld">
    <input type="text" id="WithdrawPlace" name="WithdrawHolder" readonly>
    <button id="withdraw" class="controlButton clickable" data-state="withdraw">Withdraw</button>

    <input type="hidden" id="stuurOp" name="stuurOp">
    <input type="hidden" id="input" name="input">


  </form>

<br>

  <div id="buttons"> 
    <button id="ten" class="controlButton clickable" data-state="10">10</button>

    <button id="twenty" class="controlButton clickable" data-state="20">20</button>

    <button id="fifty" class="controlButton clickable" data-state="50">50</button>

    <button id="ahundo" class="controlButton clickable" data-state="100">100</button>
    <br><br>

    <button id="cur_balance" class="controlButton clickable" data-state="balance">Current Balance</button>

  </div>
  <br>
  <a href="destroy.php">
  <button id="quit"  class="controlButton clickable" data-state="quit">Kwit :)</button>
  </a>

</body>
</html>
    <!-- Keypad script -->
<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

var saldo='<?php echo $_SESSION["saldo"];?>';
var input = 0;

if(saldo < 10){
  $('#WithdrawPlace').val("You don't have enough moneyBills to withdraw.");
  $("#buttons").hide();
}else{

$('.controlButton').on('click',function() {
  
  switch(this.id){
    case 'ten': 
    console.log(this.id);
    input += 10;
    $('#WithdrawPlace').val(input);
    break;

    case 'twenty':
    input += 20;
    $('#WithdrawPlace').val(input);
    break;

    case 'fifty':
    input += 50;
    $('#WithdrawPlace').val(input);
    break;

    case 'ahundo':
    input += 100;
    $('#WithdrawPlace').val(input);
    break;

    case 'withdraw':
    withDraw(input);
    input = 0;
    break;

    case 'cur_balance':
    var functie='<?php  opneem();?>';
    // console.log(functie);
    $('#WithdrawPlace').val("You have got this much euros left: €" + saldo + ",-");
    break;
  
}
});

function withDraw(input){
  $("#buttons").hide();
 
    moneyBillsAction(input);
    
     
}


function moneyBillsAction(x){

  uitkomst = saldo - x;

  $('#stuurOp').val(uitkomst);
  $('#input').val(x);


  console.log(uitkomst);

}


}
</script>

<?php endif; ?>
