let navBar = document.querySelector('nav');
let navTimeOut;

function hideBar(){
    navBar.classList.remove('active');
}

function showBar(){
    navBar.classList.add('active');
}

if(window.innerWidth >= 1024){ // ! Seulement pour Desktop
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function(){  
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if(scrollTop > lastScrollTop){
            clearTimeout(navTimeOut);
            hideBar();
        } else{
            clearTimeout(navTimeOut);
            showBar();
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;



        navTimeOut = setTimeout(hideBar, 1000);

        
    
        if(scrollTop == 0){
            clearTimeout(navTimeOut);
            navBar.classList.add('transparent');
            showBar();
        } else{
            navBar.classList.remove('transparent');
        }
    });
    
    document.addEventListener('mousemove', function(event){
        if(event.y < navBar.offsetHeight){
            clearTimeout(navTimeOut);
            showBar();
        }
    });
    
    navBar.addEventListener('mouseout', function(){
        if(!navBar.matches('.transparent')){
            hideBar();
        }
    });
}

if(window.innerWidth < 1024){ // ? Mobile
    window.addEventListener('scroll', function(){
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if(scrollTop == 0){
            navBar.classList.add('transparent');
        } else{
            navBar.classList.remove('transparent');
        }
    });
}