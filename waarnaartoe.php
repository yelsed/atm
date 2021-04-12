
<?php 


include 'connect.php';




function registro(){
include 'connect.php';
include 'begin.php';


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

if(isset($_POST['login'])){
    login();
}

if(isset($_POST['register'])){
    registro();
}

?>
