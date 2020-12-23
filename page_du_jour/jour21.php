<?php
    session_start();

    try
    {
        // $bdd = new PDO('mysql:host=localhost;dbname=utilisateur;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd = new PDO('mysql:host=aventri430.mysql.db;dbname=aventri430;charset=utf8', 'aventri430', 'Haffouds2406', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->prepare('SELECT choix_1, choix_2 FROM info WHERE id = :id');
    $req->execute(array('id' => $_SESSION['id']));
    $recherche = $req->fetch();
    $choix1 = $recherche[0];
    $choix2 = $recherche[1];
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
            <h1>Jour 21: Histoire interactive</h1>
            <p><b>Au programme du jour, nous vous proposons la suite de l'histoire intéractive!</b></p>
            <?php
                if ($choix1 == 1 and $choix2 == 1)
                {
            ?>
            <p>
Alexis Roselier s’y attendait : la ville dans laquelle il se trouve maintenant est loin d’être grande. Ne se défaisant pas de son calme et fidèle à sa décision, il suit consciencieusement les panneaux de direction qui le mènent tout droit à une station de taxi. Il regarde sa montre: 22h45. Pas étonnant qu’il y ait si peu de monde dans les rues. Pourtant, la station de taxi regorge encore de touristes qui ne demandent qu’à regagner leurs pénates et pas une seconde ne s’écoule entre l’arrêt d’un taxi et la montée d’un client. En effet, si la ville n’est pas grande, les activités y sont nombreuses, bien plus nombreuses que le nombre de taxis qui passent pour réguler le flux de touristes. M. Roselier, trop hésitant face à des touristes qui ont un peu trop arrosé leur soirée, peine quant à lui à s’imposer et regarde, désespéré, les taxis un à un partir sans lui. <br>
« Pauvres gens ! » entend-il soudainement derrière son dos. Il se retourne : <br>
« C’est à moi que vous parlez ? ». <br>
L’homme qui se tient face à lui est petit et robuste. Les sourcils broussailleux, les joues creuses, et l’air quelque peu renfrogné, il répond en pointant du doigt la valse de taxi qu’il ne détache pas du regard :  <br>
« Non non, je parlais de ceux là-bas. A courir après le temps ils ne réalisent pas qu’ils ne le rattraperont jamais. Ils s’affolent, comme des marionnettes en oubliant qu’ils ne sont que des pantins de bois. <br>
-Je ne suis pas sûr de saisir où vous voulez en venir. <br>
-Je ne dis que ce que je vois. Que faîtes-vous comme métier mon bon monsieur ? Vous l’aimez votre métier ? <br>
-Je travaille à l’Acompta en tant que chef de projet. C’est la plus influente entreprise immobilière au monde alors comment pourrais-je ne pas aimer mon travail ? » <br>
Monsieur Roselier avait gagné de l’assurance, comme toujours lorsqu’il parlait de son travail. Mais son assurance n’avait pas l’air de convaincre l’homme qui le dévisageait tout d’un coup en fronçant les sourcils : <br>
« Il y a des milliards de raisons de ne pas aimer son travail, mais il n’y a qu’une raison de l’aimer : il faut qu’il soit taillé pour vous, qu’il mette en valeurs les compétences que vous voulez mettre en avant, et pas que la société veut que vous mettiez en avant. Si votre entreprise est la plus influente au monde, alors c’est que la société a décidé que c’était ces compétences qu’elle voulait mettre en avant. Mais vous, vous êtes sûr que ce sont ces compétences qui vous sont propres ? » <br>
Alexis Roselier se trouvait bien dans l’embarras à ce moment précis. Jamais personne n’avait remis en question son travail, pas même lui. Bien sûr qu’il était content de son travail, du moins il ne s’en était jamais plaint. Évidemment qu’il avait les compétences pour le travail, comment l’aurait-il eu sinon ? Mais se demander si mettre en avant ces compétences particulièrement était réellement ce qu’il souhaitait, il ne l’avait jamais fait. Pourquoi faire après tout ? Tant qu’il avait des compétences pour gagner de l’argent et ainsi nourrir sa famille, il estimait que ces compétences étaient suffisantes. L’homme ne lui laissa pourtant pas le temps de répondre et commença un monologue que nul ne pouvait arrêter : il était lui-même chauffeur de taxi, mais pas un de ces coursiers comme il aimait à appeler les autres chauffeurs, ces chauffeurs qui se souciaient autant de leurs clients qu’un facteur se soucie de son colis dans le coffre de sa voiture. Il se revendiquait passionné, sympathique et courtois. Mais plus que tout, il se disait heureux : <br>
« Vous savez, il y a trois moments clés pour un chauffeur de taxi : le début du voyage où il doit trouver un client, puis le voyage lui-même qui doit bien se passer, et enfin la fin du voyage où il gagne son dû. Si un seul moment manque, le chauffeur n’a pas réussi son travail. Eux là-bas, ils ne voient pas le voyage, seulement l’arrivée. Mais lorsqu’ils sont arrivés, ils ne sont pas plus heureux, parce qu’ils pensent déjà au prochain départ. Pourtant, s’ils profitent du voyage, alors ils ont gagné quelque chose avant même d’être arrivés, et alors ils sont heureux avant de penser au prochain départ. Le voyage, jeune homme, c’est ça qui reste gravé dans les mémoires. Vous ne vous souvenez pas de votre naissance, et vous ne témoignerez pas de votre mort, mais les autres pourront penser à votre mort sereinement, parce que c’est votre vie qui aura compté. Ce que vous faites dans la vie, ce que vous découvrez pendant le voyage, c’est ça qui vous rend heureux. Moi j’en découvre tous les jours, je parle, je parle, et rien ne peut m’arrêter. Mais j’aime aussi écouter, poser des questions, me montrer curieux. Il y a une semaine j’ai discuté avec un jeune français qui m’a appris les traditions de son pays, il y a trois jours j’ai rencontré une bonne vieille dame qui m’a invité à passer chez elle, près de la mer, si je passais dans le coin et pas plus tard qu’hier un jeune aveugle m’a appris les plus belles leçons de vie qui soit. J’ai la chance inouïe de me coucher chaque soir avec de nouveaux rêves, et de me lever chaque matin avec l’envie de les accomplir. Et vous monsieur, de quoi rêvez-vous alors ? » <br>
Il faut dire que la réponse était immédiate : à cette heure tardive de la nuit, il ne rêvait que d’une chose: monter dans un taxi, arriver à l’heure à cette réunion, monter ce projet, convaincre le négociateur et rentrer chez lui. Mais les taxis se faisaient de plus en plus rares et les gens de plus en plus désagréables. Au coude à coude, il avait déjà perdu la course avant même qu’un taxi ne s’arrête. L’homme qui continuait à toiser du regard les gens pressés, courant dans tous les sens, regarda tout d’un coup Alexis Roselier d’un regard beaucoup plus compréhensif :  <br>
« Vous savez, je suis chauffeur de taxi. Là c’est mon jour de repos, je ne travaille jamais ce jour-là, je venais seulement réparer mon cabriolet qui est bien mal au point depuis deux jours. Mais comme je vous l’ai dit, choisir son métier, c’est choisir ses compétences à mettre en avant. Et moi, je veux me mettre au service des gens. Vous avez besoin d’aide, je peux vous aider. Ma femme est partie en voyage pour voir ses parents, je suis tout seul chez moi, alors j’ai tout mon temps. Que diriez-vous d’un voyage dans mon cabriolet tout juste réparé ?» <br>
« Au moins je serai sûr que j’aurai bien réglé le problème pour mon prochain voyage ! » rajoute-t-il en rigolant. <br>

<br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
            </p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Accepter l’offre du chauffeur de taxi et partir avec lui. En espérant qu’il soit bon mécanicien et que son cabriolet tienne jusqu’à la fin du voyage… Car sinon, il peut dire adieu à sa réunion et à Noël.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Décliner l’offre et préférer la sécurité et l’efficacité des taxis, en espérant qu’il y ait encore suffisamment de taxis qui passeront pour qu’Alexis Roselier en saisisse un… Mais s’il en saisit un, il est assuré d’arriver à l’heure pour la réunion, et donc pour Noël.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php
                }
                elseif ($choix1 == 1 and $choix2 == 2)
                {
            ?>
<p>
Alexis s’était décidé: il prendrait à nouveau l’avion. Mais dans l’aéroport, les minutes étaient devenues des heures, et l’espoir d’Alexis s’était transformé en désespoir. Il avait dû se rendre à l’évidence: la réunion serait reportée d’une journée. Il ne sera pas là à Noël, mais il sera là le jour suivant, et tous les autres jours qui suivront s’il venait à décrocher ce contrat qui lui garantirait un poste stable. <br>
En ce 22 décembre, Alexis ne peut s’empêcher de songer déjà à ce 25 décembre, quand il reprendra l’avion avec le contrat en poche. Se refusant de montrer la moindre faiblesse, il chasse cependant rapidement cette idée sombre de sa tête et se concentre sur sa réunion décalée. Car miraculeusement, il est bien à l’heure. Au pied des bâtiments, il pousse un soupir de soulagement et se recoiffe rapidement devant les grandes vitres qui font effet miroir avant d’entrer. Soudainement, il reçoit un appel du négociateur, le personnage le plus important de la réunion qui doit avoir lieu. Son monde s’écroule une nouvelle fois : retenu par des inondations dans sa résidence secondaire, il ne va pouvoir être présent. Fatigué d’avoir à porter toute la responsabilité de ses décisions sur ses épaules, Alexis décide d’appeler différentes connaissances afin d’être guidé sur la décision à prendre. <br>
 <br>
Avant même d’avoir pu taper le moindre numéro, c’est pourtant Paul qui l’appelle. Paul Pelletier était entré dans la compagnie à la même époque qu’Alexis et ils avaient donc formé un binôme, découvrant les rouages du métier en même temps, se partageant des conseils pour progresser dans l’entreprise. Ainsi, une confiance s’était établie entre les deux jeunes hommes et M. Roselier tendait plus facilement à suivre son avis. <br>
 <br>
« Salut Alexis ! Je sais pas si tu es déjà au courant mais le négociateur de l’opération ne pourra pas venir avant quelques jours. <br>
On vient de me mettre au courant, j’étais justement occupé à énumérer les différentes options qui me venaient à l’esprit maintenant. <br>
Je vois. Tu as déjà pris une décision ? <br>
Non, du tout. Qu’est-ce que tu ferais, toi ?  <br>
À ta place j’attendrai. Tu dois te poser les bonnes questions. Est-ce qu’une opportunité comme celle-ci va se représenter prochainement ? Est-ce que tu veux vraiment prendre le risque de ne jamais bénéficier de cette promotion ? Tu te rends compte de la position confortable que tu aurais avec ? Est-ce que tu veux pouvoir être l’homme de la famille sur lequel tout le monde peut compter ? Le père aimant qui peut apporter à ses enfants tout ce dont ils ont besoin pour grandir, puis pour leurs études ? <br>
Je comprends que tu me conseilles d’attendre le négociateur malgré le fait que j’ai promis d’être à la maison pour Noël. <br>
Tu te focalises là-dessus parce que c’est proche de toi, c’est actuel, je comprends. Mais est-ce que vraiment tu veux rater ça pour un Noël ? Y’en aura plein d’autres de Noël, surtout avec cette promotion. Je suis désolé, je peux pas rester plus longtemps avec toi, j’ai encore du travail, mais réfléchis bien. Cette occasion ne se représentera pas deux fois. Courage. » <br>
Si Alexis est plutôt convaincu par cet appel et cet avis qui est le plus proche de ses valeurs, il hésite. La promesse qu’il avait faite à sa femme, les gens qu’il avait rencontrés, tout le fait maintenant douter. Que veut-il vraiment ? Pris dans un tourbillon de sentiments qui se contredisent et se mélangent, il décide d’appeler, un peu sur un coup de tête, Hervé. Hervé était un ami qu’il avait connu bien avant Paul. C’était un ami du lycée, un garçon avec lequel il avait fait les 400 coups, avec qui il avait fait la tournée des festivals, et qui lui avait aussi présenté sa future femme. Mais après le lycée, Alexis était devenu plus sérieux, du moins c’est ce qu’il pensait, et s’était peu à peu éloigné de la folie de son adolescence pour se consacrer aux études et au travail. Il n’avait donc plus eu beaucoup de nouvelles de Hervé depuis. Il ne lui avait pas parlé depuis si longtemps qu’il se demandait même si le numéro qu’il avait dans ses contacts était toujours le bon. <br>
 <br>
« Allo ? <br>
Hervé ? <br>
Oui ? Je peux savoir qui vous êtes ? <br>
C’est moi, Alexis. <br>
Alexis ? Ça fait bien longtemps que j’ai pas entendu ce nom… Comment tu vas, vieux? <br>
Ça va, enfin, je crois. » <br>
 <br>
Il lui raconte alors ses doutes, se perd dans ses questionnements. Et est étonné de remarquer que Hervé l’écoute. Alexis redoutait son ami, puisqu’il savait que c’était sa faute s’ils n’étaient plus en contact. Il est d’autant plus étonné qu’il n’a plus l’habitude d’être écouté. Tout va si vite, tout le temps. On donne des indications, des ordres, et on s’exécute. Il n’y a pas tellement à réfléchir, il y a une hiérarchie et Alexis sait ce qu’il a à faire. Si son avis est important, l’horizon des questions pour lesquelles on demande son avis est finalement très restreint ou futile. Finalement, Hervé se décide à reprendre la parole. <br>
 <br>
« Alexis, ça fait très longtemps. Je sais pas si mon avis est vraiment important vu l’homme que tu es devenu. Je peux juste te dire que le garçon que j’ai connu au lycée me manque. Et tu sais que je suis pas quelqu’un de sentimental pourtant. Mais je me dis que si je pense ça je dois pas être le seul. Comment va Sylvie ? Comment vont tes enfants ? Ne me réponds pas que ça va. Est-ce que tu as pris des nouvelles d’eux depuis que t’es parti ? Je sais que tu veux tout bien faire, tu as toujours été plus sérieux que moi, plus déterminé, et c’est tout à ton honneur. Mais peut-être que pour une fois, tu te trompes. Pourquoi est-ce que ta femme a insisté pour que tu sois présent à Noël ? Tu crois vraiment qu’elle est si inconsciente que ça, qu’elle préfère que tu ailles pas au travail ? Moi je pense qu’elle est très contente de ce qu’elle a, mais qu’elle a peur de te perdre. Ne te noie pas dans le travail, Alexis, reviens dans ta famille. Oui tu manqueras une opportunité, mais ne perds pas l’opportunité de voir tes enfants grandir. S’il est possible que cette promotion ne te soit plus proposée, il est sûr que tu ne pourras pas revivre ce Noël avec ta famille. Tu dis que tu fais tout ça pour ta famille, mais ce que veut ta famille, c’est toi. Alors fais cette réunion si tu le veux vraiment, mais n’attends pas le négociateur. En plus, ta réunion durera bien moins longtemps sans le négociateur, et tu pourrais être à Noël à temps.» <br>
 <br>
Un peu pris de court par cette longue déclaration, le cadre en perd ses mots. Il balbutie quelques remerciements à Hervé, lui promet de prendre de ses nouvelles plus souvent, et lui dit que le temps lui étant compté, il va raccrocher pour prendre une décision. Mais au moment où il s’apprête à appeler son supérieur pour lui annoncer sa décision, il se rend compte que Mickaël, un des membres de son équipe qui devait aussi venir le rejoindre à la réunion, a laissé un message sur le répondeur. <br>
« Hey Alexis ! Je viens d’entendre la nouvelle pour le négociateur, mais on est déjà presque là, et pour pas perdre le gros contrat je me disais qu’on pouvait peut-être aller à sa rencontre. Certes on n’arrivera pas à Noël à temps, mais au moins on arrivera plus tôt après les fêtes que si on décale tout. Je sais que ça te tient à cœur et moi aussi. Rappelle-moi dès que tu peux. » <br>
 <br>
<br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            </p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Suivre l’avis de Paul et attendre le négociateur sans pouvoir espérer revenir dans la famille avant quelques jours. Cependant, la promotion est tellement confortable qu’Alexis et sa famille pourront désormais vivre de manière très aisée, plus encore qu’avant, et surtout, Alexis pourra passer bien plus de temps auprès de sa famille à l’avenir.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Suivre l’avis de Mickaël et jouer avec la montre pour essayer de rejoindre le négociateur et ainsi arriver le 25 décembre. Toutefois, Alexis sacrifierait une partie de ses économies car la société n’accepterait pas de financer une telle option…</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>Suivre l’avis de Hervé et effectuer la réunion sans le négociateur, ayant alors une chance sur deux de décrocher le contrat, mais ayant toutes ses chances de passer Noël en famille. Même s’il pourrait manquer la garantie d’avoir une belle promotion avec un emploi stable qui lui aurait offert plus de temps auprès de sa famille à l’avenir, voir sa famille pour Noël est l’essentiel</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                elseif ($choix1 == 1 and $choix2 == 3) 
                {
            ?>
<p>
De sa chambre, Alexis Roselier contemple par la fenêtre le paysage pour essayer de retrouver un peu de calme. Sa décision n’a pas été facile à prendre mais il est maintenant sûr de lui: il fera la réunion dans cet hôtel. Du haut du 3ème étage du Al Hamra Palace Hotel Al-Aswaq, il peut observer les mouvements du quartier dans les moindres détails. Cet homme qui court au coin de la rue n’a pas l’air d’avoir une vie moins stressante que la mienne se dit-il. Et puis cette femme là-bas semble aussi un peu perdue. Finalement, ces hommes et ces femmes n’ont pas l’air bien heureux. Mais l’est-il lui-même ? Qu’est-ce que le bonheur après tout ? Une bien grande question qu’il n’avait jamais osé se poser avant ce périple. Mais ce voyage lui apportait des questions bien inhabituelles. Son regard sur le monde semblait changé, du moins sa perception des évènements était différente. Le bonheur après tout, c’était peut-être ces enfants dans le parc qui jouaient avec des morceaux de bois et des cailloux, avec des cris et des gestes. Ces enfants avaient probablement l’insouciance, l’innocence et la naïveté qu’il avait perdues, pensait-il. C’est si simple d’être un enfant…  <br>
Soudain, on toque discrètement à la porte :  <br>
« Bonjour Monsieur, je me suis permise de vous apporter un petit rafraichissement pour lutter contre cette chaleur étouffante. Mon fils m’a dit qu’il y a eu un appel pour vous, en bas, à la réception. Apparemment votre interlocuteur s’est trompé de numéro, mais il nous a donné ce numéro pour que vous le rappeliez. »  <br>
En tendant un petit morceau de papier sur lequel avaient été griffonné quelques chiffres à la hâte, elle continua :  <br>
« Tout se passe comme vous le souhaitez ? Avez-vous besoin de quoi que ce soit ? ».  <br>
Alexis Roselier n’avait jamais besoin de quelque chose. Mais cette femme semblait si heureuse à l’idée d’être utile, qu’il joua le jeu et en profita pour demander où il pouvait bien aller pour se dégourdir les jambes. Pourtant, à sa grande surprise, la femme ne lui indiqua pas le parc sous sa fenêtre :  <br>
« Non non monsieur, vous ne vous y plairez pas. Dans ce pays, les riches et les pauvres cohabitent et sont voisins, mais ils ne s’aiment pas. Le parc était très joli à une époque, mais maintenant, il est constamment occupé par ces gamins orphelins qui ne savent pas où aller. Alors la journée ils cherchent à manger, et puis quand il fait trop chaud et que les passants se font rares, ils s’occupent et ils jouent dans le parc avant de transformer le parc en hôtel pour la nuit. »  <br>
Après quelques conseils, la femme s’éclipsa et laissa seul ce chef de projet, à nouveau perdu dans ses pensées. Comment pouvait-il s’être à ce point trompé sur le sort de ces enfants ? Et comment pouvaient-ils paraître si heureux, eux qui n’avaient rien à côté des autres, si tristes, qui avaient tout ? Peut-être n’était-ce qu’une apparence. Après tout, c’était bien lui qui avait une famille et un toit, lui qui avait un poste ambitieux, un travail reconnu, et qui allait bientôt conclure un accord qui allait marquer un tournant dans sa carrière. Il se refusait à penser que ces pauvres vagabonds puissent avoir quelque chose qu’il ne possédait pas. Pourtant, il devait se rendre à l’évidence : ces enfants, dans leur malheur, avaient gagné une richesse ; la liberté. Pas besoin d’apparat, de grande fortune, pas besoin de trouver les mots, les bons, ceux que les gens veulent entendre. Pas besoin de la bienséance des adultes, de leurs calculs et de leurs économies. Peut-être était-ce cela le bonheur : la liberté de ne pas pouvoir tout avoir, mais ne pas se voir de choix imposé.  <br>
Et en parlant de choix imposé, Alexis Roselier comprit qu’il n’était pas sorti d’affaire lorsqu’il appela le numéro écrit sur le petit morceau de papier, et qu’il découvrit que ce n’était autre qu’un de ses collaborateurs :  <br>
« Alexis, on a un problème. Le négociateur doit retarder son départ. Les intempéries ont inondé le rez-de-chaussée de sa maison, il doit mettre à l’abri ses meubles et enlever toute l’eau avant de partir. »  <br>
  <br>
<br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Il choisit d’aller à la rencontre du négociateur, à Dubaï. Il ne peut pas annuler les réservations déjà faites à l’hôtel et il aura en plus des coûts de déplacement, mais il pourra décrocher son contrat à coup sûr. Il a une chance sur trois d’arriver à Noël à temps, et adieu les économies si patiemment construites pour se rattraper auprès de sa famille… Au moins, il pourra se rattraper avec son nouveau poste stable qui lui accordera plus de temps auprès de sa famille durant les années à venir.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Attendre que le négociateur arrive. Il n’a aucune chance d’arriver à Noël à temps mais au moins il est assuré de décrocher le contrat sans faire de dépenses supplémentaires, et donc sans dilapider les dernières économies personnelles qu’il avait faites et qu’il pourra donc utiliser pour se faire pardonner auprès de sa famille. Avec ce nouveau contrat, il est assuré d’avoir un poste stable grâce auquel il pourra être plus souvent auprès de sa famille. Il pourra se rattraper pendant toute sa vie à venir donc.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>Il fait la réunion sans le négociateur. Il n’a qu’une chance sur deux de décrocher le contrat, mais il est sûr d’arriver à temps pour Noël. S’il ne décroche pas son contrat en revanche, toutes les économies dépensées l’auront été pour rien et adieu un poste plus stable, et donc un avenir plus proche de sa famille. Mais une promesse est une promesse, et il se doit de la respecter.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                elseif ($choix1 == 2 and $choix2 == 1) 
                {
            ?>
<p>
Alexis s’était décidé: il prendrait à nouveau l’avion. Mais dans l’aéroport, les minutes étaient devenues des heures, et l’espoir d’Alexis s’était transformé en désespoir. Il avait dû se rendre à l’évidence: la réunion serait reportée d’une journée. Il ne sera pas là à Noël, mais il sera là le jour suivant, et tous les autres jours qui suivront s’il venait à décrocher ce contrat qui lui garantirait un poste stable. <br>
En ce 22 décembre, Alexis ne peut s’empêcher de songer déjà à ce 25 décembre, quand il reprendra l’avion avec le contrat en poche. Se refusant de montrer la moindre faiblesse, il chasse cependant rapidement cette idée sombre de sa tête et se concentre sur sa réunion décalée. Car miraculeusement, il est bien à l’heure. Au pied des bâtiments, il pousse un soupir de soulagement et se recoiffe rapidement devant les grandes vitres qui font effet miroir avant d’entrer. Soudainement, il reçoit un appel du négociateur, le personnage le plus important de la réunion qui doit avoir lieu. Son monde s’écroule une nouvelle fois : retenu par des inondations dans sa résidence secondaire, il ne va pouvoir être présent. Fatigué d’avoir à porter toute la responsabilité de ses décisions sur ses épaules, Alexis décide d’appeler différentes connaissances afin d’être guidé sur la décision à prendre. <br>
 <br>
Avant même d’avoir pu taper le moindre numéro, c’est pourtant Paul qui l’appelle. Paul Pelletier était entré dans la compagnie à la même époque qu’Alexis et ils avaient donc formé un binôme, découvrant les rouages du métier en même temps, se partageant des conseils pour progresser dans l’entreprise. Ainsi, une confiance s’était établie entre les deux jeunes hommes et M. Roselier tendait plus facilement à suivre son avis. <br>
 <br>
« Salut Alexis ! Je sais pas si tu es déjà au courant mais le négociateur de l’opération ne pourra pas venir avant quelques jours. <br>
On vient de me mettre au courant, j’étais justement occupé à énumérer les différentes options qui me venaient à l’esprit maintenant. <br>
Je vois. Tu as déjà pris une décision ? <br>
Non, du tout. Qu’est-ce que tu ferais, toi ?  <br>
À ta place j’attendrai. Tu dois te poser les bonnes questions. Est-ce qu’une opportunité comme celle-ci va se représenter prochainement ? Est-ce que tu veux vraiment prendre le risque de ne jamais bénéficier de cette promotion ? Tu te rends compte de la position confortable que tu aurais avec ? Est-ce que tu veux pouvoir être l’homme de la famille sur lequel tout le monde peut compter ? Le père aimant qui peut apporter à ses enfants tout ce dont ils ont besoin pour grandir, puis pour leurs études ? <br>
Je comprends que tu me conseilles d’attendre le négociateur malgré le fait que j’ai promis d’être à la maison pour Noël. <br>
Tu te focalises là-dessus parce que c’est proche de toi, c’est actuel, je comprends. Mais est-ce que vraiment tu veux rater ça pour un Noël ? Y’en aura plein d’autres de Noël, surtout avec cette promotion. Je suis désolé, je peux pas rester plus longtemps avec toi, j’ai encore du travail, mais réfléchis bien. Cette occasion ne se représentera pas deux fois. Courage. » <br>
Si Alexis est plutôt convaincu par cet appel et cet avis qui est le plus proche de ses valeurs, il hésite. La promesse qu’il avait faite à sa femme, les gens qu’il avait rencontrés, tout le fait maintenant douter. Que veut-il vraiment ? Pris dans un tourbillon de sentiments qui se contredisent et se mélangent, il décide d’appeler, un peu sur un coup de tête, Hervé. Hervé était un ami qu’il avait connu bien avant Paul. C’était un ami du lycée, un garçon avec lequel il avait fait les 400 coups, avec qui il avait fait la tournée des festivals, et qui lui avait aussi présenté sa future femme. Mais après le lycée, Alexis était devenu plus sérieux, du moins c’est ce qu’il pensait, et s’était peu à peu éloigné de la folie de son adolescence pour se consacrer aux études et au travail. Il n’avait donc plus eu beaucoup de nouvelles de Hervé depuis. Il ne lui avait pas parlé depuis si longtemps qu’il se demandait même si le numéro qu’il avait dans ses contacts était toujours le bon. <br>
 <br>
« Allo ? <br>
Hervé ? <br>
Oui ? Je peux savoir qui vous êtes ? <br>
C’est moi, Alexis. <br>
Alexis ? Ça fait bien longtemps que j’ai pas entendu ce nom… Comment tu vas, vieux? <br>
Ça va, enfin, je crois. » <br>
 <br>
Il lui raconte alors ses doutes, se perd dans ses questionnements. Et est étonné de remarquer que Hervé l’écoute. Alexis redoutait son ami, puisqu’il savait que c’était sa faute s’ils n’étaient plus en contact. Il est d’autant plus étonné qu’il n’a plus l’habitude d’être écouté. Tout va si vite, tout le temps. On donne des indications, des ordres, et on s’exécute. Il n’y a pas tellement à réfléchir, il y a une hiérarchie et Alexis sait ce qu’il a à faire. Si son avis est important, l’horizon des questions pour lesquelles on demande son avis est finalement très restreint ou futile. Finalement, Hervé se décide à reprendre la parole. <br>
 <br>
« Alexis, ça fait très longtemps. Je sais pas si mon avis est vraiment important vu l’homme que tu es devenu. Je peux juste te dire que le garçon que j’ai connu au lycée me manque. Et tu sais que je suis pas quelqu’un de sentimental pourtant. Mais je me dis que si je pense ça je dois pas être le seul. Comment va Sylvie ? Comment vont tes enfants ? Ne me réponds pas que ça va. Est-ce que tu as pris des nouvelles d’eux depuis que t’es parti ? Je sais que tu veux tout bien faire, tu as toujours été plus sérieux que moi, plus déterminé, et c’est tout à ton honneur. Mais peut-être que pour une fois, tu te trompes. Pourquoi est-ce que ta femme a insisté pour que tu sois présent à Noël ? Tu crois vraiment qu’elle est si inconsciente que ça, qu’elle préfère que tu ailles pas au travail ? Moi je pense qu’elle est très contente de ce qu’elle a, mais qu’elle a peur de te perdre. Ne te noie pas dans le travail, Alexis, reviens dans ta famille. Oui tu manqueras une opportunité, mais ne perds pas l’opportunité de voir tes enfants grandir. S’il est possible que cette promotion ne te soit plus proposée, il est sûr que tu ne pourras pas revivre ce Noël avec ta famille. Tu dis que tu fais tout ça pour ta famille, mais ce que veut ta famille, c’est toi. Alors fais cette réunion si tu le veux vraiment, mais n’attends pas le négociateur. En plus, ta réunion durera bien moins longtemps sans le négociateur, et tu pourrais être à Noël à temps.» <br>
 <br>
Un peu pris de court par cette longue déclaration, le cadre en perd ses mots. Il balbutie quelques remerciements à Hervé, lui promet de prendre de ses nouvelles plus souvent, et lui dit que le temps lui étant compté, il va raccrocher pour prendre une décision. Mais au moment où il s’apprête à appeler son supérieur pour lui annoncer sa décision, il se rend compte que Mickaël, un des membres de son équipe qui devait aussi venir le rejoindre à la réunion, a laissé un message sur le répondeur. <br>
« Hey Alexis ! Je viens d’entendre la nouvelle pour le négociateur, mais on est déjà presque là, et pour pas perdre le gros contrat je me disais qu’on pouvait peut-être aller à sa rencontre. Certes on n’arrivera pas à Noël à temps, mais au moins on arrivera plus tôt après les fêtes que si on décale tout. Je sais que ça te tient à cœur et moi aussi. Rappelle-moi dès que tu peux. » <br>
  <br>
<br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Suivre l’avis de Paul et attendre le négociateur sans pouvoir espérer revenir dans la famille avant quelques jours. Cependant, la promotion est tellement confortable qu’Alexis et sa famille pourront désormais vivre de manière très aisée, plus encore qu’avant, et surtout, Alexis pourra passer bien plus de temps auprès de sa famille à l’avenir.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Suivre l’avis de Mickaël et jouer avec la montre pour essayer de rejoindre le négociateur et ainsi arriver le 25 décembre. Toutefois, Alexis sacrifierait une partie de ses économies car la société n’accepterait pas de financer une telle option…</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>Suivre l’avis de Hervé et effectuer la réunion sans le négociateur, ayant alors une chance sur deux de décrocher le contrat, mais ayant toutes ses chances de passer Noël en famille. Même s’il pourrait manquer la garantie d’avoir une belle promotion avec un emploi stable qui lui aurait offert plus de temps auprès de sa famille à l’avenir, voir sa famille pour Noël est l’essentiel.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                elseif ($choix1 == 2 and $choix2 == 2) 
                {
            ?>
<p>
Alexis Roselier s’y attendait : la ville dans laquelle il se trouve maintenant est loin d’être grande. Ne se défaisant pas de son calme et fidèle à sa décision, il suit consciencieusement les panneaux de direction qui le mènent tout droit à une station de taxi. Il regarde sa montre: 22h45. Pas étonnant qu’il y ait si peu de monde dans les rues. Pourtant, la station de taxi regorge encore de touristes qui ne demandent qu’à regagner leurs pénates et pas une seconde ne s’écoule entre l’arrêt d’un taxi et la montée d’un client. En effet, si la ville n’est pas grande, les activités y sont nombreuses, bien plus nombreuses que le nombre de taxis qui passent pour réguler le flux de touristes. M. Roselier, trop hésitant face à des touristes qui ont un peu trop arrosé leur soirée, peine quant à lui à s’imposer et regarde, désespéré, les taxis un à un partir sans lui. <br>
« Pauvres gens ! » entend-il soudainement derrière son dos. Il se retourne : <br>
« C’est à moi que vous parlez ? ». <br>
L’homme qui se tient face à lui est petit et robuste. Les sourcils broussailleux, les joues creuses, et l’air quelque peu renfrogné, il répond en pointant du doigt la valse de taxi qu’il ne détache pas du regard :  <br>
« Non non, je parlais de ceux là-bas. A courir après le temps ils ne réalisent pas qu’ils ne le rattraperont jamais. Ils s’affolent, comme des marionnettes en oubliant qu’ils ne sont que des pantins de bois. <br>
-Je ne suis pas sûr de saisir où vous voulez en venir. <br>
-Je ne dis que ce que je vois. Que faîtes-vous comme métier mon bon monsieur ? Vous l’aimez votre métier ? <br>
-Je travaille à l’Acompta en tant que chef de projet. C’est la plus influente entreprise immobilière au monde alors comment pourrais-je ne pas aimer mon travail ? » <br>
Monsieur Roselier avait gagné de l’assurance, comme toujours lorsqu’il parlait de son travail. Mais son assurance n’avait pas l’air de convaincre l’homme qui le dévisageait tout d’un coup en fronçant les sourcils : <br>
« Il y a des milliards de raisons de ne pas aimer son travail, mais il n’y a qu’une raison de l’aimer : il faut qu’il soit taillé pour vous, qu’il mette en valeurs les compétences que vous voulez mettre en avant, et pas que la société veut que vous mettiez en avant. Si votre entreprise est la plus influente au monde, alors c’est que la société a décidé que c’était ces compétences qu’elle voulait mettre en avant. Mais vous, vous êtes sûr que ce sont ces compétences qui vous sont propres ? » <br>
Alexis Roselier se trouvait bien dans l’embarras à ce moment précis. Jamais personne n’avait remis en question son travail, pas même lui. Bien sûr qu’il était content de son travail, du moins il ne s’en était jamais plaint. Évidemment qu’il avait les compétences pour le travail, comment l’aurait-il eu sinon ? Mais se demander si mettre en avant ces compétences particulièrement était réellement ce qu’il souhaitait, il ne l’avait jamais fait. Pourquoi faire après tout ? Tant qu’il avait des compétences pour gagner de l’argent et ainsi nourrir sa famille, il estimait que ces compétences étaient suffisantes. L’homme ne lui laissa pourtant pas le temps de répondre et commença un monologue que nul ne pouvait arrêter : il était lui-même chauffeur de taxi, mais pas un de ces coursiers comme il aimait à appeler les autres chauffeurs, ces chauffeurs qui se souciaient autant de leurs clients qu’un facteur se soucie de son colis dans le coffre de sa voiture. Il se revendiquait passionné, sympathique et courtois. Mais plus que tout, il se disait heureux : <br>
« Vous savez, il y a trois moments clés pour un chauffeur de taxi : le début du voyage où il doit trouver un client, puis le voyage lui-même qui doit bien se passer, et enfin la fin du voyage où il gagne son dû. Si un seul moment manque, le chauffeur n’a pas réussi son travail. Eux là-bas, ils ne voient pas le voyage, seulement l’arrivée. Mais lorsqu’ils sont arrivés, ils ne sont pas plus heureux, parce qu’ils pensent déjà au prochain départ. Pourtant, s’ils profitent du voyage, alors ils ont gagné quelque chose avant même d’être arrivés, et alors ils sont heureux avant de penser au prochain départ. Le voyage, jeune homme, c’est ça qui reste gravé dans les mémoires. Vous ne vous souvenez pas de votre naissance, et vous ne témoignerez pas de votre mort, mais les autres pourront penser à votre mort sereinement, parce que c’est votre vie qui aura compté. Ce que vous faites dans la vie, ce que vous découvrez pendant le voyage, c’est ça qui vous rend heureux. Moi j’en découvre tous les jours, je parle, je parle, et rien ne peut m’arrêter. Mais j’aime aussi écouter, poser des questions, me montrer curieux. Il y a une semaine j’ai discuté avec un jeune français qui m’a appris les traditions de son pays, il y a trois jours j’ai rencontré une bonne vieille dame qui m’a invité à passer chez elle, près de la mer, si je passais dans le coin et pas plus tard qu’hier un jeune aveugle m’a appris les plus belles leçons de vie qui soit. J’ai la chance inouïe de me coucher chaque soir avec de nouveaux rêves, et de me lever chaque matin avec l’envie de les accomplir. Et vous monsieur, de quoi rêvez-vous alors ? » <br>
Il faut dire que la réponse était immédiate : à cette heure tardive de la nuit, il ne rêvait que d’une chose: monter dans un taxi, arriver à l’heure à cette réunion, monter ce projet, convaincre le négociateur et rentrer chez lui. Mais les taxis se faisaient de plus en plus rares et les gens de plus en plus désagréables. Au coude à coude, il avait déjà perdu la course avant même qu’un taxi ne s’arrête. L’homme qui continuait à toiser du regard les gens pressés, courant dans tous les sens, regarda tout d’un coup Alexis Roselier d’un regard beaucoup plus compréhensif :  <br>
« Vous savez, je suis chauffeur de taxi. Là c’est mon jour de repos, je ne travaille jamais ce jour-là, je venais seulement réparer mon cabriolet qui est bien mal au point depuis deux jours. Mais comme je vous l’ai dit, choisir son métier, c’est choisir ses compétences à mettre en avant. Et moi, je veux me mettre au service des gens. Vous avez besoin d’aide, je peux vous aider. Ma femme est partie en voyage pour voir ses parents, je suis tout seul chez moi, alors j’ai tout mon temps. Que diriez-vous d’un voyage dans mon cabriolet tout juste réparé ?» <br>
« Au moins je serai sûr que j’aurai bien réglé le problème pour mon prochain voyage ! » rajoute-t-il en rigolant. <br>
 <br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Accepter l’offre du chauffeur de taxi et partir avec lui. En espérant qu’il soit bon mécanicien et que son cabriolet tienne jusqu’à la fin du voyage… Car sinon, il peut dire adieu à sa réunion et à Noël.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Décliner l’offre et préférer la sécurité et l’efficacité des taxis, en espérant qu’il y ait encore suffisamment de taxis qui passeront pour qu’Alexis Roselier en saisisse un… Mais s’il en saisit un, il est assuré d’arriver à l’heure pour la réunion, et donc pour Noël.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                elseif ($choix1 == 2 and $choix2 == 3) 
                {
            ?>
<p>
La première partie du voyage s’était plutôt bien terminée, et il avait même eu l’occasion d’avoir des débats très riches avec le chauffeur qui commençaient, doucement, à le faire réfléchir sur le sens de sa propre vie. Il est à présent à une nouvelle station de taxis et observe le bal incessant de voitures qui arrivent et repartent aussitôt. Sans y réfléchir davantage et en suivant son intuition, il décide d’entrer dans la voiture de laquelle le chauffeur lui fait un grand sourire confiant. <br>
 <br>
Les minutes passent. Alexis contemple le paysage qui défile devant ses yeux. Cependant, après une première heure de route qui se déroule sans encombre, la voiture est soudainement prise dans des embouteillages.  Décidément, ce voyage d’affaires qui était censé se dérouler sans encombre se transforme en véritable cauchemar. Assis sur la banquette arrière de cette voiture des années 2000 dont le cuir est rêche, Alexis voit son contrat s’envoler. L’heure tourne et ils n’avancent pas. Au moins, pense-t-il, il n’est pas dépaysé, se rappelant les embouteillages habituels aux portes de Paris. Il se demande néanmoins pourquoi autant de voitures sont présentes ici, pensant que la région régulait relativement bien le flux. Déjà le conducteur lui donne la réponse à sa question, sans même qu’il ait besoin de la formuler: <br>
« On sent que c’est bientôt Noël. Beaucoup de monde rentre chez soi, voir sa famille. L’Arabie Saoudite interdit de fêter Noël mais ici, aux Emirats arabes unis, vous ne serez pas dépaysé à l’abord des grandes villes. Il y a de grandes festivités à Dubaï, vous savez.» <br>
 <br>
Alexis regarde plus attentivement autour de lui : il y a effectivement une majorité de familles dans les voitures. Son regard s’arrête tout particulièrement sur la voiture familiale à sa droite. Un homme d’une quarantaine d’années, qui lui ressemble, est au volant. À sa droite, une femme et à l’arrière, deux enfants d’une dizaine d’années qui jouent ensemble aux cartes. S’il s’attarde sur eux, c’est que l’une de leurs fenêtres est ouverte et qu’il les entend discuter, ou plutôt, s’énerver. <br>
La femme fronce les sourcils. “Je t’avais dit que c’était trop tard, nous aurions dû partir la veille pour éviter les bouchons”. L’homme semble impassible, elle continue. “Maintenant nous allons sans doute rater le Kebsa de mamie alors que c’est le plat que les enfants préfèrent, j’ai pas raison les enfants ?” La banquette arrière s’anime et le « oui » à l’unisson du garçon et de la petite fille semble faire émaner de la chaleur tout autour d’eux. Celui qu’Alexis suppose être le père des gamins sort enfin de son silence. “J’ai déjà pris davantage de jours de congés pour qu’on ait plus de temps ensemble, je suis désolé, tu n’avais qu’à partir sans moi.” La femme fulmine. “Arrête de faire celui qui ne comprend pas, on ne serait jamais partis sans toi, qu’est-ce que ce serait un Noël sans une partie de la famille ?” Le père s’apaise tout à coup et une ambiance plus chaleureuse s’empare de la voiture, à nouveau. Et celle-ci avance enfin. <br>
Partout autour de lui, les gens sont animés de la même essence. Alexis se sent alors très seul, préoccupé par son travail et incapable de savoir si lui verra sa famille pour Noël. Depuis quand n’a-t-il pas vu ses parents ? Finalement, il envierait presque le couple qui s’énerve, n’ayant même pas l’opportunité de se disputer avec sa femme. Il secoue la tête. Mais qu’est-ce qu’il raconte, comment peut-il rêver de se disputer avec sa femme ?  Qui rêverait de cela? Il se force alors à rêver à une vie paisible et aisée dans laquelle sa famille ne manquerait d’aucun des bonheurs de la vie. <br>
Soudainement, il est sorti de ses pensées par un appel urgent : le négociateur du contrat. Celui-ci lui explique, très rapidement et sans attendre la réponse d’Alexis, qu’il fait face à des problèmes dans sa maison. Un dégât des eaux qui l’empêchera d’être à Dubaï en temps et en heures. Il faut soit annuler soit reporter. Prendre une décision vite. Très vite. Et il raccroche. Alexis, déjà stressé, doit reprendre en panique une nouvelle décision. <br>
 <br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Face aux embouteillages qui risquent de s’éterniser encore quelques jours d’après le conducteur, Alexis perd l’espoir d’arriver à temps pour la réunion, quelque soit la date. Il préfère ainsi annuler tout simplement la réunion et garder une chance de passer Noël avec sa famille. Il a peu de chances de décrocher ce contrat à nouveau, et donc d’obtenir un poste plus stable à l’avenir, mais au moins, il a encore toutes ses chances de tenir sa promesse.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Seule personne présente à ses côtés, Alexis demande l’avis de son chauffeur sur les chances de réaliser la réunion à l’heure. Ce dernier hésite mais à l’intuition cela reste jouable avec seulement quelques heures de retard. Alexis décide donc de décaler la réunion de quelques heures, sans le négociateur, en espérant que tout se coordonne au mieux. Il n’aurait alors qu’une chance sur deux de décrocher le contrat, mais deux chances sur trois d’arriver à Noël à temps, si l’intuition du conducteur est bonne…</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>La présence du négociateur lui garantirait ce contrat dont il a toujours rêvé pour avoir un poste stable et avoir ainsi plus de temps avec sa famille. Certes il ne pourrait pas passer Noël avec sa famille, mais il aura l’assurance de passer tous les suivants avec eux et de les rendre heureux à l’avenir. Après tout, il n’a quand même pas fait tout cela pour rien: il décide donc de reporter la réunion de quelques jours.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                elseif ($choix1 == 3 and $choix2 == 1) 
                {
            ?>
<p>
De sa chambre, Alexis Roselier contemple par la fenêtre le paysage pour essayer de retrouver un peu de calme. Sa décision n’a pas été facile à prendre mais il est maintenant sûr de lui: il fera la réunion dans cet hôtel. Du haut du 3ème étage du Al Hamra Palace Hotel Al-Aswaq, il peut observer les mouvements du quartier dans les moindres détails. Cet homme qui court au coin de la rue n’a pas l’air d’avoir une vie moins stressante que la mienne se dit-il. Et puis cette femme là-bas semble aussi un peu perdue. Finalement, ces hommes et ces femmes n’ont pas l’air bien heureux. Mais l’est-il lui-même ? Qu’est-ce que le bonheur après tout ? Une bien grande question qu’il n’avait jamais osé se poser avant ce périple. Mais ce voyage lui apportait des questions bien inhabituelles. Son regard sur le monde semblait changé, du moins sa perception des évènements était différente. Le bonheur après tout, c’était peut-être ces enfants dans le parc qui jouaient avec des morceaux de bois et des cailloux, avec des cris et des gestes. Ces enfants avaient probablement l’insouciance, l’innocence et la naïveté qu’il avait perdues, pensait-il. C’est si simple d’être un enfant… <br>
Soudain, on toque discrètement à la porte : <br>
« Bonjour Monsieur, je me suis permise de vous apporter un petit rafraichissement pour lutter contre cette chaleur étouffante. Mon fils m’a dit qu’il y a eu un appel pour vous, en bas, à la réception. Apparemment votre interlocuteur s’est trompé de numéro, mais il nous a donné ce numéro pour que vous le rappeliez. » <br>
En tendant un petit morceau de papier sur lequel avaient été griffonné quelques chiffres à la hâte, elle continua : <br>
« Tout se passe comme vous le souhaitez ? Avez-vous besoin de quoi que ce soit ? ». <br>
Alexis Roselier n’avait jamais besoin de quelque chose. Mais cette femme semblait si heureuse à l’idée d’être utile, qu’il joua le jeu et en profita pour demander où il pouvait bien aller pour se dégourdir les jambes. Pourtant, à sa grande surprise, la femme ne lui indiqua pas le parc sous sa fenêtre : <br>
« Non non monsieur, vous ne vous y plairez pas. Dans ce pays, les riches et les pauvres cohabitent et sont voisins, mais ils ne s’aiment pas. Le parc était très joli à une époque, mais maintenant, il est constamment occupé par ces gamins orphelins qui ne savent pas où aller. Alors la journée ils cherchent à manger, et puis quand il fait trop chaud et que les passants se font rares, ils s’occupent et ils jouent dans le parc avant de transformer le parc en hôtel pour la nuit. » <br>
Après quelques conseils, la femme s’éclipsa et laissa seul ce chef de projet, à nouveau perdu dans ses pensées. Comment pouvait-il s’être à ce point trompé sur le sort de ces enfants ? Et comment pouvaient-ils paraître si heureux, eux qui n’avaient rien à côté des autres, si tristes, qui avaient tout ? Peut-être n’était-ce qu’une apparence. Après tout, c’était bien lui qui avait une famille et un toit, lui qui avait un poste ambitieux, un travail reconnu, et qui allait bientôt conclure un accord qui allait marquer un tournant dans sa carrière. Il se refusait à penser que ces pauvres vagabonds puissent avoir quelque chose qu’il ne possédait pas. Pourtant, il devait se rendre à l’évidence : ces enfants, dans leur malheur, avaient gagné une richesse ; la liberté. Pas besoin d’apparat, de grande fortune, pas besoin de trouver les mots, les bons, ceux que les gens veulent entendre. Pas besoin de la bienséance des adultes, de leurs calculs et de leurs économies. Peut-être était-ce cela le bonheur : la liberté de ne pas pouvoir tout avoir, mais ne pas se voir de choix imposé. <br>
Et en parlant de choix imposé, Alexis Roselier comprit qu’il n’était pas sorti d’affaire lorsqu’il appela le numéro écrit sur le petit morceau de papier, et qu’il découvrit que ce n’était autre qu’un de ses collaborateurs : <br>
« Alexis, on a un problème. Le négociateur doit retarder son départ. Les intempéries ont inondé le rez-de-chaussée de sa maison, il doit mettre à l’abri ses meubles et enlever toute l’eau avant de partir. » <br>
 <br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Il choisit d’aller à la rencontre du négociateur, à Dubaï. Il ne peut pas annuler les réservations déjà faites à l’hôtel et il aura en plus des coûts de déplacement, mais il pourra décrocher son contrat à coup sûr. Il a une chance sur trois d’arriver à Noël à temps, et adieu les économies si patiemment construites pour se rattraper auprès de sa famille… Au moins, il pourra se rattraper avec son nouveau poste stable qui lui accordera plus de temps auprès de sa famille durant les années à venir.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Attendre que le négociateur arrive. Il n’a aucune chance d’arriver à Noël à temps mais au moins il est assuré de décrocher le contrat sans faire de dépenses supplémentaires, et donc sans dilapider les dernières économies personnelles qu’il avait faites et qu’il pourra donc utiliser pour se faire pardonner auprès de sa famille. Avec ce nouveau contrat, il est assuré d’avoir un poste stable grâce auquel il pourra être plus souvent auprès de sa famille. Il pourra se rattraper pendant toute sa vie à venir donc.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>Il fait la réunion sans le négociateur. Il n’a qu’une chance sur deux de décrocher le contrat, mais il est sûr d’arriver à temps pour Noël. S’il ne décroche pas son contrat en revanche, toutes les économies dépensées l’auront été pour rien et adieu un poste plus stable, et donc un avenir plus proche de sa famille. Mais une promesse est une promesse, et il se doit de la respecter.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                elseif ($choix1 == 3 and $choix2 == 2) 
                {
            ?>
<p>
Souhaitant profiter une dernière fois de l’ambiance familiale et chaleureuse de l’hôtel, Alexis décide de s’installer dans l’un des fauteuils du grand salon de l’hôtel pour préparer sa nouvelle réunion. Alors qu’il est confortablement assis, son ordinateur sur ses genoux et un café sur la table basse à sa droite, il entend de grands bruits lointains qui l’intriguent, sans y prêter pour autant davantage d’attention. <br>
Cependant, au bout d’une dizaine de minutes, les bruits se sont rapprochés et il ne peut plus les ignorer. De jeunes mariés accompagnés de leur photographe ainsi que de quelques témoins ont pris possession du hall. Un homme qui se présente comme le frère de la mariée s’assoit dans le canapé juxtaposé au fauteuil d’Alexis. Très rapidement, il interpelle le cadre : <br>
 <br>
« C’est marrant, vous me faites vraiment à penser à lui, lance-t-il en pointant du doigt le jeune marié. Enfin, vous me faites penser au lui d’avant. » <br>
 <br>
Dans l’incapacité de se concentrer et ne voulant pas paraître malpoli, M. Roselier se prête au jeu de la discussion et lui demande ainsi pourquoi il lui fait cette remarque. Sa curiosité a été piquée, il ne voit aucun rapport entre l’homme qui porte vigoureusement la jeune femme devant, et lui-même. <br>
 <br>
« On ne dirait pas, mais il y a quelques années il était très maigre et souriait relativement peu. Il travaillait pour Jadwa Investment, je ne sais pas si vous connaissez. C’était pas vraiment sa faute, ses parents lui ont toujours mis beaucoup de pression pour qu’il fasse de bonnes études, qu’il ait un bon travail, qu’il soit bien intégré, bref qu’il devienne quelqu’un. Et lui-même a fini par se persuader qu’il devait faire tout ça. » <br>
 <br>
Si Alexis ne se trouve pas si antipathique que la première description que l’homme fait du jeune marié, il se reconnaît dans cette envie de fierté dans les yeux des gens auxquels il tient, cette envie de la vie bien réussie, bien comme il faut, sans faire d’écart. Une vie peut-être un peu banale mais une vie sans vrai problème. <br>
 <br>
« Et puis il l’a rencontrée. Elle était un peu plus libre que lui dans sa tête et elle voulait depuis toute petite ouvrir une pâtisserie puisqu’elle a toujours adoré nous en faire à nous. C’était quelque chose de complètement fou, de pas suffisamment stable pour lui, alors il a hésité. Et on a le résultat aujourd’hui. Ils ont ouvert la pâtisserie ensemble l’an dernier. » <br>
 <br>
Alexis lui avoue, tout en restant mesuré, son admiration. Effectivement, il n’arriverait pas à imaginer abandonner tout ce qu’il a durement construit, sa vie stable, pour un projet aussi instable. Il n’arrive pas à comprendre ce qui pousse à tout changer. Et quelque part, il envie cette volonté qui lui manque quand il voit les sourires et les rires des jeunes gens devant lui. <br>
Soudainement, le téléphone d’Alexis s’allume pour indiquer une notification. C’est le négociateur, homme clé de la réunion, qui lui a laissé un court message: très poliment, il remercie M. Roselier pour tous ses efforts, mais décline sa proposition d’une nouvelle réunion à mi-chemin. Ayant été retardé par quelques problèmes indépendants de sa volonté, il ne peut se déplacer au nouveau lieu de rendez-vous. Alexis se retrouve donc à nouveau confronté à un dilemme, et réfléchit aux différentes options qui se présentent à lui. <br>
 <br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Il décide, in extremis, de rejoindre le négociateur dans la ville prévue à l’origine. En se décidant maintenant, il a une chance sur deux d’arriver à temps à la réunion et d’être à l’heure pour Noël. Il n’a plus qu’à espérer que sa femme comprenne qu’il ait dilapidé toutes les économies restantes pour essayer de décrocher ce contrat qui lui garantirait plus de temps auprès d’elle…</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Perdu devant cette avalanche de mauvaises nouvelles, il décide d’appeler un très bon ami à lui, Hervé, afin de lui demander conseil. Ce dernier l’incite alors à ne pas gaspiller davantage l’argent qu’il avait réservé à sa famille et lui conseille d’effectuer la réunion sans le négociateur. Il n’aura plus qu’une chance sur trois d’obtenir la promotion tant convoitée, mais il aura deux chances sur trois d’arriver à l’heure pour l’essentiel : Noël en famille.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>Pensant beaucoup à sa famille et voyant ses chances de réussir à faire cette réunion s’amenuiser, comme un signe du destin, il décide d’annuler tout simplement la réunion et de rentrer chez lui de manière certaine. Cependant, si sa promesse sera tenue, il n’a plus aucune chance de décrocher le contrat, et donc d’obtenir un poste stable qui lui garantirait plus de temps auprès de sa famille à l’avenir.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                elseif ($choix1 == 3 and $choix2 == 3) 
                {
            ?>
<p>
La première partie du voyage s’était plutôt bien terminée, et il avait même eu l’occasion d’avoir des débats très riches avec le chauffeur qui commençaient, doucement, à le faire réfléchir sur le sens de sa propre vie. Il est à présent à une nouvelle station de taxis et observe le bal incessant de voitures qui arrivent et repartent aussitôt. Sans y réfléchir davantage et en suivant son intuition, il décide d’entrer dans la voiture de laquelle le chauffeur lui fait un grand sourire confiant. <br>
 <br>
Les minutes passent. Alexis contemple le paysage qui défile devant ses yeux. Cependant, après une première heure de route qui se déroule sans encombre, la voiture est soudainement prise dans des embouteillages.  Décidément, ce voyage d’affaires qui était censé se dérouler sans encombre se transforme en véritable cauchemar. Assis sur la banquette arrière de cette voiture des années 2000 dont le cuir est rêche, Alexis voit son contrat s’envoler. L’heure tourne et ils n’avancent pas. Au moins, pense-t-il, il n’est pas dépaysé, se rappelant les embouteillages habituels aux portes de Paris. Il se demande néanmoins pourquoi autant de voitures sont présentes ici, pensant que la région régulait relativement bien le flux. Déjà le conducteur lui donne la réponse à sa question, sans même qu’il ait besoin de la formuler: <br>
« On sent que c’est bientôt Noël. Beaucoup de monde rentre chez soi, voir sa famille. L’Arabie Saoudite interdit de fêter Noël mais ici, vous ne serez pas dépaysé à l’abord des grandes villes. Il y a de grandes festivités à Dubaï, vous savez.» <br>
 <br>
Alexis regarde plus attentivement autour de lui : il y a effectivement une majorité de familles dans les voitures. Son regard s’arrête tout particulièrement sur la voiture familiale à sa droite. Un homme d’une quarantaine d’années, qui lui ressemble, est au volant. À sa droite, une femme et à l’arrière, deux enfants d’une dizaine d’années qui jouent ensemble aux cartes. S’il s’attarde sur eux, c’est que l’une de leurs fenêtres est ouverte et qu’il les entend discuter, ou plutôt, s’énerver. <br>
La femme fronce les sourcils. “Je t’avais dit que c’était trop tard, nous aurions dû partir la veille pour éviter les bouchons”. L’homme semble impassible, elle continue. “Maintenant nous allons sans doute rater le Kebsa de mamie alors que c’est le plat que les enfants préfèrent, j’ai pas raison les enfants ?” La banquette arrière s’anime et le « oui » à l’unisson du garçon et de la petite fille semble faire émaner de la chaleur tout autour d’eux. Celui qu’Alexis suppose être le père des gamins sort enfin de son silence. “J’ai déjà pris davantage de jours de congés pour qu’on ait plus de temps ensemble, je suis désolé, tu n’avais qu’à partir sans moi.” La femme fulmine. “Arrête de faire celui qui ne comprend pas, on ne serait jamais partis sans toi, qu’est-ce que ce serait un Noël sans une partie de la famille ?” Le père s’apaise tout à coup et une ambiance plus chaleureuse s’empare de la voiture, à nouveau. Et celle-ci avance enfin. <br>
Partout autour de lui, les gens sont animés de la même essence. Alexis se sent alors très seul, préoccupé par son travail et incapable de savoir si lui verra sa famille pour Noël. Depuis quand n’a-t-il pas vu ses parents ? Finalement, il envierait presque le couple qui s’énerve, n’ayant même pas l’opportunité de se disputer avec sa femme. Il secoue la tête. Mais qu’est-ce qu’il raconte, comment peut-il rêver de se disputer avec sa femme ?  Qui rêverait de cela? Il se force alors à rêver à une vie paisible et aisée dans laquelle sa famille ne manquerait d’aucun des bonheurs de la vie. <br>
Soudainement, il est sorti de ses pensées par un appel urgent : le négociateur du contrat. Celui-ci lui explique, très rapidement et sans attendre la réponse d’Alexis, qu’il fait face à des problèmes dans sa maison. Un dégât des eaux qui l’empêchera d’être au lieu de rendez-vous en temps et en heures. Il faut soit annuler soit reporter. Prendre une décision vite. Très vite. Et il raccroche. Alexis, déjà stressé, doit reprendre en panique une nouvelle décision <br>
 <br>
<b>Que faire ? À vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire… </b>
</p>
            <form action="histoire3.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Face aux embouteillages qui risquent de s’éterniser encore quelques jours d’après le conducteur, Alexis perd l’espoir d’arriver à temps pour la réunion, quelque soit la date. Il préfère ainsi annuler tout simplement la réunion et garder une chance de passer Noël avec sa famille. Il a peu de chances de décrocher ce contrat à nouveau, et donc d’obtenir un poste plus stable à l’avenir, mais au moins, il a encore toutes ses chances de tenir sa promesse.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Seule personne présente à ses côtés, Alexis demande l’avis de son chauffeur sur les chances de réaliser la réunion à l’heure. Ce dernier hésite mais à l’intuition cela reste jouable avec seulement quelques heures de retard. Alexis décide donc de décaler la réunion de quelques heures, sans le négociateur, en espérant que tout se coordonne au mieux. Il n’aurait alors qu’une chance sur deux de décrocher le contrat, mais deux chances sur trois d’arriver à Noël à temps, si l’intuition du conducteur est bonne…</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>La présence du négociateur lui garantirait ce contrat dont il a toujours rêvé pour avoir un poste stable et avoir ainsi plus de temps avec sa famille. Certes il ne pourrait pas passer Noël avec sa famille, mais il aura l’assurance de passer tous les suivants avec eux et de les rendre heureux à l’avenir. Après tout, il n’a quand même pas fait tout cela pour rien: il décide donc de reporter la réunion de quelques jours.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
            <?php 
                }
                else {
                    echo "Veuillez commencer par les histoires des jour précedants";
                }
            ?>    
        </div>
    </body>
</html>
