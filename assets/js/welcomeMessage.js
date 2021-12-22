let welcomeMessageTimer;

window.addEventListener('load', function(){
    setTimeout(function(){
        startAnimation();
    }, 1000); // ? Correspond à loader.js
});

function startAnimation(){
    welcomeMessageTimer = setTimeout(showFirstElement, 500);
}
function showFirstElement(){
    document.querySelector('.welcome-message-container span:nth-child(1)').classList.add('active');

    welcomeMessageTimer = setTimeout(showSecondElement, 1000);
}
function showSecondElement(){
    document.querySelector('.welcome-message-container span:nth-child(2)').classList.add('active');

    welcomeMessageTimer = setTimeout(showThirdElement, 1500);
}
function showThirdElement(){
    document.querySelector('.welcome-message-container span:nth-child(3)').classList.add('active');

    if(window.pageYOffset == 0){
        showBar(); // ? Fonction de nav.js
    }
}

document.addEventListener('scroll', function(){
    clearTimeout(welcomeMessageTimer);
    document.querySelector('.welcome-message-container span:nth-child(1)').classList.add('active');
    document.querySelector('.welcome-message-container span:nth-child(2)').classList.add('active');
    document.querySelector('.welcome-message-container span:nth-child(3)').classList.add('active');

    if(window.innerWidth < 1024){ // ? Mobile
        showBar();
    }
});