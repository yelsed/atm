<?php 
include 'connect.php';

function registro(){
include 'connect.php';
include 'begin.php';

if(isset($_POST["fullName"]) && isset($_POST["dropdownie"])){
$eigenInput = $_POST['dropdownie'];
switch($eigenInput){
    case 'ING':
        $bankKeuze = 'INGB';
        break;
    
    case 'ABN-Amro':
        $bankKeuze = 'ABNA';
        break;

    case 'RABO BANK':
        $bankKeuze = 'RABO';
        break;

    case 'ASN':
        $bankKeuze = 'ASNB';
        break;

    case 'NederlandseBanken':
        $bankKeuze = 'NLSB';
        break;
    }



$randomBankID = "NL".  substr(str_shuffle("0123456789"), 0, 2) . $bankKeuze . substr(str_shuffle("0123456789"), 0, 4)  . substr(str_shuffle("0123456789"), 0, 4)  .  substr(str_shuffle("0123456789"), 0, 2);
$randomPin = substr(str_shuffle("0123456789"), 0, 4);
  
$hashed_password = password_hash($randomPin, PASSWORD_DEFAULT);

  $_SESSION["randBank"]= $randomBankID;
  $_SESSION["randPin"]= $randomPin;

var_dump($hashed_password);

$stmt = $db->prepare("INSERT INTO userdata(fullName, bankID, pinCode) VALUES (:fullName, :bankID, :pinCode)");

$stmt->bindValue(':fullName', $_POST['fullName']);

$stmt->bindValue(':bankID', $randomBankID);

$stmt->bindValue(':pinCode', $hashed_password);

$stmt->execute();

header("Location: naReg.php");
}else{

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failure</title>
</head>
<body>
<p>Something went wrong with the registration.</p>
<a href="destroy.php">
  <button id="quit" class="controlButton clickable" data-state="quit">Kwit :)</button>
</a>
</body>
</html>';

}
}
function login(){
include 'connect.php';
include 'begin.php';


$bankID = $_POST['UserInfo'];
$pincode = $_POST['Pin'];
        
$stmt = $db->prepare("SELECT * FROM userdata WHERE bankID = :bankID");
$stmt->execute(array(':bankID' => $bankID));


if($row = $stmt->fetch()){
    $id = $row['id'];
    $hashed_password = $row['pinCode'];
    $naam = $row['fullName'];
    $bankBalance = $row['bankBalance'];

        if (password_verify($pincode, $hashed_password)){
            $_SESSION['id'] = $id;
            $_SESSION['bankID'] = $bankID;
            $_SESSION['naam'] = $naam;
            $_SESSION['saldo'] = $bankBalance;



            header("Location: opneem.php");
        }
        else {
            echo "You have entered an invalid Pincode";
        }
}
else {
    echo "You have entered an invalid ID";
}
    
}


function opneem(){
include 'connect.php';

$stmt = $db->prepare("SELECT * FROM moneyBills");
$stmt->execute();

    if($row = $stmt->fetch()){
        $money10 =  $row['10'];
        $money20 =  $row['20'];
        $money50 =  $row['50'];
        $money100 = $row['100'];
    }
    if($money10 <= 0){
    
    }
    if($money20 <= 0){

    } 
    if($money50 <= 0){

    } 
    if($money100 <= 0){

    }  

}

if(isset($_POST['login'])){
    login();
}

if(isset($_POST['register'])){
    registro();
}

?>


