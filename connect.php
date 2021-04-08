<<<<<<< HEAD
<?php

try{
	$db = new PDO('mysql:host=localhost;dbname=atm;', 'root', '');

}
catch(Exception $e){
		
	echo $e->getMessage();
	echo "An error has occured";

}


=======
<?php

try{
	$db = new PDO('mysql:host=localhost;dbname=atm;', 'root', '');

}
catch(Exception $e){
		
	echo $e->getMessage();
	echo "An error has occured";

}


>>>>>>> eaabfb9745d69126d8bd46b457bf0b14c91befdb
?>