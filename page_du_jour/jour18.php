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

    $req = $bdd->prepare('SELECT choix_1 FROM info WHERE id = :id');
    $req->execute(array('id' => $_SESSION['id']));
    $recherche = $req->fetch();
    $choix = $recherche[0];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./style14.css" type="text/css"/>
        <title>calendrier</title>
    </head>

    <body>
        <div id="bloc_page">
            <h1>Histoire interactive</h1>
            <?php
                if ($choix == 1)
                {
            ?>
            <p>
Assis sur un des bancs de l’aéroport, Alexis voit ses plans s’envoler comme les avions à travers la vitre. Il n’arrivera pas à temps pour son rendez-vous, pas à temps pour Noël. Incapable de tenir un seul de ses engagements, le cadre se sent démuni. Les minutes défilent et il ne trouve pas de solution. Énervé, dépourvu de la moindre idée, l’homme laisse sa colère éclater en se levant brusquement. La majorité des gens, trop pressés, ne le remarquent même pas. Seul un enfant le regarde fixement, l’air craintif. Devant son regard apeuré, Alexis se demande : depuis quand se laisse-t-il tant aller ? Il se prend à repenser à son garçon qui l’attend chez lui et qui attend tant de lui. </br>
Alexis refuse de prendre le risque de voir son travail et son avenir dévalorisé. Il veut pouvoir rendre fier son fils, le couvrir de cadeaux, être le papa généreux que tant d’enfants rêvent d’avoir. C’est pourquoi il s’active et décide d’appeler ses collaborateurs un par un avant de chercher dans tout l’aéroport une personne capable de répondre à son attente : </br>
« Quel est le prochain vol pour Dubaï ? » </br>
Enfin dans l’avion qui l’amènera à sa destination, installé moins confortablement que dans le premier, dernière minute oblige, M. Roselier se permet enfin de se détendre. Il n’arrivera pas à temps pour Noël, c’est maintenant sûr, mais il se rattrapera comme il s’est toujours rattrapé. Le plus important est le rendez-vous qu’il a déjà réussi par miracle à déplacer un jour plus tard. Il pense ainsi avoir fait la meilleure décision et se rassure. </br>
Son repos est pourtant de courte durée. Une femme vient d’arriver, le ventre plus rond qu’un ballon et s’installe à côté d’Alexis. Cheveux en chignon, le teint rouge, elle paraît très fatiguée. Elle sourit pourtant, et alors que l’avion décolle, elle commence à parler à son voisin. Il essaye de lui répondre de manière laconique, espérant ainsi mettre rapidement fin à la discussion afin de pouvoir se reposer un peu, mais elle ne semble pas vouloir s’arrêter, et ne même plus attendre de réponses. </br>
Elle lui raconte sa vie, et surtout, son envie de donner la vie. Depuis longtemps, elle gardait en elle ce souhait de devenir mère. Tour à tour, elle voyait ses amies donner naissance. Puis, elle écoutait leurs histoires, leurs anecdotes, et voyait leurs enfants grandir, sans pouvoir elle-même donner naissance au sien. Ce n’était pas faute d’avoir essayé, mais la nature semblait avoir décidé de les punir sans donner la moindre explication. Comme pour la punir davantage, elle éprouvait d’insupportables douleurs lors de ses menstruations. Comme si on souhaitait lui rappeler, chaque mois, de la pire manière qui soit, que jamais elle n’aurait d’enfant. Puis, un jour, le médecin fut sans appel : elle souffrait de l’endométriose, et il faudrait se faire à l’idée qu’elle n’aurait sans doute jamais d’enfants, puisque cette malade pouvait provoquer l’infertilité. </br>
Le rêve de famille s’était alors éloigné brutalement, et elle n’arrivait à cette époque même plus à imaginer un quelconque avenir, malgré le soutien de ses proches. Elle qui avait tant rêvé d’entendre un petit être l’appeler maman, de le regarder faire ses premiers pas, de lui apprendre à faire des gâteaux au chocolat et de lui dire combien elle l’aimait, se voyait vieillir et tomber dans la tristesse. </br>
Alexis réalise alors péniblement que la vie lui avait finalement été facile. Il ne s’était même pas posé davantage de question quand lui et sa femme avait songé à leur premier enfant. Neuf mois plus tard il était déjà là. </br>
Finalement, le destin avait décidé d’être plus clément avec cette femme meurtrie et un beau jour, après de nombreuses tentatives et de nombreuses consultations avec les médecins, la nouvelle tant espérée arriva : elle allait avoir une petite fille. Dans ses yeux, on pouvait lire toute la joie que lui provoquait le simple souvenir de cette annonce. Elle arrivait maintenant bientôt à terme et avait décidé, pour se porter chance, d’accoucher dans son village natal, auprès de sa famille. </br>
« Et vous ? Vous avez des enfants ? » </br>
Jusqu’ici, l’homme s’était muré dans le silence, comme hypnotisé par l’histoire qu’elle venait de lui conter. Et alors qu’il s’apprête à lui répondre, il se rend compte qu’il n’a pas grand-chose à raconter. Finalement, sa réalité était moins riche que toute l’imagination et les rêves de cette femme. Il ne se souvenait pas la première fois que son fils l’avait appelé papa, il ne l’avait pas vu faire ses premiers pas, sa femme ou la nourrice l’emmenait à l’école et il ne lui avait jamais appris à cuisiner, n’ayant jamais le temps pour le faire. </br>
Soudain, la femme semble plus agitée. L’homme à sa gauche prend un air plus inquiet également et lui échange quelques mots qu’Alexis ne parvient pas à entendre. Il se lève alors brusquement et revient accompagné de deux hôtesses qui emmènent la femme, sans doute à un endroit plus spacieux où elle peut s’allonger. Le cadre se met à penser à ce que cette agitation pouvait signifier, mais il n’a pas le temps d’arriver au bout que la voix d’une hôtesse qui résonne dans tout l’avion annonce la nouvelle sentence : un atterrissage d’urgence. La femme installée à côté de lui est en effet sur le point d’accoucher. </br>
Cette fois-ci, Alexis finit par croire que le sort s’acharne contre lui. À nouveau à terre, il doit prendre une nouvelle décision sur la suite de son trajet. </br>
<b>Que faire ? A vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire…</b>
            </p>
            <?php
                }
                else
                {
                    echo "Bonsoir!";
                    echo $_SESSION['choix_1'];
                }
            ?>
            <form action="histoire2.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Résigné, il décide de prendre cette fois-ci la voiture. Il sait cependant que la nouvelle ville dans laquelle ils ont atterri est beaucoup plus petite que la première, et qu’il aura d’autant plus de mal à en trouver un taxi. Cependant, il va pouvoir reconsidérer Noël en famille, même si le timing est serré.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Résilient et surtout têtu, il décide de quand même continuer le voyage en avion. Ce n’est pas le destin qui décidera à sa place. Cependant, même ses chances d’arriver à l’heure à la réunion sont réduites.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>Il décide finalement de faire demi-tour et d’organiser une réunion dans l’hôtel qu’il avait repéré déjà lorsqu’il était au précédent aéroport. C’est peut-être la seule solution, même si elle est très onéreuse, qu’il lui reste.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
        </div>
    </body>
</html>
