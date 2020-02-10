<?php

$bdd = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', 'root', '');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commentaires</title>
</head>
<body>
<p>
<?php
    $response = $bdd->query('SELECT * FROM avis');
    $donnees = $response->fetch();
    while ($donnees)
    {
 ?>       
    l'utilisateur numéro <?= $donnees['id_user'] ?> a commenté <?= $donnees["commentaire"] ?> le <?= $donnees["date"] ?> cool. 
    </p>
<?php
    }
    $response->closeCursor();
?>   

</body>
</html>