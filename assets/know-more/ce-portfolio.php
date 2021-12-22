<article class="big-paragraph">
    <section class="intro important-message ce-portfolio">
        <span class="emoji">📖</span>
        <p>
            Le but de ce projet était de créer un site web permettant de me présenter, mettre en valeur mes projets et pouvoir me contacter.
            C’est à la fois un projet que je qualifie de personnel car cela me tenait à coeur d’avoir un support de présentation de moi-même, mais également professionnel car il m’est utile pour me mettre en valeur lors de mes recherches de stage/emploi.
            Naturellement, ce support qui me permet de me « vendre » se devait d’être le plus qualitatif et représentatif de mes compétences possible.
            J’ai ainsi mobilisé la plupart de mes compétences et des outils que je maîtrise afin d’illustrer au mieux mes capacités dans le domaine du web.
            Je me suis ainsi lancé dans le projet de créer mon CV/portfolio, de A à Z.
        </p>
    </section>

    <section class="part">
        <div class="head">
            <span>Première étape</span>
            <h2>Maquettage</h2>
        </div>
        <p>
            Cette étape est primordiale dans la création d’un site web : c’est grâce à la maquette qu’on peut coder plus rapidement et ne pas répéter de code inutile. De plus, une fois la maquette terminée, on peut enfin se lancer dans l’intégration, en se focalisant à 100% sur le développement, et rien d’autre.
            J’ai ainsi créé la maquette web de ce site sur l’excellent Adobe Xd. Cette maquette contient le format desktop, ainsi que les formats tablettes et petits mobiles, pour le responsive.
            Dans la section « Actifs du document », j’ai pris soin d’enregistrer toutes les couleurs utilisées, tous les styles de caractères, ainsi que tous les composants.
            Cela afin d’anticiper la prochaine étape - qui est l’intégration - en me permettant d’identifier tous les éléments du site qui se répètent, afin de ne pas me répéter dans le code, et me faciliter la tâche.
        </p>
    </section>
    <section class="part">
        <div class="head">
            <span>Deuxième étape</span>
            <h2>Intégration</h2>
        </div>
        <p>
            Une fois l’étape du maquettage terminée, c’est au tour de l’intégration. Niveau HTML, j’ai fait en sorte d’utiliser des balises sémantiques et logiques, afin d’optimiser le référencement naturel de mon site.
            Pour le style, j’ai choisi d’utiliser le préprocesseur Sass, afin de fluidifier mon travail et maximiser la lisibilité de mon code. J’ai sollicité la plupart des fonctionnalités pratiques de Sass, comme les variables, les boucles, les mixins, etc.
            Chaque section HTML de mon site a sa propre feuille de style Sass, qui est ensuite importée dans la feuille principale, qui elle, est compilée.
            Les variables, mixins, et autres données spécifiques possèdent leur propre fichier Sass, placé dans un dossier « libs ».
            Pour le responsive, j’ai principalement utilisé des unités adaptatives, dont « vh/vw » et « em ». Celles-ci favoriseront le responsive naturel des éléments du site. J’ai tout de même utilisé quelques media queries pour changer la disposition de certains éléments en format mobile.
            Certains éléments sont également uniquement visibles en format mobile et inversement, comme par exemple le menu hamburger, uniquement visible en mobile.
        </p>
    </section>
    <section class="part">
        <div class="head">
            <span>Troisième étape</span>
            <h2>Développement</h2>
        </div>
        <p>
            Ensuite viennent le développement front-end et back-end. Au niveau du front-end, j’ai utilisé du JavaScript natif pour les quelques animations : animation du loader ; animation de la navbar ; animation du menu hamburger ; animation du message de bienvenue.
            Au niveau du back-end, j’ai utilisé du PHP natif combiné à du MySQL, pour les sections : Portfolio (index) : affichage des différents projets dans l’ordre et possibilité de les filtrer ; Contact (index) : traitement du formulaire de contact ; Détails du projet (projet) : Affichage des détails d’un projet en fonction de l’ID entré dans l’URL, et possibilité de naviguer entre les projets au niveau du bas de page.
        </p>
    </section>
</article>