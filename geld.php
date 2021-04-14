<?php
if(isset($_POST['stuurOp'])){
    include 'connect.php';
    $variable = $_POST['saldo']; 
    $qwerty = $_POST['stuurOp']; 
    $input = $_POST['input'];
    $money10 = $_POST['money10'];
    $money20= $_POST['money20'];
    $money50 = $_POST['money50'];
    $money100 = $_POST['money100'];
    neemJeMoney($qwerty);
    
    $stmt = $db->prepare("SELECT * FROM moneybills");
    $stmt->execute();

    if($row = $stmt->fetch()){
        $database10 =  $row['a10'];
        $database20 =  $row['a20'];
        $database50 =  $row['a50'];
        $database100 = $row['a100'];
        
    }
    $op= "test";
    //10
    if($money10 > 0 && $money10 > $database10 ){
        $new10 = $database10;
        $op = 10;
    }else{
        $new10 = $database10 - $money10;
    }
    // 20
    if($money20 > 0 && $money20 > $database20){
        $new20 = $database20;
        $op = 20;
    }else{
        $new20 = $database20 - $money20; 
    }
    //50
    if($money50 > 0 && $money50 > $database50){
        $new50 = $database50;
        $op = 50;
    }else{
        $new50 = $database50 - $money50; 
    }
    //100
    if($money100 > 0 && $money100 > $database100){
        $new100 = $database100;
        $op = 100;
    }else{
        $new100 = $database100 - $money100; 
    }
    updateJeShit($new10, $new20, $new50, $new100);

}
function updateJeShit($a10, $a20, $a50, $a100){
    include 'connect.php';

    $stmt = $db->prepare("UPDATE moneybills SET a10 = $a10, a20 = $a20, a50 = $a50, a100 = $a100");
    $stmt->execute();  
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

 var op = "<?php echo $op?>";
 var geld = "<?php echo $input; ?>";
 var hoeveelmagik = "<?php echo $variable ?>";
 var newGif = document.createElement('img') ;
			document.getElementById('DIVgif').appendChild(newGif);
            newGif.id = "test";
            $('#' + newGif.id).attr('style','height:400px;width:400px;') ;
            
    var tijd = 0;
if(hoeveelmagik < geld){
    $('#hoeveelheid').val("Your Pocket seems a lil empty");
    tijd += 5000
    newGif.src = "media/no-money.gif";
}else{
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
    if(op != "test"){
        console.log(op);

        if(op == 10){
            newGif.src = "media/pog.gif";
            $('#hoeveelheid').val("Noooooooo, we don't have any 10zos left");
            console.log(op);
        }else if(op == 20){
            newGif.src = "media/pog.gif";
            $('#hoeveelheid').val("Hello , no more twenties for you ");
        }else if(op == 50){
            newGif.src = "media/pog.gif";
            $('#hoeveelheid').val("No more fifties son");
        }else if(op == 100){
            newGif.src = "media/pog.gif";
            $('#hoeveelheid').val("No more hundossssssssss");
        }
    }
}
    setTimeout(function(){ 

        location.replace("destroy.php");

    }, tijd); 

</script>