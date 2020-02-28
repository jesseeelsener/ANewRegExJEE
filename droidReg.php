<?php

$droidType = filter_input(INPUT_POST, "droidType");

$normalDroid ='/^[a-zA-z0-9]{1,4}-[a-zA-z0-9]{1,4}$/';
$rSeries='/^[R][0-9]-[a-zA-z0-9]{1,4}$/';


$error_message = "";
//validate names
if ($droidType == "") {
    $error_message .= "Droid type must not be blank. ";
}

if (preg_match('/^[R][0-9]-[a-zA-z0-9]{1,4}$/', $droidType)){
    $droidType = $droidType . ' is an R-Series droid';
    
}
elseif (preg_match('/^[a-zA-z0-9]{1,4}-[a-zA-z0-9]{1,4}$/', $droidType)){
    $droidType = $droidType . ' is an Normal old school droid'; 
}
else {
    $error_message .= "Droid type must be R series or Normal Droid."; 
}

if ($error_message!== "") {
    include('index.php');
    die();
}



?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Thanks for Picking your Droid</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <main>
        <h1 id ="header">Thank you for choosing a droid.<br> Beep Boop Beep.</h1>
        <div id="order">
        <label>Droid Type:</label>
        <span><?php echo $droidType ?></span><br>
        <img id ="resize2" src="30413345538_5e4819e84c_b.jpg">
        <a href="index.php">Check a new Droid Type</a>
        </div>
         </main>
 <div id="footer">
      &copy; 2020, Jess Elsener
      <br>
      All trademarks and registered trademarks appearing on 
      this site are the property of The Sith.
    </div>
</body>
</html>

