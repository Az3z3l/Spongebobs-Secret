<!doctype html>
<html>
    <title> Spongebob's Secret#2 </title>
    <body>
        <center>Enter level 2</center>
        <form method="POST">
            <input type="text" placeholder="Enter password..." name="imp"><br><br>  
            <button type="submit">Sumbit</button>
        </form>
        <a href="./kk.html"> get source here </a>
    </body>      
</html>

<?php
    include "flag.php";
    if (isset ($_POST['imp'])){
        if (! strcasecmp($_POST['imp'], $passworkk)) {
                echo "<h1> H3ll0 Mast3r...You may proceed to /pl4nkt0n.php </h1>";
                die();
        } 
        else {
            echo "<h1> You're not my master... Go away hackerman(or woman)</h1>";
            echo "<p> If you're bruteforcing it wont lead you anywhere... </p>";
            die();
        }
    }

?>