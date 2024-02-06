<?php
include ('contact.php');
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio-Emilia Raffalli</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b60ccad9ed.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Urbanist:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>

        <header id="header">

            <div class="nav-wrapper flex sticky space-between">

                <a href=#header id="logo"></a>
            
                <nav class="nav-top">
                    
                    <label for="check" class="menu flex-column align-end">
                        <input type="checkbox" id="check">
                        <div class="line-menu-1"></div>
                        <div class="line-menu-2"></div>
                    </label>
                    
                    <ul class="nt">
                        <li><a href=#header>Accueil</a></li>
                        <li><a href=#about>À propos</a></li>
                        <li><a href=#work>Réalisations</a></li>
                        <li><span>CONTACT</span></li>
                        <li><a href="mailto:e.raffalli@hotmail.fr">e.raffalli@hotmail.fr</a></li>
                        <li>
                            <ul class="flex social-media">
                                <li>
                                    <a href="https://www.linkedin.com/in/emiliaraffalli">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/Emilia-Raffalli">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/emi.raffalli/">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>

            <section id="introduce" class="introduce">
                <div class="introduce-text">
                    <span class="name">Emilia Raffalli</span><br>
                    <h1>Développeuse<br>web<span class="bg-2">.</span></h1>
                    <p>Après dix années d’expérience en tant que graphiste multimédia, j’oriente aujourd’hui ma carrière vers le domaine du web. Ma passion pour les défis techniques, mon désir de partager des idées et ma volonté constante d’apprentissage guident ma transition vers le développement web.
                    </p>
                </div>
                <div class="introduce-sm-contain">
                    <div class="introduce-sm">
                        <a href="www.linkedin.com/in/emiliaraffalli"><i class="fa-brands fa-linkedin-in"></i></a>                      
                        <a href="https://www.instagram.com/emi.raffalli/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://github.com/Emilia-Raffalli"><i class="fa-brands fa-github"></i></a>
                    </div>
                    <div class="discover flex-column">
                        <span>Découvrez le pourquoi et le comment.</span>
                        <a href=#about><i class="fa-solid fa-arrow-down-long"></i></a>
                    </div>
                    
                </div>
            </section>
        </header>

        <section id="about" class="flex wrap align-center justify-center space-between">
        

            <div class='picture-container'>
                <div class="picture"></div>
                <div class="frame"></div>
            </div>
            

            <div class='text-content flex-column'>
                <h2>À propos</h2>
                <p>Le partage est une dimension essentielle qui m’attire dans le métier du développement web, basé sur l’interrogation constante et la remise en question. Contribuer aux réflexions technologiques au sein d’une équipe dynamique et expérimentée est une source de motivation.
                Mon parcours m’a permis de développer une capacité d’adaptation et une approche orientée client.</p>
            </div>
        </section>

        <section id="work">
            <h2>Réalisations</h2>
            <div class="all-cards flex wrap justify-center">
                <a href="https://emilia-raffalli.github.io/guess-my-number/">
                    <div class="card">
                        <div class="header-card">
                        <img src="img/projets/guess-my-number.jpg" alt="Devine le nombre : jeu réalisé en javascript" width="100%">
                        </div>
                        <div class="body-card">
                            <h3>Guess my number</h3>
                            <p>JAVASCRIPT / HTML / SASS</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="card">
                        <div class="header-card">
                            <img src="#">
                        </div>
                        <div class="body-card">
                            <h3>Pet Sitter</h3>
                            <p>PHP / HTML / CSS3</p>
                        </div>
                    </div>
                </a>

                <div class="card">
                    <div class="header-card">
                        <img src="#">
                    </div>
                    <div class="body-card">
                        <h3>Donkey series</h3>
                        <p>Symfony / PHP / HTML / SASS</p>
                        <a href="#">Lien du projet 2</a>
                    </div>
                </div>

                <a href="https://emiliaraffalli.fr/">
                    <div class="card">
                        <div class="header-card">
                            <img src="img/projets/emilia-raffalli-graphisme.jpg" alt="Portfolio de graphiste: Emilia Raffalli" width="100%">
                        </div>
                        <div class="body-card">
                            <h3>Graphisme</h3>
                            <p>HTML / CSS / Jquery</p>
                        </div>
                    </div>
                </a>
            </div>
            
        </section>

        <section id="contact">
            <?php if(isset($errors)): ?>
                <!-- <p class="request_message" style= 'color:<?=$messages['errors']['color']?>'> -->

                </p>
                
            <?php endif ?>

            <h2>Me contacter</h2>
            <p> Vous avez une question, un projet ? Écrivez-moi !</p>
            <form class="flex form-contact flex-column " action="contact.php" method="POST">
                <div class="flex flex-wrap form-contain-top">
                    <div class="flex-column">
                        <label for="lastName">Votre nom</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Entrez votre nom">
                    </div>
            
                    <div class="flex-column">
                        <label for="email">Votre mail</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre adresse email">   
                    </div>
                </div>

                <div class="flex-column">
                        <label for="subject">Objet</label>
                        <input type="text" id="subject" name="subject" placeholder="Objet de votre message">   
                    </div>
            
                <div class="textarea-contain flex-column align-start">
                    <label for="message">Votre message</label>
                    <textarea id="message" name="message" placeholder="Votre message" required></textarea>
                </div>                
                
                <div class="btn-contain flex justify-center">
                    <div class="to-right bloc-couleur couleur-remplissage">
                    <button type="submit" class="btn">Envoyer</button>
                </div>
                
            </form>

        </section>

        <footer id ="footer">
            
                <nav class="nav-bottom">
                    <div class="contact">
                        <p><span>CONTACT</span></p>
                        <a href="mailto:e.raffalli@hotmail.fr">e.raffalli@hotmail.fr</a>
                    </div>
                    
                    <ul>
                        <li><a href=#logo>Accueil</a></li>
                        <li><a href=#about>À propos</a></li>
                        <li><a href=#work>Réalisations</a></li>
                    </ul>
                </nav>


                <div class="bottom flex space-between align-center">
                    <div>
                        <p>© Emilia Raffalli 2024</p>
                    </div>

                        <ul class="flex justify-end social-media-footer">
                            <li>
                                <a href="https://www.linkedin.com/in/emiliaraffalli">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/Emilia-Raffalli">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/emi.raffalli/">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                </div>

        </footer>

        <div class="white-background"></div>

        <nav class="nav-right" aria-label="main navigation." id="section-nav">
            <ul>
                <li>
                    <a href=#header aria-label="Go to first section:introduce.">
                        <div class="nav-bullet current"></div>
                    </a>
                </li>
                <li>
                    <a href=#about aria-label="Go to second section:about.">
                        <div class="nav-bullet"></div>
                    </a>
                </li>
                <li>
                    <a href=#work aria-label="Go to third section:my work.">
                        <div class="nav-bullet current"></div>
                    </a>
                </li>
                <li>
                    <a href=#contact aria-label="Go to fourth section:contact me.">
                        <div class="nav-bullet current"></div>
                    </a>
                </li>
            </ul>
        </nav>
    <script src="js/script.js"></script>

    </body>
</html>