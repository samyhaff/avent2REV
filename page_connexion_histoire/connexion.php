<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <title>Connexion</title>
    </head>
    <body>
        <div id="bloc_page">
            <h1>J'accède à mon calendrier</h1>
            <form method="post" action="redirection.php">
               <p>
               <label for="nom">Votre nom de famille en <b>majuscule</b></label> : <input type="text" name="nom" id="nom" required /> 
                    <input type="submit" value="Valider" />
               </p> 
            </form>
            En cas de problème, contactez <b>rev.centralenantes@gmail.com</b>
        </div>
    </body>
</html>
