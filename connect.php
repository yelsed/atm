<?php

try{
	$db = new PDO('mysql:host=localhost;dbname=atm;', 'root', '');

}
catch(Exception $e){
		
	echo $e->getMessage();
	echo "An error has occured";

}


?>