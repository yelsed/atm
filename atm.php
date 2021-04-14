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

<div class="container">
        <!-- Login -->
    <div id="login_form_div">
        <form action="waarnaartoe.php" method="POST" name="loginForm">
            Bijvoorbeeld: NL00 BANK 0000 0000 00
            <input type="text" name="UserInfo" data-role="keypad" data-position="bottom-right" placeholder="Account Nummer" data-keys="INGB ,ABNA , RABO , ASNB , NL, 0,1,2,3,4,5,6,7,8,9, , , " data-key-length="18">
            <input type="password" name="Pin" data-role="keypad"  placeholder="Enter pin" data-key-length="4">
            <button name="login" id="login" placeholder="Login" value="Login">Login</button>
            
        </form>
        <br>
        <button name="toRegister" id="toRegister">Naar Registreren</button>

    </div>

    <br>

        <!-- Registreren -->
    <div id="registreren_form_div">
        <form action="waarnaartoe.php" method="POST" name="registerForm">
            <input type="text" name="fullName" placeholder="Full name">
            <select name="dropdownie">
            <option value="" selected disabled hidden>Kies bank</option>
            <option name="INGB">ING</option>
            <option name="ABNA">ABN-Amro</option>
            <option name="RABO">RABO BANK</option>
            <option name="ASN">ASN</option>
            <option name="NB">NederlandseBanken</option>      
            </select>
            <button name="register" id="register" placeholder="Register" value="Register">Registreren</button>

        </form>
        <br>
        <button name="toLogin" id="toLogin">Naar Login</button>
    </div>
</div>

<!-- . IS NAAM -->
<!-- # IS ID -->
	
    <!-- Keypad script -->

</body>
</html>
<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">


$("#registreren_form_div").hide();

$('#toRegister').on('click', function(){
    $("#registreren_form_div").show();
    $("#login_form_div").hide();
})

$('#toLogin').on('click', function(e){
    $("#registreren_form_div").hide();
    $("#login_form_div").show();
})



$('.register').on('click', function(e){
    
 

});


// Login
$('.login').on('click', function(e){

    
   
});

</script>



