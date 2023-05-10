 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="InterLignes Soissons magasin de librairie et loisirs.">
     <link rel="stylesheet" href="/webfiles/styles/css/style.css">
     <link rel="stylesheet" href="/src/fontawesome/css/all.min.css">

     <title>InterLignes</title>
 </head>

 <body>
     <header>

         <nav>
             <p>Librairie InterLignes</p>
             <form id="rechercher" action="recherche.php" method="GET">
                 <input type="text" placeholder="Rechercher...">
                 <button type="submit">

                     <i class="fa-solid fa-magnifying-glass fa-beat"></i>
                 </button>

             </form>
             <ul>

                 <li><a href="./index.html">Acceuil</a></li>
                 <li><a href="./connexion.html">Connexion</a></li>
                 <li><a href="./panier.html">Panier</a></li>
             </ul>
         </nav>

     </header>
     <main>
         <div class="sousmenu">
             <nav>
                 <ul>
                     <li><a href="#" class="book">Nos livres</a></li>
                     <li><a href="#" class="music">Musique et vidéo</a></li>
                     <li><a href="#" class="game">Jeux éducatifs</a></li>
                 </ul>
             </nav>
         </div>
         <div class="structure">
             <div class="texte">
                 <h1>Bienvenue dans votre librairie Inter Lignes à Soissons</h1>
                 <div class="image">
                     <div class="ext">
                         <img src="./src/facade.jpg" alt="Image de la facade de la boutique Inter Lignes">
                     </div>
                     <div class="horaire">
                         <div class="info">
                             <p>Nos horaires :</p>
                         </div>
                         <div class="jour">
                             <p>Du mardi au Samedi :</p>
                         </div>
                         <div class="heure">
                             <p>10h00-12h00-14h00-19h00</p>
                         </div>
                     </div>

                 </div>

                 <div class="biographie">
                     <div class="intro">
                         <h2>Présentation :</h2>
                     </div>
                     <div class="histoire">
                         <p>Chez votre librairie INTER LIGNES découvrez un choix impressionnant de livres en tous genres
                             pour tous les âges
                             : littérature, pleïades, guides touristiques, livres pratiques, bandes dessinées, manga,
                             livres
                             de
                             poches et bien d'autres encore...
                             La librairie INTER LIGNES c'est aussi des musiques et vidéos ainsi que des jeux éducatifs.
                             Accueil, service
                             et
                             sourire vous attendent chez INTER LIGNES votre librairie à Soissons au <a href="https://www.google.fr/maps/place/LIBRAIRIE+INTER+LIGNES/@49.3810999,3.3245866,19z/data=!4m6!3m5!1s0x47e85eb9d571d7df:0x25e6f7a7829986a3!8m2!3d49.3812901!4d3.3249552!16s%2Fg%2F1w6_n4dr">6
                                 Rue Jaulzy</a> près de la
                             Cathédrale. Parking à proximité : Cathédrale, Place Fernand Marquigny.</p>
                     </div>
                 </div>
             </div>
             <div class="select">
                 <h2>Nos meilleurs sélections :</h2>
             </div>
             <div class="selectImage">
                 <img class="kiem" src="./src/kieu.jpg" alt="Image du livre Kiem Dieu Hoang">
                 <img class="savoir" src="./src/Toutsavoir.jpg" alt="Image du livre Tout savoir sur la copropriété">
                 <img class="conte" src="./src/contedefées.jpg" alt="Image du livre Conte de fées de Stephen King">
                 <img class="mal" src="./src/Etlemalviendra.jpg" alt="Image du livre et le mal viendra">
                 <img class="mortel" src="./src/MortelDejavu.jpg" alt="Image du livre Mortel déjà vu">
                 <img class="royaume" src="./src/royaumedesenfoires.png" alt="Image du livre le royaume des enfoires">
             </div>
             <div class="nomLivre">
                 <p class="kiemHoang">Kiem Dieu Hoang</p>
                 <p class="copro">Tout savoir...</p>
                 <p class="fees">Conte de fées</p>
                 <p class="viendra">Et le mal viendra</p>
                 <p class="dejaVu">Mortel déjà vu</p>
                 <p class="royaumeDes">Le royaume des</p>
             </div>
             <div class="price">
                 <div class="p1">
                     <img src="./src/paniers.png" alt="Image du logo d'un panier">
                     <p>19.00€</p>
                 </div>
                 <div class="p2">
                     <img src="./src/paniers.png" alt="Image du logo d'un panier">
                     <p>21.90€</p>
                 </div>
                 <div class="p3">
                     <img src="./src/paniers.png" alt="Image du logo d'un panier">
                     <p>24.90€</p>
                 </div>
                 <div class="p4">
                     <img src="./src/paniers.png" alt="Image du logo d'un panier">
                     <p>9.50€</p>
                 </div>
                 <div class="p5">
                     <img src="./src/paniers.png" alt="Image du logo d'un panier">
                     <p>9.99€</p>
                 </div>
                 <div class="p6">
                     <img src="./src/paniers.png" alt="Image du logo d'un panier">
                     <p>23.50€</p>
                 </div>
             </div>
             <div class="actu">
                 <h2>Actualités :</h2>
             </div>
             <div class="liste">
                 <div class="actuImage">
                     <img class="pagny" src="./src/Pagny.jpg" alt="Image du livre de Florent Pagny">
                     <img class="hoang" src="./src/kieu.jpg" alt="Image du livre Kiem Dieu Hoang">
                     <img class="engrenage" src="./src/L'engrenage.jpg" alt="Image du livre L'engrenage">
                     <img class="franck" src="./src/Lagaf.jpg" alt="Image du livre je m'appelais Franck">
                     <img class="tsunami" src="./src/tsunami.jpg" alt="Image du livre Tsunami">
                     <img class="maison" src="./src/maisondoree.jpg" alt="Image du livre la maison dorée">
                 </div>
                 <div class="nouveau">
                     <p class="florent">Pagny vu par Florent</p>
                     <p class="diem">Kieu Diem Hoang</p>
                     <p class="engre">L'engrenage</p>
                     <p class="appelle">Je m'appelais Franck</p>
                     <p class="tsu">Tsunami</p>
                     <p class="doree">La maison dorée</p>
                 </div>
                 <div class="secondPrice">
                     <div class="i1">
                         <img src="./src/paniers.png" alt="Image du logo d'un panier">
                         <p>24.50€</p>
                     </div>
                     <div class="i2">
                         <img src="./src/paniers.png" alt="Image du logo d'un panier">
                         <p>19.00€</p>
                     </div>
                     <div class="i3">
                         <img src="./src/paniers.png" alt="Image du logo d'un panier">
                         <p>19.90€</p>
                     </div>
                     <div class="i4">
                         <img src="./src/paniers.png" alt="Image du logo d'un panier">
                         <p>21.90€</p>
                     </div>
                     <div class="i5">
                         <img src="./src/paniers.png" alt="Image du logo d'un panier">
                         <p>21.90€</p>
                     </div>
                     <div class="i6">
                         <img src="./src/paniers.png" alt="Image du logo d'un panier">
                         <p>24.00€</p>
                     </div>
                 </div>
             </div>
         </div>
     </main>
     <footer>
         <div class="enfantFooter">
             <div>
                 <h3 class="interL">Inter Lignes</h3>
                 <p><a href="#">Mentions légales</a></p>
                 <p><a href="#">Conditions générales</a></p>
                 <p><a href="#">Données personelles</a></p>
                 <p><a href="#">Gérer mes cookies</a></p>
             </div>
             <div class="reseau">
                 <h3>Nos réseaux sociaux :</h3>
                 <div class="fb">
                     <img src="./src/facebook.png" alt="Image du logo Facebook">
                     <p class="comptefb"><a href="https://www.facebook.com/librairie.interlignes.soissons/?locale=fr_FR">Librairie Inter
                             Lignes Soissons</a></p>
                 </div>

                 <div class="insta">
                     <img src="./src/instagram.png" alt="Image du logo Instagram">
                     <p class="compte"><a href="https://www.instagram.com/inter.lignes/?hl=fr">inter.lignes</a></p>
                 </div>
             </div>
             <div class="contact">
                 <h3>Nous contacter:</h3>
                 <div class="phone">
                     <img src="./src/telephone-call.png" alt="Image du logo du téléphone">
                     <p class="num"><a href="tel:+323762271">03-23-76-22-71</a></p>
                 </div>
                 <div class="gmail">
                     <img src="./src/e-mail.png" alt="Image du logo Gmail">
                     <p class="inter"><a href="mailto:interlignes@bbox.fr">interlignes@bbox.fr</a></p>
                 </div>
             </div>
             <div class="news">
                 <h3 class="letter">Newsletter :</h3>
                 <div>
                     <input type="email" name="mail" placeholder="Saisissez votre adresse mail...">
                     <div>
                         <button type="submit">Envoyer</button>
                     </div>
                 </div>
             </div>
         </div>
     </footer>

 </body>

 </html>