



<html> 
    <head>
        <title> Exemple Dynamique </title> 
    </head>
    <body>

    La date d'aujourd'hui est le : <?php
    // Affichage de la date
    echo date("d/m/Y "); 
    echo "<br>"
    ?>
    

    </body> 

    <?php 
            function afficher( $texte, $saut = 1 ) { echo $texte ;
        for( $i = 0 ; $i < $saut ; $i++) echo "\n";
        }
    

         afficher("Hello <br>", 0); 

        afficher(" World ! <br>");  ?>



</html>