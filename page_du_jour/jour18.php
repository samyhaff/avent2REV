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
            <h1>Jour 18: Histoire interactive</h1>
            <p><b>Au programme du jour, nous vous proposons la suite de l'histoire intéractive!</b></p>
            <?php
                if ($choix == 1)
                {
            ?>
            <p>
Assis sur un des bancs de l’aéroport, Alexis voit ses plans s’envoler comme les avions à travers la vitre. Il n’arrivera pas à temps pour le réveillon, ni même pour le lendemain. Incapable de tenir un seul de ses engagements, le cadre se sent démuni. Les minutes défilent et il ne trouve pas de solution. Énervé, dépourvu de la moindre idée, l’homme laisse sa colère éclater en se levant brusquement. La majorité des gens, trop pressée, ne le remarque même pas. Seul un enfant le regarde fixement, l’air craintif. Devant son regard apeuré, Alexis se demande : depuis quand se laisse-t-il tant aller ? Il se prend à repenser à son garçon et qui l’attend chez lui et qui attend tant de lui. <br>
Alexis refuse de prendre le risque de voir son travail et son avenir dévalorisé. Il veut pouvoir rendre fier son fils, le couvrir de cadeaux, être le papa généreux que tant d’enfants rêvent d’avoir. C’est pourquoi il s’active et décide d’appeler ses collaborateurs un par un avant de chercher dans tout l’aéroport une personne capable de répondre à son attente : « Quel est le prochain vol pour Dubaï ? » <br>
Enfin dans l’avion qui l’amènera à sa destination, installé moins confortablement que dans le premier, dernière minute oblige, M. Roselier se permet enfin de se détendre. Il n’arrivera pas à temps pour Noël, c’est maintenant sûr, mais il se rattrapera comme il s’est toujours rattrapé. Le plus important est le rendez-vous qu’il a déjà réussi par miracle à déplacer un jour plus tard. Il pense ainsi avoir pris la meilleure décision et se rassure. <br>
Son repos est pourtant de courte durée. Une femme vient d’arriver, le ventre plus rond qu’un ballon et s’installe à côté d’Alexis. Cheveux en chignon, le teint rouge, elle paraît très fatiguée. Elle sourit pourtant, et alors que l’avion décolle, elle commence à parler à son voisin. Il essaye de lui répondre de manière laconique, espérant ainsi mettre rapidement fin à la discussion afin de pouvoir se reposer un peu, mais elle ne semble pas vouloir s’arrêter, elle ne semble même plus d’ailleurs attendre de réponses. <br>
Elle lui raconte sa vie, et surtout, son envie de donner la vie. Depuis longtemps, elle gardait en elle ce souhait de devenir mère. Tour à tour, elle voyait ses amies donner naissance. Puis elle écoutait leurs histoires, leurs anecdotes, et voyait leurs enfants grandir, sans pouvoir elle-même donner naissance. Ce n’était pas faute d’avoir essayé, mais la nature semblait avoir décidé de la punir sans donner la moindre explication. Comme pour la punir davantage, elle éprouvait d’insupportables douleurs lors de ses menstruations. Comme si on souhaitait lui rappeler, chaque mois, de la pire manière qui soit, que jamais elle n’aurait d’enfant. Puis, un jour, le diagnostic fut sans appel : elle souffrait d’endométriose, et il faudrait se faire à l’idée qu’elle n’aurait sans doute jamais d’enfants, puisque cette malade pouvait provoquer l’infertilité. <br>
Le rêve de famille s’était alors éloigné brutalement, et elle n’arrivait à cette époque même plus à imaginer un quelconque avenir, malgré le soutien de ses proches. Elle qui avait tant rêvé d’entendre un petit être l’appeler maman, de le regarder faire ses premiers pas, de lui apprendre à faire des gâteaux au chocolat et de lui dire combien elle l’aimait, elle se voyait vieillir et sombrer dans la tristesse. <br>
Alexis réalise alors péniblement que la vie lui avait finalement été facile. Il ne s’était même pas posé davantage de question quand lui et sa femme avaient songé à leur premier enfant. Neuf mois plus tard il était déjà là. <br>
Finalement, le destin avait décidé d’être plus clément avec cette femme meurtrie et un beau jour, après de nombreuses tentatives et de nombreuses consultations avec les médecins, la nouvelle tant espérée arriva : elle allait avoir une petite fille. Dans ses yeux, on pouvait lire toute la joie que lui provoquait le simple souvenir de cette annonce. Elle arrivait maintenant bientôt à terme et avait décidé, pour se porter chance, d’accoucher dans son village natal, auprès de sa famille. <br>
« Et vous ? Vous avez des enfants ? »
<br>
Jusqu’ici, l’homme s’était muré dans le silence, comme hypnotisé par l’histoire qu’elle venait de lui conter. Et alors qu’il s’apprête à lui répondre, il se rend compte qu’il n’a pas grand-chose à raconter. Finalement, sa réalité était moins riche que toute l’imagination et les rêves de cette femme. Il ne se souvenait pas même de la première fois que son fils l’avait appelé papa, il ne l’avait pas vu faire ses premiers pas, sa femme ou la nourrice l’emmenait à l’école et il ne lui avait jamais appris à cuisiner, n’ayant jamais le temps pour le faire. <br>
Soudain, la femme semble plus agitée. L’homme à sa gauche prend un air plus inquiet également et lui échange quelques mots qu’Alexis ne parvient pas à entendre. Il se lève alors brusquement et revient accompagné de deux hôtesses qui emmènent la femme, sans doute à un endroit plus spacieux où elle peut s’allonger. Le cadre se met à penser à ce que cette agitation peut bien signifier, mais il n’a pas le temps d’arriver au bout de sa réflexion que la voix d’une hôtesse qui résonne dans tout l’avion annonce la nouvelle sentence : un atterrissage d’urgence. La femme installée à côté de lui est en effet sur le point d’accoucher. <br>
Alexie commence à croire que le sort s’acharne réellement contre lui. À nouveau à terre, il doit prendre une nouvelle décision sur la suite de son trajet. <br>
<br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
            </p>
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
            <?php
                }
                elseif ($choix == 2)
                {
            ?>
<p>
Dans le hall de l’aéroport, au milieu d’une foule qui parle, crie, marche et bouscule, l’assurance du chef de projet s’est complètement éclipsée pour dévoiler l’homme stressé et désemparé qu’est Alexis Roselier. Heureusement, sa valise cabine au bout du bras, il se faufile facilement entre les voyageurs venus de toute part et à peine est-il déjà dehors que le taxi qu’il avait réservé s’arrête à sa hauteur. Sa décision, il ne l’a pas prise facilement, mais il joue le tout pour le tout. En moins de temps qu’il ne faut pour en dire, il est installé sur la banquette arrière de la voiture qui file tout droit pour Dubaï. <br>
Il le sait, un long périple l’attend encore. Mais c’était sans compter sur le chauffeur, visiblement curieux et bavard, qui ne lui laisse aucune minute de répit. Hareb Khan est un enfant du pays fier de l’être, un citoyen exemplaire, un chauffeur modèle mais c’est un mari malheureux et rongé par les remords. <br>
« Vous savez, la vie est étrange parfois. Un matin je la trouve injuste, et puis un soir je la trouve raisonnable. Toute ma vie j’ai fait tout ce qu’on me disait de faire. Et je l’ai bien fait vous savez ! J’ai été promu moi, oui oui ça j’en suis fier. Je savais à peine conduire quand on m’a embauché et maintenant je connais tout le pays par cœur. Alors mon chef m’a félicité, il m’a dit que j’apportais beaucoup à la compagnie. Ca m’a encore plus motivé. Ah ça, j’en ai parcouru des kilomètres. Et ces nuits que j’ai passé à dormir dans la voiture pour être le premier aux aurores à parcourir les routes pour conduire mes clients ! Mais vous savez jeune homme, on n’a qu’une vie. Ca je l’avais jamais réalisé avant. Enfin bien sur que je le savais ! Mais je pensais que j’arriverai à tout faire en même temps : m’occuper de ma femme, faire mon travail et être heureux. Au bout du compte, j’ai fait mon travail mais j’étais pas près de ma femme alors maintenant, je ne suis pas même heureux. Je me disais que quand j’aurai gagné plein d’argent, je pourrai profiter du reste de ma vie auprès de ma belle sans me soucier de rien. Mais la vie, elle attend pas que tu fasses ton emploi du temps, oh ça non ! La vie elle s’abat sur toi si tu n’as pas fait le bon choix. Elle est sans pitié la vie. Maintenant, ma femme est gravement malade, et moi je suis juste un pauvre chauffeur de taxi qui n’a pas été assez là pour elle. Mais vous savez, je l’aime ma femme. J’étais pas suffisamment là, mais je l’aime et elle le sait. D’ailleurs, vous êtes mon dernier client. Vous entendez ça ? Moi, Hareb Khan, demain je ne serai plus sur les routes. Ca me rend un peu triste, mais je sais que je fais le bon choix. On a plein de souvenirs avec ma femme, mais on veut en construire encore. Au fond, j’ai toujours conduit mais parce que je savais qu’au bout du chemin, c’était elle qui était là. C’est ma raison de vivre vous voyez. Alors demain, on sera à nouveau ensemble et on se quittera plus. On ira peut être se promener le long de la mer, je sais qu’elle aime beaucoup ça. Et puis j’ai prévu de l’emmener dans son restaurant préféré ! Ca fait longtemps qu’on y est pas allé, mais c’est parce que je rentrais trop tard le soir. Et vous alors, où est-ce que vous l’emmènerez votre belle quand vous rentrerez ? » <br>
D’abord discret et incertain, M.Roselier se prit doucement au jeu. Tout en fixant le paysage qui défilait à toute allure, il raconta ses projets et ses angoisses, ses amours et ses absences, ses rêves et ses démons. Jusqu’à ce que le téléphone de celui qui l’appelait maintenant « Alex » l’interrompit et que le chauffeur devint blême. Sa femme venait d’être prise en charge aux urgences et il était la première personne qui figurait sur la liste des personnes à appeler. Sa femme allait déjà mieux, mais pour l’heure, dans un état instable, elle demandait son mari. Un mari qui était sur les routes, à une heure d’elle, mais à une heure de l’aéroport le plus proche et dans le sens opposé à sa femme… <br>
Touché par la situation, Alexis Roselier est à nouveau plongé dans ses pensées, réfléchissant à ce qu’il pourrait bien proposer au chauffeur : <br>
Soit il demande au chauffeur de le conduire à l’aéroport le plus proche, à une heure de leur position actuelle et le chauffeur mettrait alors plus 3h à rejoindre sa femme. De plus, il est plus proche du but, donc malgré les intempéries, il peut espérer arriver à temps pour la réunion. S’il arrive en retard toutefois, il perd son contrat stable et peut être Noël… <br>
Soit il dit au chauffeur de le conduire jusqu’à la ville où sa femme se trouve, et de là il essayera de trouver un taxi. Le chauffeur verra alors sa femme au plus tôt, mais il n’est pas sûr de trouver un taxi assez tôt dans cette petite ville pour sa réunion, et donc pour Noël…S’il trouve un taxi cependant, ça serait la meilleure option pour le chauffeur.<br>
Soit il demande au chauffeur de l’amener à 2h de leur position actuelle, dans la grande ville la plus proche, où il sera sûr d’avoir un taxi, mais le chauffeur mettrait plus de 5h à rejoindre sa femme, en espérant qu’il n’arrive pas trop tard. Au moins, il serait sûr d’assister à la réunion et à Noël…<br>
<br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            </p>
            <form action="histoire2.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>aller jusqu’au prochain aéroport, en ayant une chance sur deux d’arriver à temps pour la réunion et Noël, mais le chauffeur mettrait plus de 3h à rejoindre sa femme, en espérant qu’il n’arrive pas trop tard… De plus, si M.Roselier arrive en retard, il peut dire au revoir à son contrat et son poste stable, et peut être même à Noël.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>aller jusqu’à la ville où se trouve la femme, en ayant une chance sur trois de trouver un taxi et donc d’arriver à temps à la réunion et à Noël. Et en risquant donc de perdre son contrat et son poste stable et Noël dans le cas contraire.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>aller jusqu’à la grande ville la plus proche en ayant toutes les chances de trouver un taxi et donc d’arriver à temps pour la réunion et pour Noël mais le chauffeur mettrait plus de 5h à rejoindre sa femme, en espérant qu’il n’arrive pas trop tard…</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                elseif ($choix == 3) 
                {
            ?>
<p>
Enfin sorti de l’aéroport, il marche sans s’arrêter. Presque comme s’il était décidé, résigné à y aller à pieds. Mais Alexis Roselier sait que même avec toute la bonne volonté du monde, il n’y parviendra pas. Pas à temps pour le travail, pas à temps pour la famille, aucune solution ne semble convenir mieux qu’une autre. Il doit se rendre à l’évidence : il va devoir faire un choix. En cherchant dans son téléphone portable le nom d’un de ses collègues pour prévenir son équipe, il tombe cependant sur un autre contact, un qatari qu’il avait connu au début de sa carrière, et avec qui il avait dû négocier certains contrats. Et tout à coup, tout semble redevenir possible. Il lui suffit de réorganiser un rendez-vous, au Qatar. Cette option réduirait de moitié le trajet, et il serait capable de revenir voir ses enfants à temps. Il l’appela aussitôt. <br>
Louer une salle, oui. Payer les frais d’annulation de Dubaï, oui. Frais de restauration, oui. Frais de… Évidemment, réorganiser une réunion aussi importante en aussi peu de temps n’allait pas se faire sans quelque sacrifice. Alexis Roselier s’en doutait, et pourtant il avait beaucoup de mal à imaginer cette somme, qu’il s’était pourtant promis dédiée à sa famille, s’envoler. Mais il le fallait, ils comprendraient non ? C’était seulement pour pouvoir gagner encore plus par la suite et leur faire encore plus de cadeaux, ce n’était pas permanent, et ils lui en seraient reconnaissants, finalement. <br>
Avec cette décision, Alexis Roselier sait surtout qu’il a gagné un peu de temps. Il choisit alors de s’installer dans un hôtel près de l’aéroport pour pouvoir continuer les préparations de la nouvelle réunion rapidement et calmement. Pressé, il ne prend pas le temps de comparer les hôtels, et se dirige simplement vers l’un des moins chers, pensant déjà à tout l’argent qu’il va devoir réinvestir pour réorganiser la réunion. Tant pis, il va devoir supporter peut-être un peu l’inconfort et la saleté, mais après tout il ne restera pas longtemps. <br>
Le nom de l’hôtel peint en grandes lettres noires semble avoir été inscrit il y a très longtemps, tant les lettres s’effacent. Le bâtiment en lui-même ne donne pas particulièrement envie non plus, de couleur sable, le même sable qui le prend au nez depuis qu’il est arrivé. L’homme d’affaire entre sans conviction. Il est cependant surpris qu’au moment même où il passe la porte, une jeune femme l’accueille chaleureusement en le débarrassant de ses affaires. Elle le guide vers l’accueil, où un vieil homme attend. Aucun ordinateur pour l’enregistrer, l’opération prend plusieurs minutes. Pressé, toujours pressé, Alexis Roselier commence à s’impatienter. Déjà qu’il ne prend aucun plaisir à être ici, voilà maintenant qu’on le retarde. Il pense d’ailleurs que ce genre d’établissements gagnerait à être remplacé et modernisé. <br>

« Votre chambre monsieur, la n°42. Vous êtes bien évidemment invité à notre dîner sur la terrasse. » <br>

Le vieil homme, avec un sourire qui ne laisse plus apercevoir ses yeux, lui indique la direction de sa chambre ainsi que de l’extérieur. Alexis Roselier est agréablement surpris d’apprendre que cet hôtel a également un service de restauration, mais préfère rester vigilant. <br>

« Très bien, combien coûterait un repas ?  <br>
-Du moment que vous en êtes satisfait, lui répondit le vieil homme simplement, il est payé. » <br>

D’autant plus étonné, le cadre s’en va sans rien dire dans sa chambre. Si la décoration n’est pas forcément à son goût, il ne peut nier que le lit est confortable, la salle de bain parfaitement propre. Il n’a pas le souvenir d’avoir toujours eu cet avis dans certains hôtels de Paris, qui se réclamaient pourtant à plus haut standing. Quelques spécialités locales sont même disposées sur la table près de l’entrée. Il interrompt le fil de ses pensées pour se remettre au travail : même s’il a gagné du temps, il s’agit de ne pas en reperdre autrement. <br>
Après quelques heures de travail acharné, Alexis décide de prendre une pause. Les effluves de la cuisine arrivent à son nez. Puisque le repas est gratuit, il ne va certainement pas s’en priver. En sortant, il croise plusieurs employés. Chacun lui demande si tout est à sa convenance, tellement qu’Alexis se sent presque gêné de n’avoir rien à redire. Finalement, il arrive à la petite terrasse où seules deux tables sont déjà occupées. Immédiatement, il est sollicité par une serveuse, qui s’avère être la même jeune femme qui l’avait débarrassé à l’accueil. <br>
Le jeune homme mange un excellent repas, en plus d’être très copieux. Il commence à s’en vouloir pour ses pensées antérieures et à se dire que, même si tout n’est pas moderne, il se sent mieux ici que dans la plupart des endroits. Le service y est excellent et l’ambiance y est agréable. Tout cela l’a même apaisé et a amélioré son humeur. Enjoué, il se décide à aller féliciter le cuisinier. <br>
Avec ce dernier, il discute alors de l’histoire de ce petit hôtel. C’est une entreprise familiale très ancienne, et le cuisinier s’avère être le fils du gérant, homme qu’il a croisé à l’accueil. Gaiement, il lui raconte la joie que leur procure le fait de rencontrer des étrangers, de leur faire plaisir, même pour un temps. Il raconte également comment cet hôtel a toujours soudé la famille qui a vu s’y dérouler nombre de mariages et fêtes. <br>

« Cet hôtel, c’est comme un immense tableau vous voyez ? Où toutes les générations se succèdent, où chacun fait des découvertes, chacun apprend l’entraide et le partage, où chacun peint un petit morceau, en fait. C’est pas le grand luxe, mais c’est pas ce qu’on recherche, nous on aime le vivant, on aime quand tout le monde est content. » <br>

Tout à coup, il prend un air triste. Le tableau allait finalement s’achever, le dernier coup de pinceau allait être donné. Anéanti par la concurrence qui rachetait tous les petits hôtels pour en construire de nouveaux, plus modernes, plus aseptisé, attirant une clientèle plus aisée, celui-ci allait bientôt fermer. Ils n’avaient plus les moyens de lutter et allait devoir abandonner dans quelques mois. <br>
Au terme de cette discussion, Alexis retourne à sa chambre. Il se trouve étrangement troublé par cette famille et cet hôtel, mais il ne peut oublier la situation critique dans laquelle il se trouve. <br>
<br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            <form action="histoire2.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Alexis tient à aider cet hôtel. Il propose donc à ses collaborateurs d’effectuer la réunion dans ce même hôtel. Ainsi, l’hôtel aurait une forte affluence et même des recommandations, ce qui lui permettrait de subsister un peu plus dans le temps, quelques jours de plus pour trouver un plan de sauvetage. De cette manière, il devrait payer le trajet que ses collègues devraient exécuter, mais comme il ne se rendrait pas à Doha, capitale du Qatar, il ne débourserait finalement pas plus. Cependant, il n’a qu’une chance sur deux que tout le monde arrive à temps.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Alexis a trop de soucis pour s’occuper de ceux des autres dans l’immédiat. Souhaitant quand même les aider, il prend les coordonnées de l’établissement et insiste sur le fait qu’il en parlera autour de lui et à de potentiels investisseurs, voire même à sa propre société, mais ne peut rien promettre. De cette manière, il arrivera toujours à organiser la réunion et à être à l’heure à Noël.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>Au cours de la discussion, Alexis a appris que le fils du gérant, cuisinier, doit partir dans une ville se rapprochant du lieu d’escale pour quelques jours. De là il pourrait prendre un taxi et ainsi donner tout l’argent qu’il a économisé à se déplacer, à l’hôtel. Cela ne fait pas grand chose, mais il montrera au moins à l’hôtel qu’il veut vraiment l’aider. Cependant, il n’a que deux chances sur trois d’arriver à la réunion à temps.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                else {
                    echo "Veuillez faire un choix au jour 14. Si vous en avez déjà fait un, il est possible qu'il n'ait pas été pris en compte à cause d'un bug, veuillez svp le sélectionner à noveau en retournant au jour 14 depuis la page d'accueuil";
                }
            ?>    
        </div>
    </body>
</html>
