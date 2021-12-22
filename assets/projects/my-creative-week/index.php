<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <title>&Eacute;l&eacute;phant Tha&iuml; - Restaurant tha&iuml;landais</title>
</head>
<body>
    
    <header class="desktop">
        <a href="#" class="logo">&Eacute;l&eacute;phant Tha&iuml;</a>

        <nav role="navigation" class="desktop">
            <ul class="nav-text">
                <li><a href="#">Accueil</a></li>
                <li><a href="#second-section">Le restaurant</a></li>
                <li><a href="#fourth-section">Carte & R&eacuteservation</a></li>
                <li><a href="#fifth-section">Contact</a></li>
            </ul>
            <ul class="nav-social">
                <li><a href="https://www.instagram.com/elephant_thai_lille/" target="_blank"><img src="img/instagram.svg" alt="Instagram"></a></li>
                <li><a href="https://m.facebook.com/Elephant-Thai-120396324681349/" target="_blank"><img src="img/facebook.svg" alt="Facebook"></a></li>
            </ul>
        </nav>
    </header>

    <header class="mobile">
        <nav role="navigation" class="mobile">
            <div id="menuToggle">
                <input type="checkbox">
                    
                    <span></span>
                    <span></span>
                    <span></span>

                <ul id="menu">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#second-section">Le restaurant</a></li>
                    <li><a href="#fourth-section">Carte & R&eacuteservation</a></li>
                    <li><a href="#fifth-section">Contact</a></li>
                    <div>
                        <li><a href="https://www.instagram.com/elephant_thai_lille/" target="_blank"><img src="img/instagram.svg" alt="Instagram"></a></li>
                        <li><a href="https://m.facebook.com/Elephant-Thai-120396324681349/" target="_blank"><img src="img/facebook.svg" alt="Facebook"></a></li>
                    </div>
                </ul>
            </div>

            <a href="#" class="logo">&Eacute;l&eacute;phant Tha&iuml;</a>
        </nav>
    </header>

    <div id="first-section">
        <div class="big-title-box">
            <section>
                <p>La cuisine tha&iuml;landaise au coeur de Lille</p>
                <h1>&Eacute;l&eacute;phant Tha&iuml;<br>Cuisine Tha&iuml;landaise 🥢</h1>
            </section>

            <div class="cta-section">
                <div class="cta-box">
                    <a href="#second-section" class="cta-resto">Le restaurant</a>
                </div>
                <div class="cta-box">
                    <a href="#fourth-section" class="cta-reserver">R&eacute;server</a>
                </div>
            </div>
        </div>

        <div class="plat-1-box">
            <img src="img/plat-1.png" alt="Plat">
        </div>

        <img src="img/assiette-1.png" alt="Plat" id="assiette-bg-1">
    </div>

    <div id="second-section">

        <div id="plat-2-box">
            <img src="img/plat-2.png" alt="Plat">
        </div>

        <div class="content">
            <h2>Un savoir-faire unique…</h2>
            <p>
                Depuis sa cr&eacute;ation, le restaurant &Eacute;l&eacute;phant Tha&iuml; a 
                toujours mis en valeur un savoir-faire culinaire 
                tha&iuml;landais, dans le choix des produits de base et 
                dans l'&eacute;laboration des mets.<br>
                <br>
                Depuis 2007, le &Eacute;l&eacute;phant Tha&iuml; est reconnu seul 
                restaurant tha&iuml;landais authentique du Nord-Pas-de-
                Calais, et recommand&eacute; par le Comit&eacute; 
                d'&eacute;valuation de la cuisine tha&iuml;landaise.<br>
                <br>
                Aujourd'hui, notre &eacute;quipe 
                fait peu &agrave; peu &eacute;voluer la carte pour vous 
                pr&eacute;senter des plats typiquement tha&iuml;landais et 
                vous faire d&eacute;;couvrir de nouvelles saveurs.
            </p>

            <div class="cta-box">
                <a href="#fourth-section" class="cta-reserver">R&eacute;server</a>
            </div>
        </div>

        <img src="img/assiette-2.png" alt="Plat" id="assiette-bg-2">
    </div>

    <div id="third-section">

        <div id="plat-3-box">
            <img src="img/plat-3.png" alt="Plat">
        </div>

        <div class="content">
            <h2>Une ambiance chaleureuse</h2>
            <p>
                &Eacute;l&eacute;phant Tha&iuml; situ&eacute; &agrave; Lille, &agrave; proximit&eacute; de la gare 
                Lille Flandres et du centre commercial Westfield, 
                vous accueille dans une ambiance feutr&eacute;e.<br>
                <br>
                Le restaurant vous propose un r&eacute;el 
                d&eacute;paysement dans la tradition tha&iuml;landaise en se 
                portant garant des traditions culinaires.<br>
                <br>
                Le restaurant est disponible pour vos 
                &eacute;v&eacute;nements priv&eacute;s et professionnels.
            </p>
            <div class="cta-box">
                <a href="#fourth-section" class="cta-reserver">R&eacute;server</a>
            </div>
        </div>

        <img src="img/assiette-3.png" alt="Plat" id="assiette-bg-3">
    </div>

    <div id="fourth-section">
        <h2>Carte & R&eacute;servation</h2>

        <div id="card">
            <div id="card-left">
                <div id="content-bis"> 
                    <div class="content">
                        <div id="view">
                            <a href="dl/Carte-Elephant-Thaï.pdf" target="_blank" id="link-view">
                                <img src="img/view.svg" alt="View" id="logo-view">
                                <p>Voir la carte en ligne</p>
                            </a>
                        </div>
                        <div id="download">
                            <a href="dl/Carte-Elephant-Thaï.pdf" download="Carte-Elephant-Thaï" id="link-download">
                                <img src="img/download.svg" alt="Download" id="logo-download">
                                <p>T&eacute;l&eacute;charger la carte au format PDF (6 mo)</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="content-right">
                <p id="address">
                    Restaurant &Eacute;l&eacute;phant Tha&iuml;<br>                   
                    31 rue des Ponts de Comines, 59000 Lille<br> 
                    France<br>
                    03 20 78 69 14<br>
                </p>

                <p id="message-logos">Ou retrouvez-nous sur</p>
                <div id="logos">
                    <a href="https://www.ubereats.com/fr" target="_blank"><img src="img/ubereats.png" alt="UberEats"></a> 
                    <a href="https://www.just-eat.fr/" target="_blank"><img src="img/justeat.png" alt="JustEat"></a>
                    <a href="https://deliveroo.fr/fr" target="_blank"><img src="img/deliveroo.png" alt="Deliveroo"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="fifth-section">
        <h2 id="contact">Contactez-nous</h2>
        <div class="contact-background">
            <div id="flex">
                <div id="horaires">
                    <div>
                        <img src="img/calendar.svg" alt="calendar">
                        <h3>Horaires d’ouverture</h3><br>
                    </div>
                    <p> 
                        Le lundi, mardi, mercredi<br>
                        jeudi, vendredi & samedi<br>
                        <br>
                        12h00 - 14h30, 19h00 - 23h00<br>
                        <br>
                        Ferm&eacute; le dimanche
                    </p>
                </div>

                <div>
                    <form action="" method="POST">
                        <input type="text" placeholder="Votre nom" name="nom">
                        <input type="text" placeholder="Votre pr&eacute;nom" name="prenom">
    
                        <div id="mailtel">
                            <input type="email" placeholder="Votre e-mail" name="email">
                            <input type="tel" placeholder="Votre num&eacute;ro" name="tel">
                        </div>
    
                        <textarea rows="5" placeholder="Message" name="message"></textarea>

                        <?php  
                        if( isset($_POST["envoi"]) ){
                            if( $_POST["nom"]== '' || !isset($_POST["nom"]) 
                                || $_POST["prenom"]== '' || !isset($_POST["prenom"])
                                || $_POST["email"]== '' || !isset($_POST["email"])
                                || $_POST["tel"]== '' || !isset($_POST["tel"])
                                || $_POST["message"]== '' || !isset($_POST["message"])
                                ){
                                echo "<br>Veuillez compl&eacute;ter tous les champs du formulaire avant envoi.<br>"; 
                            }    
                            else{
                                mail('contact.elephantthai@gmail.com','Reservation Elephant Thai', $_POST["message"]); 
                                echo '<br>R&eacute;servation effectu&eacute;e, merci !<br>';
                            }
                        }
                        ?>

                        <div id="button">
                            <input type="submit" value="Envoyer" name="envoi">
                        </div>
                    </form>
                </div>

                <div id="map">
                    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                        var setting = {"height":360,"width":500,"zoom":17,"queryString":"Elephant Thai, Rue des Ponts de Comines, Lille, France","place_id":"ChIJkUpzmInVwkcROoN3j6L114k","satellite":false,"centerCoord":[50.63716441935857,3.0676309999999996],"cid":"0x89d7f5a28f77833a","lang":"fr","cityUrl":"/france/lille-18116","cityAnchorText":"Carte de Lille, Nord-Pas-de-Calais, France","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"428485"};
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=428485';
                        s.async = true;
                        s.onload = function (e) {
                          window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                      })();</script></div>
                </div>
            </div>
        </div>
    </div>

    <div id="sixth-section">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-ced4b96f-6f7b-49e4-ace8-3bd224622506"></div>
    </div>

    <footer>
        <div class="margin">
            <h3>Adresse</h3><br>
            <ul>
                <li>&Eacute;l&eacute;phant Tha&iuml;</li><br>
                <li>33 rue des Ponts de Comines</li><br>
                <li>59000 Lille</li><br>
                <li>France</li>
            </ul>
        </div>
        <div class="margin">
            <h3>Contact</h3><br>
            <ul>
                <li>
                    N’h&eacute;sitez pas à nous contacter pour<br>
                    plus de renseignements
                </li><br>
                <li>03 20 78 69 14</li><br>
                <li>contact.elephantthai@gmail.com</li><br>
                <li>
                    <a href="https://www.instagram.com/elephant_thai_lille/" target="_blank"><img src="img/instagram.svg" alt="Instagram" id="insta-footer"></a>
                    <a href="https://m.facebook.com/Elephant-Thai-120396324681349/" target="_blank"><img src="img/facebook.svg" alt="Facebook"></a>
                </li>
            </ul>
        </div>
        <div class="margin">
            <h3>Plan du site</h3><br>
            <ul>
                <li><a href="#">Accueil</a></li><br>
                <li><a href="#second-section">Le restaurant</a></li><br>
                <li><a href="#fourth-section">Carte & R&eacuteservation</a></li><br>
                <li><a href="#fifth-section">Contact</a></li><br>
            </ul>
        </div>
        <div>
            <h3>Horaires d'ouverture</h3><br>
            <ul>
                <li>Le lundi, mardi, mercredi<br>
                    jeudi, vendredi, samedi</li><br>
                <li>12h00 - 14h30, 19h00 - 23h00</li><br>
                <li>Ferm&eacute; le dimanche</li>
            </ul>
        </div>       
    </footer>

    <div id="mentions-legales">
        <div>
            <p>Copyright&copy;2021. Éléphant Thaï</p>
            <a href="dl/mentions-légales.pdf" target="_blank">Mentions légales</a>
        </div>
    </div>

</body>
</html>