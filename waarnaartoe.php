<?php 


include 'connect.php';

function registro(){

$eigenInput = $_POST['dropdownie'];

$randomBankID = "NL".  substr(str_shuffle("0123456789"), 0, 2) . " " . $eigenInput . substr(str_shuffle("0123456789"), 0, 4) . " " . substr(str_shuffle("0123456789"), 0, 4) . " " .  substr(str_shuffle("0123456789"), 0, 2);
$randomPin = substr(str_shuffle("0123456789"), 0, 4);
  
$hashed_password = password_hash($randomPin, PASSWORD_DEFAULT);

    
$stmt = $db->prepare("INSERT INTO userdata (fullName, bankID, pinCode, bankBalance ) VALUES (:fullName, :bankID, :pinCode, :BankBalance)");

$stmt->bindValue(':fullName', $_POST['fullName']);

$stmt->bindValue(':bankID', $randomBankID);

$stmt->bindValue(':pinCode', $randomPin);


$stmt->execute();

header('Location: atm.php');
}




function login(){

$bankID = $_POST['UserInfo'];
$pincode = $_POST['Pin'];
        
$stmt = $db->prepare("SELECT * FROM userdata WHERE bankID = :bankID");
$stmt->execute(array(':bankID' => $bankID));


if($row = $stmt->fetch()){
    $id = $row['id'];
    $hashed_password = $row['pinCode'];
    $voornaam = $row['fullName'];

        if (password_verify($pincode, $hashed_password)){
            $_SESSION['id'] = $id;
            $_SESSION['bankID'] = $bankID;

            header("Location: atm.php");
        }
        else {
            echo "You have entered an invalid Pincode";
        }
}
else {
    echo "You have entered an invalid ID";
}



header('Location: atm.php');
    
}
?>
