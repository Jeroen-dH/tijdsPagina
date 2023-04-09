<?php
date_default_timezone_set("Europe/Amsterdam");
$date = (date("h:i:s a"));
$tijd = (date("h:i:s"));


// print($date."<br>");
// print(date("h"));
if (preg_match('/\bpm\b/', $date)) {
    if (date("h") <= 06){
        $background = "fotos/afternoon.png";
        $text = "goede middag";
    }else{ 
        $background = "fotos/evening.png";
        $text = "goede avond";
    }
}else{
    if (date("h") <= 6){
        $background = "fotos/night.png";
        $text = "goede nacht";
    }else{
        $background = "fotos/morning.png";
        $text = "goede morgen";
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <div id="tijd">
        <div id="test"><?print $text?></div>
        <?print($tijd);?>
    </div>
</body>
</html>

<style>
    body{
        background-image: url(<?print($background)?>);
        background-size: cover;
    }
    #tijd{
        font-size: 50px;
        font-weight: bold;
        width: fit-content;
        margin: 230px auto auto auto;
        text-align: center;
    }
</style>
<script>
    setInterval(function() {
    var now = new Date();
    document.getElementById("tijd").innerHTML = "<?= $text?> <br>"+now.toLocaleTimeString();
  }, 1);
</script>