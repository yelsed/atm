<?php
if(isset($_POST['stuurOp'])){
    $qwerty = $_POST['stuurOp']; 
    $input = $_POST['input'];
    neemJeMoney($qwerty);
}


function neemJeMoney($geld){
    include 'connect.php';
    include 'begin.php';
    $nuId = $_SESSION['id'];
    $stmt = $db->prepare("UPDATE userdata SET bankBalance = $geld WHERE id=$nuId");
    $stmt->execute();
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>WaarDaarNaar</title>
</head>
<body>
    
<input type="text" id="hoeveelheid" name="hoeveelheid" readonly>

<div id="DIVgif"></div>

<a href="destroy.php">
  <button id="quit"  class="controlButton clickable" data-state="quit">Kwit :)</button>
</a>

</body>
</html>

<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>


 var geld = "<?php echo $input; ?>"
 var newGif = document.createElement('img') ;
			document.getElementById('DIVgif').appendChild(newGif);
            newGif.id = "test";
            $('#' + newGif.id).attr('style','height:400px;width:400px;') ;
            
    var tijd = 0;

    if(geld == 0){
        tijd += 4000
        newGif.src = "media/simpsons.gif";
        $('#hoeveelheid').val("Maybe you should actually withdraw sumfin Laddddd");
    }else if(geld == 420){
        tijd += 4200;
        $('#hoeveelheid').val("You've withdrawn: €" + geld + ",-");
        newGif.src = "media/ziek.gif";
    } else if(geld >= 1000){
        tijd += 10000;
        $('#hoeveelheid').val("You've withdrawn: €" + geld + ",-");
        newGif.src = "media/money-to-blow.gif";
    } else{
        tijd += 5000;
        $('#hoeveelheid').val("You've withdrawn: €" + geld + ",-");
        newGif.src = "media/normaal.gif";
    }

    setTimeout(function(){ 

        location.replace("destroy.php");

    }, tijd); 

</script>