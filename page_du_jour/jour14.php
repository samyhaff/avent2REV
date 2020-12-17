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
            <p>Aujourd'hui est un jour spécial car aujourd’hui, c'est vous le héros! Si vous avez toujours été frustré par les choix du personnage principal, si vous avez toujours rêvé de savoir comment l'histoire se serait déroulée avec vos propres choix, alors cette histoire est faâte pour vous!</p>
            <p>
                L’homme est fait de rêves, disent les grands sages. </br>
C’est dans ses rêves que l’homme trouve la liberté, ajoutent les philosophes. </br>
Pourquoi l’homme rêverait-il sinon de voler ? Du ciel, Alexis Roselier surplombe le monde, survole la terre, surprend le soleil derrière les nuages. Du ciel, Alexis Roselier contemple cet océan de coton, conquiert son immensité, consacre la beauté de la nature et concrétise le rêve de générations, de dynasties et d’époques toute entières de pouvoir être là, seul au-dessus de tous, seul au-dessus de tout. </br>
Pourtant, du ciel, derrière son hublot, Alexis Roselier se sent prisonnier. Prisonnier d’une vie si simple et pourtant si compliquée. Son chemin a toujours été tracé, il n’avait qu’à le suivre. Pourquoi aurait-il fait autrement ? Né d’une mère experte comptable et d’un père consultant en finance, il avait gravi un à un les échelons de l’Acompta, la plus influente société de conseil en investissement immobilier dans le monde. Hier consultant, aujourd’hui chef de projet, il comptait bien faire de son premier projet celui qui lui vaudrait une grande réputation dans les plus hautes sphères. Et naturellement, Dubaï était apparu en premier sur la liste. </br>
Seulement voilà, la vie est rarement un long fleuve tranquille mais souvent une rivière sinueuse. Parfois, un choix peut en condamner un autre, une décision évidente ne peut pas faire l’unanimité, et les rêves de l’un peuvent être les terreurs de l’autre. Cette opportunité de consécration de toute une carrière n’était que le choix de cet homme ambitieux, travailleur et rigoureux, impliqué et méthodique qui avait toujours su guider sa vie selon la même direction que son travail. Sa femme pouvait bien l’implorer de sa présence auprès de sa famille, le supplier d’être un père avant d’être un chef, il n’avait jamais su se convaincre qu’une heure de temps libre valait mieux qu’un 0 de plus sur une feuille de salaire. A l’apothéose de sa carrière, sa vie conjugale n’avait jamais été aussi menacée. Alors il l’avait promis : il sera là pour Noël, il sera là pour les fêtes de fin d’année. Il préparera la dinde, il emballera les cadeaux, il embrassera sa femme et plus tard, sa femme et lui contempleront, ensemble, cet album de photos qui immortalisera l’événement. </br>
Il fallait juste que tout se déroule bien : ce soir, il atterrirait à l’Aéroport International de Dubaï, les 2 jours suivants il réunirait l’équipe, rencontrerait le négociateur et le national prêt à accompagner l’entreprise dans l’investissement, et dans 3 jours il décollerait à nouveau de Dubaï pour rentrer chez lui et arriver ce fameux 24 décembre à 10h07 tout juste prêt à faire les préparatifs pour Noël. Heureusement pour lui, à part de faibles turbulences, aucun ennui ne semble être suffisamment de taille pour déjouer un programme si habilement ficelé. </br> 
Pourtant, si de faibles turbulences ne l’inquiétaient aucunement, il avait bien sous-estimé le pouvoir que possède la météo de bousculer les esprits. Car ces innocentes turbulences n’étaient que la maigre introduction à un déchaînement des vents. Un déchaînement tel qu’à 18h21 heure locale, la sentence est irrévocable : </br>
« Mesdames et messieurs, ici votre commandant de bord. En raison d’une météo capricieuse et indépendante de notre volonté, pour notre sécurité à tous, nous allons être contraints de nous poser. L’aéroport International du roi Khaled ayant l’amabilité de nous accueillir pour une escale, nous arrivons dans 5 minutes. Vous aurez le choix de prendre le prochain avion dès que le temps nous le permettra ou de continuer votre périple par vos propres moyens. » </br>
Un brouhaha ambiant s’empare de tout l’avion. Au milieu de ce tohu-bohu, Alexis Roselier n’en mène pas large. Réunissant toutes ses forces pour faire abstraction de son entourage, il liste toutes les solutions qui lui viennent à l’esprit : </br>
<b>Que faire ? A vous de choisir ! Attention, votre choix est déterminant pour la suite de l’histoire…</b>
            </p>
            <form action="histoire1.php" method="post" id="choix">
                <div>
                    <input type="radio" name="choix_answer" id="A" value="A" />
                    <label for="A"><b>Option 1: </b>Soit il attend le prochain avion, mais il ne sait pas quand il décolle et la météo ne laisse aucun espoir de décoller dans les prochaines heures : il doit décaler sa réunion d’un jour au moins. Il n’arrivera pas à temps pour Noël mais il sera là pour le Nouvel An, sa femme comprendra non ? Au fond, la situation est indépendante de sa volonté et elle sait combien il est attaché à son travail…Au moins, il est sûr de faire sa réunion.</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="B" value="B" />
                    <label for="B"><b>Option 2: </b>Soit il prend immédiatement un taxi : d’après le commandant de bord, il y a encore 8h de route en voiture. Le voyage sera long, éprouvant, et incertain en raison du temps et des embouteillages, mais avec de la chance il arrivera à l’heure à la réunion et à Noël. Cependant, s’il arrive en retard, c’est fini pour sa réputation…Mais au fond, la réunion est dans 10h30, il devrait y avoir une marge…</label>
                </div>                            
                <div>
                    <input type="radio" name="choix_answer" id="C" value="C" />
                <label for="C"><b> Option 3: </b>Soit il tente de négocier de faire la réunion à mi-chemin. Au moins, il est sûr d’arriver à temps à la réunion et à Noël, il n’y aura pas le moindre doute. Mais comment justifier à son entreprise un tel choix, lui qui avait promis qu’il ne ferait rien passer avant son travail ? S’il choisit cette option, c’est lui qui est garant du coût supplémentaire de déplacement de son équipe, du négociateur et du national…, et ce coût, il ne pourra que le compenser avec les économies qu’il avait fait pour offrir un voyage à sa bien-aimée et retaper la maison pour se faire pardonner.</label>
                </div>                            
                <input type="submit" value="Terminer" class="submitbtn" />
            </form>
        </div>
    </body>
