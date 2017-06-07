<?php
if (isset($_FILES['uploadFile'])){
    //var_dump($_FILES['uploadFile']['tmp_name']);
try {
    $bdd = new PDO('mysql:host=localhost;dbname=newsletter;charset=utf8', 'root', '');
    //$sql = "INSERT INTO mail (email) VALUES";
    $donnee = "";
    $cpt=0;
    $handle = fopen($_FILES['uploadFile']['tmp_name'], 'r');
    /* Si on a réussi à ouvrir le fichier */
    if ($handle) {
        /* Tant que l'on est pas à la fin du fichier */
        while (!feof($handle)) {
            /* On lit la ligne courante */
            $buffer = fgets($handle);
            /* On l'affiche */
            //$donnee .= "('".$buffer."'),";
            $sql = "INSERT INTO mail (email) VALUES" . "('" . $buffer . "')";
            //echo $buffer;
            $requestRep = $bdd->exec($sql);
            if (!$requestRep) {
                echo "requête non exécuté<br>";
            } else {
                $cpt++;
            }
        }

        /* On ferme le fichier */
        fclose($handle);
    }
    //$donnee = substr($donnee, 0, -1);
    //$sql .= " ".$donnee;


    //var_dump($requestRep);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
        
}