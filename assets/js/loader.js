let loader = document.querySelector('#loader');

window.addEventListener('load', function(){
    setTimeout(
        function(){
            loader.classList.add('hidden');

            setTimeout(function(){
                loader.style.display = 'none';
            }, 400 ) // ? Correspond au temps d'animation de #loader.hidden

        }, 1000);
});