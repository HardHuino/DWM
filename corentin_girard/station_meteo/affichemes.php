<!DOCTYPE html>
<html>
    <head>
        <title>Mesures Station Météo</title>
    </head>
    <body> 
        <?php
        // ouverture en lecture seule du fichier mesures.txt
        $Mesures = fopen("mesures.txt","r");
        ?>
        <div align="center">
            <h1>Mesures</h1>
            <p>Température =
            <?php
            $temp = fgets($Mesures); //Lecture première ligne du fichier
            echo "$temp";
            ?>
            °C</p>
            <p>Luminosité =
            <?php
            $lum = fgets($Mesures); //Lecture deuxieme ligne du fichier
            echo "$lum";
            ?>
            %</p>
            <?php
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