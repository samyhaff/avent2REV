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

    $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>calendrier</title>
        <link rel="stylesheet" type="text/css" href="style_resultat.css">
    </head>

    <body>
        <div id="bloc_page">
            <?php
                switch ($_POST['choix_answer'])
                {
                    case "A":
                        $choix = 1;
                    break;
                    case "B":
                        $choix = 2;
                    break;
                    case "C":
                        $choix = 3;
                    break;
                    default:
                        echo "Sélectionnez une réponse avant d'appuyer sur \"Terminer\"";
                }
                $req = $bdd->prepare('UPDATE info SET choix_3 = :choix WHERE id = :id');
                $req->execute(array(
                    'choix' => $choix,
                    'id' => $id
                ));
            ?>
            <p>Votre choix a été enregistré. A bientôt pour la suite!</p>
        </div>
    </body>
</html>
