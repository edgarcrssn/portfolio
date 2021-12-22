let openButton = document.querySelector('nav ul.mobile button');
let closeButton = document.querySelector('div#hamburger.mobile button');

let hamburger = document.querySelector('div#hamburger.mobile')
let hamburgerElements = document.querySelectorAll('div#hamburger.mobile li')

function showHamburger(){
    hamburger.classList.add('active');

    hamburgerElements.forEach(element => {
        element.classList.add('active');
    });
}

function hideHamburger(){
    hamburger.classList.remove('active');

    hamburgerElements.forEach(element => {
        element.classList.remove('active');
    });
}

openButton.addEventListener('touchstart', showHamburger);
closeButton.addEventListener('touchstart', hideHamburger);
document.addEventListener('scroll', hideHamburger);