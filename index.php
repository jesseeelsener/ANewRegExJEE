<!DOCTYPE html>
<?php
    if (!isset($droidType)) { $droidType = ''; } 


?>
<!--
A New RegEx
https://regex101.com/r/k7TNfE/2
THE ASTROMECHS STRIKE BACK
https://regex101.com/r/8NGlHF/1
Jessie Elsener   2-27-20

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>The RegEx Awakens the Last RegEx that Rises</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <main>
            <h1 id ="header">Is....This Your Droid? <br>The Droids you're looking for!
             </h1>
              <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        
     
    <?php } ?>
        <form action="droidReg.php" method="post">
        <?php
        $normalDroid ='/^[a-zA-z0-9]{1,4}-[a-zA-z0-9]{1,4}$/';
        $rSeries='/^[R][0-9]-[a-zA-z0-9]{1,4}$/';
        ?>
               <div id="order">
            <label>Droid Type:</label>
            <input type="text" name="droidType"
                   value="<?php echo htmlspecialchars($droidType); ?>">
            <br>
            <img id ="resize" src="81Qpy+3D9vL._AC_SL1500_.jpg">
            
            <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Submit Droid Type"><br>
        </div>
       </form>
    </body>
</html>
