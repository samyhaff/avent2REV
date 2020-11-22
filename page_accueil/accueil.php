<?php 
    $date = 1;
    $positions = array(array(200, 328), array(200, 328),
        array(200, 328), array(200, 328), array(200, 328),
        array(200, 328), array(200, 328), array(200, 328),
        array(200, 328), array(200, 328), array(200, 328), 
        array(200, 328), array(200, 328), array(200, 328), 
        array(200, 328), array(200, 328), array(200, 328), 
        array(200, 328), array(200, 328), array(200, 328), 
        array(200, 328), array(200, 328), array(200, 328), 
        array(200, 328));
    $type_calendrier = '//google.com';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Calendrier de l'Avent</title>
    </head>

    <body>
        <figure id="fond">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1200 808" >
                <image width="1200", height="800" xlink:href="images/fond.jpg">
                </image>
                <a xlink:href=<?php echo $type_calendrier;?>>
                <image x=<?php echo $positions[$date - 1][0];?> y=<?php echo $positions[$date - 1][1];?> width="100" xlink:href="images/mongolfiere_rouge.png">
                    </image>
                </a>
            </svg>
        </figure>
    </body>
</html>
