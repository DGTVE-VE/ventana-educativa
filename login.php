<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title> Log in </title>
    </head>
    <body>
        <a href="<?php print $_SESSION['loginUrl']?>"> Ingresa con Google </a>
        <br>            
        <a href=""> Ingresa con Facebook </a>
    </body>
</html>