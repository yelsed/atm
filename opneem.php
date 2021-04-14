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
    <input type="hidden" id="money10" name="money10">
    <input type="hidden" id="money20" name="money20">
    <input type="hidden" id="money50" name="money50">
    <input type="hidden" id="money100" name="money100">
    <input type="hidden" id="saldo" name="saldo">



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
var money10 = 0;
var money20 = 0;
var money50 = 0;
var money100 = 0;

if(saldo < 10){
  $('#WithdrawPlace').val("You don't have enough moneyBills to withdraw.");
  $("#buttons").hide();
  $('#withdraw').hide();
}else{

$('.controlButton').on('click',function() {
  
  switch(this.id){
    case 'ten': 
    console.log(this.id);
    input += 10;
    money10 += 1;
    $('#WithdrawPlace').val(input);
    break;

    case 'twenty':
    input += 20;
    money20 += 1;
    $('#WithdrawPlace').val(input);
    break;

    case 'fifty':
    input += 50;
    money50 += 1;
    $('#WithdrawPlace').val(input);
    break;

    case 'ahundo':
    input += 100;
    money100 += 1;
    $('#WithdrawPlace').val(input);
    break;
    
    case 'withdraw':
    withDraw(input,money10, money20,money50,money100);
    input = 0;
    break;

    case 'cur_balance':
    $('#WithdrawPlace').val("You have got this much euros left: €" + saldo + ",-");
    break;
  
}
});

function withDraw(input,money10, money20,money50,money100){
  $("#buttons").hide();
 
    moneyBillsAction(input,money10,money20,money50,money100);
    
     
}


function moneyBillsAction(x,money10, money20,money50,money100){

  uitkomst = saldo - x;

  $('#stuurOp').val(uitkomst);
  $('#input').val(x);
  $('#money10').val(money10);
  $('#money20').val(money20);
  $('#money50').val(money50);
  $('#money100').val(money100);
  $('#saldo').val(saldo);


  console.log(uitkomst);

}


}
</script>

<?php endif; ?>
