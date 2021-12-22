let spanEuros, spanEntier, spanVirgule, euros = 0, entier = 0, virgule = 0;

function increaseEuros(){
    if(euros < 217){
        euros++;
        spanEuros.innerHTML = euros;
    }
    if(euros == 217){
        clearInterval(eurosInterval);
        setTimeout(timerPercentage, 300);
    }
}

function increasePercentage(){
    if(entier < 8 || virgule < 68){
        virgule = virgule + 4;
        spanVirgule.innerHTML = virgule;

        if(virgule >= 100){
            virgule = 0;
            spanVirgule.innerHTML = virgule;
            entier++;
            spanEntier.innerHTML = entier;
        }
    }
    else{
        clearInterval(percentageInterval);
    }
}

function timerEuros(){
    eurosInterval = setInterval(increaseEuros, 4);
}

function timerPercentage(){
    percentageInterval = setInterval(increasePercentage, 1);
}

document.addEventListener("DOMContentLoaded", function(){
    spanEuros = document.getElementById("euros");

    spanEntier = document.getElementById("entier");
    spanVirgule = document.getElementById("virgule");

    setTimeout(timerEuros, 600);
})