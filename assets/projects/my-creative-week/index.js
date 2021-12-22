/*
let allSlides, firstImg, lastImg, i, currentImg; // On déclare les variables

function changeImg(){ // On crée la fonction qui permet de changer l'image affichée
    currentImg = document.getElementById(i); // On définit currentImg en sélectionnant l'id correspondant
    currentImg.classList.add("active"); // Puis on ajoute à cet élément la class .active
}

function next(){ // On crée la fonction next, qui permet d'afficher l'image suivante
    currentImg.classList.remove("active"); // On retire la class .active à l'image actuelle

    if(i != lastImg){ // Si l'image actuelle n'est PAS la dernière,
        i++; // alors on incrémente i
        changeImg(); // Puis on change l'image affichée
    }
    else{ // Sinon (si l'image actuelle est la dernière),
        i = firstImg; // alors on donne à un i la valeur de la première image
        changeImg(); // Puis on change l'image affichée
    }
}

document.addEventListener("DOMContentLoaded", function(){

    allSlides = document.querySelectorAll("#first-section img"); // On met dans une variable toutes les slides du carrousel
    console.log(allSlides);
    lastImg = allSlides.length - 1; // On met dans une variable la valeur de la dernière image
    firstImg = 0; // On met dans une variable la valeur de la première image

    i = firstImg; // On initialise i à firstImg afin que la première image soit affichée au lancement de la page
    currentImg = document.getElementById(i); // Puis on définit currentImg en sélectionnant l'id correspondant

    setInterval(next, 2000); // On répète next toutes les 2s pour faire un diaporama
})
*/