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

    $req = $bdd->prepare('SELECT choix_1, choix_2, choix_3 FROM info WHERE id = :id');
    $req->execute(array('id' => $_SESSION['id']));
    $recherche = $req->fetch();
    $choix1 = $recherche[0];
    $choix2 = $recherche[1];
    $choix3 = $recherche[2];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./style24.css" type="text/css"/>
        <title>calendrier</title>
    </head>

    <body>
        <h1>Jour 24: Dernieres surprises</h1>
        <p>Au programme de ce dernier jour, nous vous avons préparé plusieurs surprises!</p>
<?php if ($choix1 == 1 and $choix2 == 2 and $choix3 == 3)
    {
?>
        <h2>Fin de l'histoire</h2>
        <p>
La ville de Dubaï est une nouvelle galaxie, un bien autre univers que celui qu’Alexis Roselier connaissait jusque-là. Ici, les hommes n’ont pas peur de provoquer la nature, ni de défier l’Histoire. Quoi que le passé ait construit, Dubaï innove, crée et bat de nouveaux records chaque année. Dans cette ville de tous les possibles, entouré de ces gratte-ciels qui ne connaissent aucune limite, Alexis attend. Minuscule face à ces géants de verre et d’acier, il regarde patiemment le cadran de sa montre, conscient qu’il ne peut désormais plus rien faire d’autre. Sa décision est irrévocable : il fera la réunion sans le négociateur. Ne pouvant manquer sa promesse auprès de sa femme, il veut jouer le tout pour le tout. Il sait qu’il a peu de chance de décrocher le contrat sans le négociateur, mais il sait qu’il a encore moins de chance que sa femme pardonne son absence à Noël. Dans ce pays des imprévus et des surprises, il a appris à réfléchir à ses choix. Loin du confort d’un planning respecté à la lettre, d’un trajet quotidien sans aléas, d’une vie sans encombre, il se demande combien son métier est fragile, combien son assurance n’est pas superficielle. Lui qui avait suivi tous les conseils, répété tous les mots qu’il fallait dire, lui qui s’était toujours attelé avec patience et rigueur à se construire la vie idéale, la vie parfaite, la vie comblée, il se trouvait bien malheureux et impuissant tout à coup. Dans cette acceptation de sa faiblesse, il avait finalement réalisé ce qui le maintenait debout chaque jour : sa famille. Quoi que le temps décide et peu importe les revirements de situation, il avait trouvé où puiser la stabilité dont il avait toujours eu besoin. <br>
<br>
Shuraa Business Center - Hamsa Building. L’équipe est enfin au complet. Ses collaborateurs viennent d’arriver, après un voyage tout aussi éprouvant que celui d’Alexis. Ils sont fatigués, éreintés, mais plus que tout, ils ont peu d’espoir. En attendant que le national qui doit soutenir leur projet arrive, ils s’échangent leurs attentes et leurs craintes, leurs désirs et leurs angoisses. Tous ont traversé des péripéties qu’ils n’avaient jamais vu venir, et chacun a dû faire ses propres sacrifices. Mais Alexis Roselier n’est étrangement plus le premier à s’en plaindre. Ces derniers jours qui lui sont apparus comme une éternité, ces derniers jours qui ont mis en lumière toutes ses failles et tous ses défauts, tous ses abus de pensées et tous ses vices, ces derniers jours ont surtout été ceux qui l’ont changé. Il n’est pas un nouvel homme, il n’a pas même vécu de grande métamorphose et il n’est pas devenu un nouveau sage. Mais pas besoin d’être dans un conte de fées pour grandir, pas besoin d’être un grand philosophe pour prendre du recul sur la vie. Après tout, il ne faut pas attendre le paradis pour être heureux. Et c’est ce qu’il avait compris. Un homme heureux n’est pas toujours un homme qui a un travail, une famille et une maison. Un homme heureux n’est pas même celui qui possède les plus grandes richesses du monde. <br>
Alexis est perdu dans ses pensées. Il se remémore dans l’avion cette femme enceinte lui faisant l’éloge de la vie et de la famille. Il pense à ce chauffeur de taxi qui l’avait conduit à la sortie de l’aéroport et qui avait décidé d’arrêter de travailler pour être aux côtés de sa femme gravement malade. Il songe à toutes ces personnes qu’il a rencontrées sur son chemin, croisées dans la rue, toutes ces personnes qui faisaient face aux coups du destin et qui pourtant avaient un point commun : elles semblaient heureuses. Heureuses dans la misère, parfois heureuses dans la douleur, elles étaient heureuses, parce qu’elles étaient dévouées à se battre pour les causes dans lesquelles elles croyaient. <br>
Soudain, le téléphone sonne. Alexis décroche. A sa grande surprise, ce n’est pas le national qui l’appelle, mais le négociateur. Il est vrai qu’il ne l’avait pas encore prévenu de sa décision de faire la réunion sans lui, tout était allé tellement vite. Mais le négociateur ne lui laisse pas le temps de parler : il est dans l’urgence. Les intempéries ont inondé sa maison à un point tel qu’il doit la quitter avec sa femme et ses enfants pour être pris en charge dans un hôtel, comme nombre de ses voisins. Il ne pourra pas faire la réunion dans quelques jours, pas même dans une semaine. Conscient qu’un deuxième voyage en ces périodes de fêtes est inenvisageable, et convaincu que la ville de Dubaï ne pourrait accepter un mois de retard dans l’inauguration d’un tel projet, il était finalement prêt à accepter le projet sur la seule base des rapports écrits qui lui avaient été envoyés. Alexis a à peine le temps de réagir que le négociateur raccroche. <br>
Ni Alexis ni ses collaborateurs n’eurent le temps de réaliser la tournure que prenaient les événements que le contrat était ficelé. Eux qui quelques minutes auparavant doutaient encore de la possibilité d’un tel contrat peinèrent à expliquer au supérieur d’Alexis Roselier qu’une telle situation ait pu se produire. Et lorsqu’Alexis demanda à son chef pourquoi ce voyage était censé être nécessaire si le contrat pouvait être signé sans réunion, il lui répondit : <br>
« Dans le domaine de l’immobilier, on ne peut s’engager sans connaître la personne avec qui on travaille. Votre volonté d’aller jusqu’à sa rencontre malgré les intempéries, les fêtes de Noël et les embouteillages, même si vous avez changé de décision in extremis, l’ont convaincu que vous étiez cet homme sérieux, ambitieux et impliqué avec lequel on mène les plus grands projets » <br>
<br>
Ainsi, son ambition l’avait mené jusqu’au bout de ses rêves, et ses choix l’amèneraient bientôt à la maison pour fêter Noël à temps. <br>
Derrière le hublot, Alexis Roselier surplombe le monde, survole la terre, surprend le soleil derrière les nuages. Du ciel, Alexis Roselier contemple cet océan de coton, conquiert son immensité, consacre la beauté de la nature et concrétise son rêve à lui : celui de rejoindre sa famille et de tenir sa promesse. Car oui, il a changé de rêves. Peut être qu’au fond est-ce cela un rêve : un désir temporairement inassouvi, un caprice d’enfant, un trop plein d’imagination. Ou peut-être est-ce la volonté de vivre une autre vie, de toucher un autre bonheur du doigt. Il ne sait pas. Ce qu’il sait en revanche, c’est qu’il a trouvé son bonheur à lui, celui qu’il veut enlacer et ne plus jamais quitter : sa famille.   <br>
Du ciel, derrière son hublot, Alexis Roselier ne se sent plus prisonnier. <br>
Du ciel, derrière son hublot, on pourrait lire dans les yeux d’Alexis Roselier le bonheur. Car il sait, il en est certain maintenant, que dans quelques heures, il atterrira et qu’il sera là, pour tenir sa promesse. Il préparera la dinde, il emballera les cadeaux, il embrassera sa femme et plus tard, sa femme et lui contempleront, ensemble, cet album de photos qui immortalisera l’évènement. <br>
 <br>
Histoires co-écrites par Coraline Staub-Milants et Viviana Hirsch. Si l’histoire vous a plu ou si vous avez des retours à faire, n’hésitez pas à le faire à l’adresse mail suivante : coraline.sm99@gmail.com. Joyeux Noël à vous !
        </p>
<?php 
    }
