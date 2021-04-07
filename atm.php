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
	<!-- Login -->
<div id="login_form_div">
    <form action="" method="POST" name="loginForm">
        <input type="text" name="UserInfo" data-role="keypad" placeholder="BankCode + Account Nummer" data-keys="INGB ,ABNA , RABO , ASNB , NL, 0,1,2,3,4,5,6,7,8,9, , , " data-key-length="18">
        <input type="password" name="Pin" data-role="keypad" placeholder="Enter pin" data-key-length="4">
        <input type="button" name="login" id="login" placeholder="Login" value="Login">
        <button name="toRegister" id="toRegister">Registreren</button>
    </form>
</div>

<br>

    <!-- Registreren -->
<div id="registreren_form_div">
    <form action="" method="POST" name="registerForm">
        <input type="text" name="fullName" placeholder="Full name">
        <input type="text" name="bankID" placeholder="Bank ID">
        <select name="dropdownie">
        <option name="INGB">ING</option>
        <option name="ABNA">ABN-Amro</option>
        <option name="RABO">RABO BANK</option>
        <option name="ASN">ASN</option>
        <option name="NB">NederlandseBanken</option>      
        </select>
        <input type="button" name="register" placeholder="Register" value="Register">
        <button name="toLogin" id="toLogin">Login</button>
    </form>
</div>

<!-- . IS NAAM -->
<!-- # IS ID -->
	
    <!-- Keypad script -->
<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

$('.toRegister').on('click', function(e){
    $("#login_form_div").css("display", "none");
    $("#registreren_form_div").css("display", "block");
})

$('.toLogin').on('click', function(e){
    $("#registreren_form_div").css("display", "none");
    $("#login_form_div").css("display", "block");
})

// Registreren
$('.register').on('click', function(e){

    var myForm = new FormData(this);

    $.ajax({
        url:"waarnaartoe.php",
        method:"post",
        data: myForm,
        contentType:false,
        processData:false,
        success:function(){
            console.log(data);
            //function
        }
    });
})

// Login
$('.login').on('click', function(e){

    var myForm = new FormData(this);

    $.ajax({
        url:"waarnaartoe.php",
        method:"post",
        data: myForm,
        contentType:false,
        processData:false,
        success:function(){
            console.log(data);
            //function
        }
    });
})
</script>

<?php

