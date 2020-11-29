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

    $date = 24;
    $positions = array(array(150, 300), array(250, 380), array(400, 528), array(380, 628), array(300, 680), array(280, 580),
        array(480, 370), array(550, 328), array(600, 220), array(550, 60), array(490, 220), array(650, 300), 
        array(740, 300), array(840, 250), array(920, 200), array(880, 150), array(780, 200), array(830, 330), 
        array(900, 430), array(1000, 480), array(1100, 400), array(1000, 350), array(800, 420), array(860, 500));

    $req = $bdd->prepare('SELECT id FROM info WHERE email = :mail');
    $req->execute(array('mail' => $_POST['email']));
    $recherche = $req->fetch();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <title> Calendrier de l'Avent</title>
    </head>

    <body>
        <?php if ($recherche)
        {
            $_SESSION['id'] = $recherche[0];
            $type_calendrier = '../page_du_jour/jour2.php';
        ?>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 808" >
                <?php 
                    for ($i = 0; $i < $date - 1; $i++) {
                        echo '<a xlink:href=../page_du_jour/jour' . ($i + 1)  . '.php>';
                        echo '<image x=' . $positions[$i][0] . ' y=' . $positions[$i][1] . ' width="100" xlink:href="images/mongolfiere_rouge.png">';
                        echo '</image>';
                        echo '</a>';
                    }
                    echo '<a xlink:href=../page_du_jour/jour' . $date  . '.php>';
                    echo '<image x=' . $positions[$date - 1][0] . ' y=' . $positions[$date - 1][1] . ' width="100" xlink:href="images/mongolfiere_jaune.png">';
                    echo '</image>';
                    echo '</a>';
                ?>
            </svg>
        <?php
        }
        else
        {
            echo '<script> alert("Veuillez saisir votre email utilisé pour l\'inscription sur la page de connexion") </script>';
        }
        ?>
    </body>
</html>
