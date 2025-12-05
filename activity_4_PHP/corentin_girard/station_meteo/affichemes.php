<!DOCTYPE html>
<html>
    <head>
        <title>Mesures Station M&eacutet&eacuteo</title>
        <style>
            .barre-container {
                width: 100%; /* container pour la barre */
                max-width: 400px; /* largeur maximale */
                height: 30px;
                background-color: #eee; /* fond gris clair */
                border: 1px solid #000;
                margin: 20px auto;
                display: flex;
            }
            .barre {
                height: 100%;
                width: 0;
                background: linear-gradient(to right, blue, red);
            }
        </style>
    </head>
    <body> 
        <?php
        // ouverture en lecture seule du fichier mesures.txt
        $Mesures = fopen("mesures.txt","r");
        ?>
        <div align="center">
            <h1>Mesures</h1>
            <p>Temp&eacuterature =
            <?php
            $temp = fgets($Mesures); //Lecture première ligne du fichier
            echo "$temp&degC";
            // Conversion en nombre pour traitement
            $temperature = floatval($temp);

            // Plage de température (modifiable)
            $minTemp = 0;
            $maxTemp = 40;

            // Calcul du pourcentage basé sur la température
            $percent = (($temperature - $minTemp) / ($maxTemp - $minTemp)) * 100;
            $percent = max(0, min(100, $percent)); // limiter entre 0 et 100

            // Définir la couleur du dégradé en fonction de la température
            // On peut faire un dégradé linéaire entre bleu et rouge
            // La propriété CSS linear-gradient peut être dynamique
            // mais pour simplifier, on peut utiliser une couleur intermédiaire
            // ou une couleur interpolée
            $red = intval(255 * ($percent / 100));
            $blue = intval(255 * (1 - ($percent / 100)));
            $couleur = "rgb($red, 0, $blue)";

            // Affichage de la barre avec la largeur correspondant à la température
            echo "<div class='barre-container'>";
            echo "<div class='barre' style='width: $percent%; background: linear-gradient(to right, blue, $couleur);'></div>";
            echo "</div>";
            ?>
            </p>
            <p>Luminosit&eacute =
            <?php
            $lum = fgets($Mesures); //Lecture deuxieme ligne du fichier
            echo "$lum%";
            ?>
            </p>
            <?php
            // $time = fgets($Mesures); //Lecture troisième ligne du fichier

            if ($lum>15) {
                echo "<img src='images/jour.png'/ style='width:50%;height:auto;'>";
            } else {
                echo "<img src='images/nuit.png'/ style='width:50%;height:auto;'>";
            }
            ?>
        </div>
        <?php
        // Fermeture du fichier contenant les mesures
        fclose($Mesures);
        ?>
    </body>
</html>