elseif ($choix1 == 1 and $choix2 == 1 and $choix3 == 1)
    {
?>
        <h2>Deux photos</h2>
        <p>
Un ciel bleu, un soleil resplendissant. Le paysage est pauvre à regarder, mais Alexis Roselier ne décroche pas ses yeux des formes qui se déforment à toute allure. Assis dans le taxi qui devrait l’amener à sa réunion tant attendue, il ne rêve plus que d’une chose : arriver à temps pour la réunion. Il n’a jamais cru en Dieu, pas même en toute autre forme de supériorité de la nature. Mais aujourd’hui, il croise les doigts et il se murmure un vœu qui pourrait ressembler à une prière. Dans son bureau à Paris, il n’avait jamais autant fait face à l’imprévu que ces derniers jours. Éreinté de ces retournements de situations presque quotidiens, il ne songe qu’au confort d’être chez soi, à la maison. Un confort qu’il n’avait jamais autant envié, auquel il avait à peine songé. Certes il aimait sa femme, il chérissait ses enfants, il était le fier maître de cette grande maison qu’il avait pu acheter après tant d’années de dur labeur. Mais il n’avait jamais émis la seule hypothèse qu’un jour, ce confort puisse s’effondrer, que ces simples bonheurs de la vie puissent lui manquer. Tout ce qui lui avait toujours manqué jusque là, c’était la reconnaissance et l’admiration de ses confrères. Lui qui avait tant travaillé, toutes ces heures passées au bureau, tous ces week-ends passés à penser à ses projets en cours, rien n’avait jamais été récompensé à sa juste valeur. Il avait soif de prestige, il avait besoin d’argent.  L’argent offrait les portes à tout : avec l’argent il pouvait bien sur nourrir et loger sa famille, mais il pouvait aussi lui offrir des cadeaux, des voyages. Comment aurait-il pu se passer de cet argent, cet argent qui réalisa le rêve de sa femme d’aller aux Etats-Unis et l’ambition de sa fille d’intégrer une des meilleures écoles de commerce de France ? Pourtant, Alexis Roselier avait oublié une constante à son équation, une hypothèse à son calcul : la possibilité que le bonheur puisse survivre, même sans ces rêves accomplis et ces cadeaux désirés. Épuisé, il s’endormit. <br>
 <br>
Un ciel bleu, un soleil resplendissant. Mais le paysage n’est plus pauvre. Partout, des gratte-ciels viennent rappeler à la nature que l’homme s’élève toujours plus et qu’il ne perd pas espoir de pouvoir rivaliser avec elle un jour. Dubaï, la ville de rêve, la capitale de la démesure et de l’inimaginable. Et fidèle à sa réputation, l’inimaginable se produisit. Après des heures d’incertitudes et de désespoir, des jours de dilemmes et des nuits de cauchemars, après un voyage plus éprouvant que toute sa vie entière, Alexis Roselier était devenu le chef de projet accompli que tout jeune consultant immobilier rêvait d’être. Il avait su guider à merveille la réunion, et su convaincre plus que jamais le négociateur de l’impossibilité de refuser un tel contrat. <br>
Son ambition l’avait mené jusqu’au bout de ses rêves, et ses choix l’amèneraient bientôt à la maison pour fêter Noël à temps. <br>
Derrière le hublot, Alexis Roselier surplombe le monde, survole la terre, surprend le soleil derrière les nuages. Du ciel, Alexis Roselier contemple cet océan de coton, conquiert son immensité, consacre la beauté de la nature et concrétise son rêve à lui : celui de rejoindre sa famille et de tenir sa promesse. Car oui, il a changé de rêves. Peut être qu’au fond est-ce cela un rêve : un désir temporairement inassouvi, un caprice d’enfant, un trop plein d’imagination. Ou peut-être est-ce la volonté de vivre une autre vie, de toucher un autre bonheur du doigt. Il ne sait pas. Ce qu’il sait en revanche, c’est qu’il a trouvé son bonheur à lui, celui qu’il veut enlacer et ne plus jamais quitter : sa famille.  <br>
Il se souvient de ce chauffeur de taxi durant son périple lui disant « l’important, ce n’est ni le départ ni l’arrivée, c’est le voyage ». Et il avait raison. Cette femme enceinte qui lui avait fait l’éloge de la vie au début de son voyage, cette famille qui gérait l’hôtel dans lequel il avait logé et qui s’était appauvrie de tant de générosité à l’égard de ses clients, ces enfants orphelins dans le parc au pied de son hôtel jouant avec rien, s’amusant de peu, tous avaient un point commun : ils étaient heureux, parce qu’ils étaient dévoués à se battre pour les causes en lesquelles ils croyaient. Et puis à Dubaï, il avait eu la révélation : l’argent peut offrir de grandes choses, de belles choses, des choses exceptionnelles. Mais l’argent ne comble jamais le manque : car sinon, pourquoi Dubaï voit chaque jour se construire des gratte-ciels toujours plus grands et des projets toujours plus ambitieux ?<br>
Du ciel, derrière son hublot, Alexis Roselier ne se sent plus prisonnier.<br>
Du ciel, derrière son hublot, on pourrait lire dans les yeux d’Alexis Roselier le bonheur. Car il sait, il en est certain maintenant, que dans quelques minutes il atterrira, et que dans quelques heures il sera chez lui. Il préparera la dinde, il emballera les cadeaux, il embrassera sa femme et plus tard, sa femme et lui contempleront, ensemble, cet album de photos qui immortalisera l’événement.<br>
<br>
Histoires co-écrites par Coraline Staub-Milants et Viviana Hirsch. Si l’histoire vous a plu ou si vous avez des retours à faire, n’hésitez pas à le faire à l’adresse mail suivante : coraline.sm99@gmail.com. Joyeux Noël à vous !<br>
        </p>
<?php
    }
?>
        <h2>Deux photos du village</h2>
        <img src="images/village6.jpg">
        <img src="images/village7.jpg">
        <h2>Solution a l'enigme</h2>
        <img src="images/square.png" id="square">
    </body>
</html>
