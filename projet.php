<?php require('./assets/back/selectProject.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edgar Cresson - <?= $projectData['title']; ?></title>
    <meta name="description" content="<?= $projectData['summary']; ?>">
    <link rel="icon" href="./assets/images/icon.svg">
    <link rel="stylesheet" href="assets/css/projet.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/aqr5oss.css">
</head>
<body>

    <?php include('./assets/components/loader.php'); ?>

    <nav class="important-text transparent active">
        <ul>
            <li>
                <a href="index.php#portfolio">
                    <i class="fas fa-long-arrow-alt-left left"></i>
                    <span>Retour</span>
                </a>
            </li>
        </ul>
    </nav>

    <header>
        <div class="bg-image">
            <img src="./assets/images/<?= $projectData['fileName']; ?>-bg.jpg" alt="<?= $projectData['title']; ?>">
        </div>
        <section>
            <div>
                <h1><?= $projectData['title']; ?></h1>
                <p class="important-text"><?= $projectData['summary']; ?></p>
                <span class="release-date"><?= $projectData['releaseDateFr']; ?></span>
            </div>
            <div>
                <div class="keywords">
                    <div>
                        <?php if($projectData['developpement']): ?>
                            <span class="icon">Développement</span>
                        <?php endif; ?>

                        <?php if($projectData['maquettage']): ?>
                            <span class="icon">Maquettage</span>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php if($projectData['HTMLCSS'] && !$projectData['SASS']): ?>
                            <span class="icon icon__filled">HTML</span>
                            <span class="icon icon__filled">CSS</span>
                        <?php endif; ?>

                        <?php if($projectData['HTMLCSS'] && $projectData['SASS']): ?>
                            <span class="icon icon__filled">HTML</span>
                            <span class="icon icon__filled">Sass</span>
                        <?php endif; ?>

                        <?php if($projectData['JS'] && !$projectData['VUE']): ?>
                            <span class="icon icon__filled">JS</span>
                        <?php endif; ?>

                        <?php if($projectData['JS'] && $projectData['VUE']): ?>
                            <span class="icon icon__filled">Vue</span>
                        <?php endif; ?>
                            
                        <?php if($projectData['PHP']): ?>
                            <span class="icon icon__filled">PHP</span>
                        <?php endif; ?>
                        
                        <?php if($projectData['Xd']): ?>
                            <span class="icon icon__filled">Xd</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="cta tiny-text">
                    <?php if($projectData['developpement'] && $projectData['fileName'] != 'ce-portfolio'): ?>
                        <a class="view button button__project-cta filled <?= $projectData['fileName']; ?>" href="./assets/projects/<?= $projectData['fileName']; ?>" title="Voir en ligne" target="_blank">Voir en ligne</a>
                    <?php endif; ?>

                    <?php if($projectData['maquettage']): ?>
                        <a class="download button button__project-cta filled <?= $projectData['fileName']; ?>" href="./assets/downloads/<?= $projectData['fileName']; ?>.zip" title="Télécharger">Télécharger</a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </header>

    <main class="important-text">
        <?php if($projectData['know-more']):
            include('./assets/know-more/' . $projectData['fileName'] . '.php');
        endif; ?>

        <?php if(!$projectData['know-more']): ?>
            <p class="important-message no-content">
                <span class="emoji">🚧</span>
                Les détails de ce projet ne sont malheureusement pas disponibles...<br> 
                Revenez demain ! :)
            </p>
        <?php endif; ?>
    </main>

    <div id="projects-nav" class="important-text">
        <?php if(!$isFirstProject): ?>
            <div class="previous">
                <a href="projet.php?id=<?= $prevId; ?>">
                    <i class="fas fa-long-arrow-alt-left left"></i>
                    <div>
                        <span class="head tiny-text">Projet précédent</span><br>
                        <span class="title"><?= $previousProjectData['title']; ?></span>
                    </div>
                </a>
            </div>
        <?php endif; ?>

        <?php if($isFirstProject || $isLastProject): ?>
            <div></div>
        <?php endif; ?>

        <?php if(!$isLastProject): ?>
            <div class="next">
                <a href="projet.php?id=<?= $nextId; ?>">
                    <div>
                        <span class="head tiny-text">Projet suivant</span><br>
                        <span class="title"><?= $nextProjectData['title']; ?></span>
                    </div>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </a>
            </div>
        <?php endif; ?>
    </div>

    <?php include('./assets/components/footer.php'); ?>
    
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/nav.js"></script>
</body>
</html>