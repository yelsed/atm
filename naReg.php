<?php
include "begin.php";
include "waarnaartoe.php";


if(isset($_SESSION['id'])){
echo "Dit is uw Account code: " . $_SESSION["randBank"] . "<br>" . "Dit is uw pincode: " . $_SESSION['randPin'] . "<br> Zorg ervoor dat u het niet vergeet, deze informatie is niet makkelijk terug te vinden in verband met veiligheids overwegingen.";

session_destroy();
}
?>