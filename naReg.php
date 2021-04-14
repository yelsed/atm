<?php
include "begin.php";
include "waarnaartoe.php";


if(isset($_SESSION["randBank"]) && isset($_SESSION["randPin"])){
echo "this is uw Account code: " . $_SESSION["randBank"] . "<br>" . "this is uw pincode: " . $_SESSION['randPin'] . "<br> Zorg ervoor dat u het niet forget, deze informatie is niet easy terug te finden in verband met safety regulations.";

session_destroy();
}else{

echo "Something went wrong";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfterRegister</title>
</head>
<body>
<a href="destroy.php">
  <button id="quit" class="controlButton clickable" data-state="quit">Kwit :)</button>
</a>
</body>
</html>