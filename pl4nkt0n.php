<!DOCTYPE HTML>
<html>
    <title> Spongebob's Secret#3 </title>
    <body>
    <center>Enter level 3</center>
    I'm listening.Tell me what you want. I know you want the <i>flag</i>. I won't give it to you though. <br><br>
    <form method="POST">
            <input type="text" placeholder="Enter your need..." name="impo"><br><br>  
            <button type="submit">Sumbit</button>
        </form>
        <a href="./plankton.html"> get source here </a><br><br><br><br>
    </body>
</html>

<?php

if(isset($_POST['impo'])){
    $sanitize = $_POST['impo'];
    $a = preg_replace("/flag/", "", $sanitize);
    if($a == "flag"){
        echo "H3y th3r3 Senpai. You may go to \batcave.php";
    }
    else{
        echo "We meet again Hack3r.You really thought <i>".$a."</i> would work.....fail";
    }
}

?>