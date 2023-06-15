// Créer un élement pour le burger menu
let burgerIcon = document.createElement("button");
// Créer une id afin de cibler plus facilement le boutton
burgerIcon.id = "burgerMenu";

// Selectionner l'id de la nav dans le document HTML
let nav = document.querySelector("nav");
// selectionner l'id du ul dans le document HTML
let list = document.querySelector("ul")
window.addEventListener("resize", ()=>{
    // si la largeur de la fenetre est inférieur à 1025px alors
    if (window.innerWidth < 1025) {
        // Verifier si l'icone du burger n'est pas déjà présente dans la barre de navigation
        if (!nav.contains(burgerIcon)) {
            // Ajouter l'icône du burger à la barre de navigation
            nav.appendChild(burgerIcon);
        }
    } 
    // Si on a une largeur au dessus de 1025px on affiche plus le burger menu
    else{
        burgerIcon.remove()
    }

 // Attendre que la fenêtre soit entièrement chargée
window.addEventListener("load", () => {
    // Vérifier si la largeur de la fenêtre est inférieure à 1025 pixels
    if (window.innerWidth < 1025 && !nav.contains(burgerIcon)) {
        // Si oui, et si l'icône du burger n'est pas déjà présente dans la navigation (nav)
        // Ajouter l'icône du burger à la navigation (nav)
        nav.appendChild(burgerIcon);
    }
    else {
        // Sinon, si la largeur de la fenêtre est supérieure ou égale à 1025 pixels
        // ou si l'icône du burger est déjà présente dans la navigation (nav)
        // Supprimer l'icône du burger
        burgerIcon.remove();
    }
});

// Ajouter un écouteur d'événement pour le clic sur l'icône du burger
burgerIcon.addEventListener("click", () => {
    // Basculer la classe "open" de la liste (list)
    list.classList.toggle("open");
    // Basculer la classe "active" de l'icône du burger (burgerIcon)
    burgerIcon.classList.toggle("active");
});

})

// Sous menu 

let sousMenu = document.querySelector('.book');

// Cacher le sous-menu au chargement de la page
sousMenu.classList.add('cache');

// Fonction pour afficher ou masquer le sous-menu
function toggleSousMenu() {
  sousMenu.classList.toggle('cache');
}

// Ajouter un événement de clic à l'élément "Catégories" pour afficher ou masquer le sous-menu
var categories = document.querySelector('a[href="#"]');
categories.addEventListener('click', toggleSousMenu);