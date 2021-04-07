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


<br>

<form action="" method="POST" name="loginForm">
        <input type="text" id="WithdrawPlace" name="WithdrawHolder">
        
</form>

<br>

<div id="">
		  
          <button id="ten" class="controlButton clickable" data-state="10">10</button>
  
          <button id="twenty" class="controlButton clickable" data-state="20">20</button>
  
          <button id="fifty" class="controlButton clickable" data-state="50">50</button>
  
          <button id="ahundo" class="controlButton clickable" data-state="100">100</button>

          <br><br>
  
          <button id="withdraw" class="controlButton clickable" data-state="withdraw">Withdraw</button>

          <button id="cur_balance" class="controlButton clickable" data-state="balance">Current Balance</button>
      </div>
<!-- . IS NAAM -->
<!-- # IS ID -->
	


</body>
</html>

    <!-- Keypad script -->
<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

var input = 0;

$('.controlButton').on('click',function() {
  console.log(this.id);

  switch(this.id){
    case 'ten': 
    input += 10;
    console.log(input);
    $('#WithdrawPlace').val(input);
    break;

    case 'twenty':
    input += 20;
    console.log(input);
    $('#WithdrawPlace').val(input);
    break;

    case 'fifty':
    input += 50;
    console.log(input);
    $('#WithdrawPlace').val(input);
    break;

    case 'ahundo':
    input += 100;
    console.log(input);
    $('#WithdrawPlace').val(input);
    break;

    case 'withdraw':
    
    $('#WithdrawPlace').val("You've withdrawn: " + input);
   
    function();
    input = 0;
    break;

    case 'cur_balance':
    
    break;


}
})

function withDraw(){
    
}
</script>

<?php


