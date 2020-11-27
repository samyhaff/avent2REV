<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>calendrier</title>
        <link rel="stylesheet" type="text/css" href="style_resultat.css">
    </head>

    <body>
        <div id="bloc_page">
            <h1>Resultat QUIZ</h1>
            <?php
                $reponse1 = $_POST['question-1-answers'];
                $reponse2 = $_POST['question-2-answers'];
                $reponse3 = $_POST['question-3-answers'];
                $total = 0;
                if ($reponse1 == "B") {
                    $total++;
                }
                if ($reponse2 == "A") {
                    $total++;
                }
                if ($reponse3 == "A") {
                    $total++;
                }
                echo "<p>Vous avez " . "<b>" . $total. "</b>" . " réponses correctes. A demain pour la correction detaillée!</p>";
            ?>
        </div>
    </body>
</html>
