let bar, barDesktop, openMenu, closeMenu, navContainer, icon; 

// Mobile
function showNav(){
    navContainer.classList.remove("hide-nav");
    navContainer.classList.add("show-nav");
}

// Both
function hideNav(){ 

    //Mobile
    navContainer.classList.remove("show-nav");
    navContainer.classList.add("hide-nav");
    bar.classList.add("bar-active");
    
    // Desktop
    barDesktop.classList.add("bar-active");

    icon.classList.add("visible");
}

document.addEventListener("DOMContentLoaded", function(){
    // Mobile
    bar = document.getElementById("bar");
    openMenu = document.getElementById("open-menu");
    closeMenu = document.getElementById("close-menu");
    navContainer = document.getElementById("nav-container");
    icon = document.getElementById("icon");

    openMenu.addEventListener('touchstart', showNav);
    closeMenu.addEventListener('touchstart', hideNav);

    // Desktop
    barDesktop = document.getElementById("bar-desktop"); 

    // Both
    window.onscroll = hideNav;
})