<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="InterLignes Soissons magasin de librairie et loisirs.">
    <link rel="stylesheet" href="./webfiles/css/style.css">

    <title>InterLignes</title>
</head>

<body>
    <header>
        <nav>
            <p>Librairie InterLignes</p>
            <form id="rechercher"  action="recherche.php" method="GET">
                <input type="text" placeholder="Rechercher...">
                <button type="submit">
                  <img src="./src/loupe.png" alt="image loupe">
                </button>
          
              </form>
            <ul>
                <li><a href="./index.html">Acceuil</a></li>
                <li><a href="./connexion.html">Connexion</a></li>
                <li><a href="./panier.html">Panier</a></li>
            </ul>
        </nav>

    </header>
    <?php
    require_once('./index.php');
    require_once('./footer.php');
    ?>