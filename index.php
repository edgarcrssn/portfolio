<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edgar Cresson</title>
    <meta name="description" content="Etudiant français vivant à Lille, j'étudie le développement web. J'aime associer mon côté créatif et mon côté développeur pour créer des sites web.">
    <link rel="icon" href="./assets/images/icon.svg">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/aqr5oss.css">
</head>
<body>

    <?php include('./assets/components/loader.php'); ?>

    <nav class="important-text transparent">
        <ul class="desktop">
            <div class="home-logo">
                <li>
                    <a href="#" title="Home"><img src="./assets/images/logo.svg" alt="Logo Edgar Cresson"></a>
                </li>
            </div>
            <div class="sections">
                <li>
                    <a href="#presentation" title="Présentation">Qui suis-je ?</a>
                </li>
                <li>
                    <a href="#competences" title="Mes compétences">Mes compétences</a>
                </li>
                <li>
                    <a href="#portfolio" title="Mon portfolio">Mon portfolio</a>
                </li>
                <li>
                    <a href="#contact" title="Me contacter">Me contacter</a>
                </li>
            </div>
            <div class="social-networks">
                <li>
                    <a href="https://www.linkedin.com/in/edgarcresson/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="https://github.com/edgarcrssn" target="_blank"><i class="fab fa-github"></i></a>
                </li>
            </div>
        </ul>
        <ul class="mobile">
            <div class="home-logo">
                <li>
                    <a href="#" title="Home"><img src="./assets/images/logo.svg" alt="Logo Edgar Cresson"></a>
                </li>
            </div>
            <div class="menu">
                <li>
                    <button>
                        Menu
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                </li>
            </div>
        </ul>
    </nav>

    <div id="hamburger" class="mobile">
        <ul>
            <div class="close">
                <li>
                    <button>
                        Fermer
                        <div>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                </li>
            </div>
            <div class="sections">
                <li>
                    <a href="#presentation" title="Présentation">Qui suis-je ?</a>
                </li>
                <li>
                    <a href="#competences" title="Mes compétences">Mes compétences</a>
                </li>
                <li>
                    <a href="#portfolio" title="Mon portfolio">Mon portfolio</a>
                </li>
                <li>
                    <a href="#contact" title="Me contacter">Me contacter</a>
                </li>
            </div>
            <div class="social-networks">
                <li>
                    <a href="https://www.linkedin.com/in/edgarcresson/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="https://github.com/edgarcrssn" target="_blank"><i class="fab fa-github"></i></a>
                </li>
            </div>
        </ul>
    </div>

    <header>
        <div class="header-image"></div>
        <section>
            <div class="name-container">
                <h1>Edgar Cresson</h1>
                <p><span>Webdesigner/Développeu</span>r</p>
            </div>
            <div class="welcome-message-container">
                <p>
                    <span>Bonjour,</span>
                    <span>ravi de vous rencontrer !</span>
                    <span><a href="#presentation">Faire connaissance</a></span>
                </p>
            </div>
        </section>
    </header>

    <section id="presentation-competences">
        <article id="presentation">
            <div class="section-title">
                <h2>Présentation</h2>
                <p>Apprenez à me connaître...</p>
            </div>
            <div class="content important-text">
                <p class="main-content big-paragraph">
                    Bonjour ! Je m’appelle Edgar Cresson, j’ai 19 ans et je suis étudiant en deuxième année dans l’école <a href="https://www.mydigitalschool.com/" target="_blank">MyDigitalSchool</a>, à Lille.<br>
                    <br>
                    Après avoir exploré plusieurs aspects des métiers du digital : webmarketing, communication, création graphique, e-commerce… 
                    j’ai trouvé ma vocation : la conception et le développement de site web. Je ne m'enferme cependant pas dans cette vocation 
                    et reste très polyvalent dans le milieu du digital, notamment au niveau du design graphique, 
                    que j'apprécie aussi particulièrement.<br>
                    <br>
                    <br>
                </p>
                <p class="important-message">
                    <span class="emoji">🧐</span>
                    Je suis à la recherche d’un stage de 2 à 4 mois en tant que webdesigner ou développeur 
                    (front-end ou back-end), à compter du 04/04/2022.
                </p>
            </div>
        </article>
        <article id="competences" class="secondary-color-bg">
            <div class="section-title">
                <h2>Compétences</h2>
                <p>Ce que je maîtrise...</p>
            </div>
            <div class="content">
                <div class="main-content">
                    <p class="big-paragraph important-text">
                        Je maîtrise plusieurs logiciels de créations, notamment la suite
                        Adobe. Parmi eux, ceux que je maîtrise très bien sont : Photoshop, Illustrator,
                        Xd et InDesign.
                    </p>
                    <div class="icons-container">
                        <span class="icon icon__colored__photoshop">Ps</span>
                        <span class="icon icon__colored__illustrator">Ai</span>
                        <span class="icon icon__colored__xd">Xd</span>
                        <span class="icon icon__colored__indesign">Id</span>
                    </div>
                    <p class="big-paragraph important-text">
                        Je maîtrise plusieurs langages. 
                        Ceux que je maîtrise le mieux sont les suivants : HTML/CSS et son pré-processeur Sass, JavaScript et son framework Vue, et PHP.
                    </p>
                    <div class="icons-container">
                        <span class="icon icon__colored__html">HTML</span>
                        <span class="icon icon__colored__css">CSS</span>
                        <span class="icon icon__colored__sass">Sass</span>
                        <span class="icon icon__colored__js">JS</span>
                        <span class="icon icon__colored__vue">Vue</span>
                        <span class="icon icon__colored__php">PHP</span>
                    </div>
                </div>
                <div class="cta-portfolio">
                    <p class="big-paragraph important-text">Des exemples valents mieux que de mots...</p>
                    <a href="#portfolio" title="Mon portfolio" class="button button__inverted button__tiny">Voir ces compétences mises en oeuvre</a>
                </div>
            </div>
        </article>
    </section>

    <section id="portfolio">
        <div class="head">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Toutes mes créations, du projet scolaire au projet personnel.</p>
            </div>
            <form class="portfolio-filters" action="#portfolio" method="post">
                <div class="checkbox-container important-text">
                    <input type="checkbox" id="maquettage" name="maquettage">
                    <label for="maquettage">
                        <div class="checkbox"></div>
                        Maquettage
                    </label>
                </div>
                <div class="checkbox-container important-text">
                    <input type="checkbox" id="developpement" name="developpement">
                    <label for="developpement">
                        <div class="checkbox"></div>
                        Développement
                    </label>
                </div>
                <div class="select-container">
                    <select class="important-text" name="select">
                        <option value="default">Trier par...</option>
                        <option value="anciens">Anciens</option>
                        <option value="recents">Récents</option>
                    </select>
                </div>
                <div class="button-container">
                    <button type="submit" class="button button__simple" name="apply">Appliquer</button>
                </div>
            </form>
        </div>
        <div class="projects-container">

        <?php require('./assets/back/portfolioData.php');

            while($data = $result->fetch()): ?>
                <article>
                    <img src="./assets/images/<?= $data['fileName']; ?>.jpg" alt="Projet <?= $data['fileName'] ?>">
                    <div class="content">
                        <div class="head">
                            <h3><?= $data['title'] ?></h3>
                            <p><?= $data['summary'] ?></p>
                            <span class="release-date"><?= $data['releaseDateFr'] ?></span>
                        </div>
                        <div class="keywords">
                            <div>
                                <?php if($data['developpement']): ?>
                                    <span class="icon icon__bigger">Développement</span>
                                <?php endif; ?>

                                <?php if($data['maquettage']): ?>
                                    <span class="icon icon__bigger">Maquettage</span>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if($data['HTMLCSS'] && !$data['SASS']): ?>
                                    <span class="icon icon__filled icon__bigger">HTML</span>
                                    <span class="icon icon__filled icon__bigger">CSS</span>
                                <?php endif; ?>

                                <?php if($data['HTMLCSS'] && $data['SASS']): ?>
                                    <span class="icon icon__filled icon__bigger">HTML</span>
                                    <span class="icon icon__filled icon__bigger">Sass</span>
                                <?php endif; ?>

                                <?php if($data['JS'] && !$data['VUE']): ?>
                                    <span class="icon icon__filled icon__bigger">JS</span>
                                <?php endif; ?>

                                <?php if($data['JS'] && $data['VUE']): ?>
                                    <span class="icon icon__filled icon__bigger">Vue</span>
                                <?php endif; ?>
                                    
                                <?php if($data['PHP']): ?>
                                    <span class="icon icon__filled icon__bigger">PHP</span>
                                <?php endif; ?>
                                
                                <?php if($data['Xd']): ?>
                                    <span class="icon icon__filled icon__bigger">Xd</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="cta tiny-text">
                            <a class="view button button__project-cta bordered <?= $data['fileName']; ?> <?php if(!$data['developpement'] OR $data['fileName'] == 'ce-portfolio'): ?> inactive <?php endif; ?>" href="./assets/projects/<?= $data['fileName']; ?>" title="Voir en ligne" target="_blank">Voir en ligne</a>
                            <a class="download button button__project-cta bordered <?= $data['fileName']; ?> <?php if(!$data['maquettage']): ?> inactive <?php endif; ?>" href="./assets/downloads/<?= $data['fileName']; ?>.zip" title="Télécharger">Télécharger</a>
                            <a class="know-more button button__project-cta filled <?= $data['fileName']; ?> <?php if(!$data['know-more']): ?> inactive <?php endif; ?>" href="./projet.php?id=<?= $data['id']; ?>" title="En savoir plus">En savoir plus sur ce projet</a>
                        </div>
                    </div>
                </article>
            <?php endwhile; 
            
            $result->closeCursor(); ?>
        </div>
    </section>

    <section id="contact">
        <div class="section-title">
            <h2>Contact</h2>
            <p>Pour toutes propositions et demandes professionnelles.</p>
        </div>
        <form class="contact tiny-text" action="#contact" method="post">
            <input type="text" placeholder="Votre nom" minlength="3" maxlength="255" name="name">
            <div>
                <input type="email" placeholder="Votre e-mail" maxlength="255" name="email">
                <input type="tel" placeholder="Votre numéro de téléphone" maxlength="255" name="tel">
            </div>
            <input type="text" placeholder="Objet de votre message" maxlength="255" name="object">
            <textarea rows="4" placeholder="Votre message" name="message"></textarea>
            <button class="button button__simple" type="submit" name="send">Envoyer</button>

            <?php require('./assets/back/contactForm.php'); ?>

            <?php if($errorMessage): ?>
                <p class="error"><?= $errorMessage; ?></p>
            <?php endif;
            if($successMessage): ?>
                <p class="success"><?= $successMessage; ?></p>
            <?php endif; ?>
        </form>
        <article class="contact-info">
            <h3>Mes coordonnées</h3>
            <ul>
                <div>
                    <h4 class="mail">Adresses mail</h4>
                    <li>
                        <span>Pro</span>
                        <a href="mailto:contact@edgarcresson.fr" title="Email pro">contact@edgarcresson.fr</a>
                    </li>
                    <li>
                        <span>Scolaire</span>
                        <a href="mailto:edgar.cresson@my-digital-school.org" title="Email scolaire">edgar.cresson@my-digital-school.org</a>
                    </li>
                </div>
                <div>
                    <h4 class="tel">Numéro de téléphone</h4>
                    <li>
                        <span>Pro</span>
                        <a href="" title="Tel pro">/</a>
                    </li>
                    <li>
                        <span>Personnel</span>
                        <a href="tel:0788815389" title="Tel perso">07 88 81 53 89</a>
                    </li>
                </div>
                <div>
                    <h4 class="location">Mobilité</h4>
                    <li class="not-grid">
                        <span>Lille (59)</span>
                        &bull;
                        <span>Sedan (08)</span>
                    </li>
                </div>
            </ul>
        </article>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.5665651146405!2d3.0653294156954636!3d50.635168181918814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d50141ab2463%3A0x6919388fb99403ad!2sMyDigitalSchool%20Lille!5e0!3m2!1sfr!2sfr!4v1638567008765!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <?php include('./assets/components/footer.php'); ?>

    <script src="assets/js/loader.js"></script>
    <script src="assets/js/nav.js"></script>
    <script src="assets/js/hamburger.js"></script>
    <script src="assets/js/welcomeMessage.js"></script>
</body>
</html>