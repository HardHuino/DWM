<!DOCTYPE html>
<html>
    <head>
        <title>Accès aux mesures</title>
    </head>
    <body>
        <?php
        if (isset($_POST["login"]) && isset($_POST["motdepasse"])) {
            $login = $_POST['login'];
            $motdepasse = $_POST['motdepasse'];
        }
            if (($login=="admin") && ($motdepasse=="1234")){
            header("Location: affichemes.php");
        }
        else {
            echo "Accès refusé";
        }
        ?>
    </body>
</html>

<!-- 
Q9 : Balises utilisées pour identifier le code PHP : $login et $motdepasse 
Q10 : Si on remplace && par || c'est comme remplacer AND par OR 
    donc il nous suffirait de mettre admin en login pour se connecter,
    le script renverait donc bien quelque chose mais pas ce que l'on attend
Q17 : changement en méthode POST (+ajout de isset())
-->