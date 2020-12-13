<?php
    session_start();

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=utilisateur;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->prepare('SELECT id FROM info WHERE nom = :nom');
    $req->execute(array('nom' => $_POST['nom']));
    $recherche = $req->fetch();

    if ($recherche)
    {
        $_SESSION['id'] = $recherche[0];
    }
    else 
    {
        echo '<script> alert("Veuillez saisir votre email utilisé pour l\'inscription sur la page de connexion") </script>';
    }
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_redirection.css" type="text/css"/>
        <title> Calendrier de l'Avent</title>
    </head>
    <body>
        <h1>Histoires interactives</h1>
        <ol>
<?php 
    $jours = array(14, 18, 21, 24); 
    for ($i = 0; $i <= 3; $i++)
    {
        if (date("d") >= $jours[$i])
        {
            echo "<li><a href=\"../page_du_jour/jour" . $jours[$i] . ".php\">Partie " . ($i + 1) . "</a></li>";
        }
        else 
        {
            echo "<li>Partie " . ($i + 1) . "</li>";
        }
    }
?>
        </ol>
    </body>
</html>
