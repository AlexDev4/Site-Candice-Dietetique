<!DOCTYPE html>
<html dir="ltr" lang="fr">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="AlexDev4" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="img\logo\android-chrome-512x512.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?= !empty($this->fetch('title')) ? $this->fetch('title') : '' ?></title>

    <!-- Document Title
	============================================= -->

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->

    <!-- Header
		============================================= -->
    <header id="header" class="full-header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">
                    <nav class="primary-menu">
                        <ul class="menu-container">
                            <li class="menu-item">
                                <a class="menu-link" href="<?= $this->Url->build('/home') ?>">
                                    <div class=lien-menu>Accueil</div>
                                </a>
                            <li class="menu-item">
                                <a class="menu-link" href="<?= $this->Url->build('/perte-de-poids') ?>">
                                    <div class=lien-menu>Perte de poids</div>
                                </a>
                            <li class="menu-item">
                                <a class="menu-link" href="<?= $this->Url->build('/reequilibrage-alimentaire') ?>">
                                    <div class=lien-menu>Réequilibrage alimentaire</div>
                                </a>
                            <li class="menu-item">
                                <a class="menu-link" href="<?= $this->Url->build('/education-a-la-nutrition') ?>">
                                    <div class=lien-menu>Education nutritionelle</div>
                                </a>
                            <li class="menu-item">
                                <a class="menu-link" href="<?= $this->Url->build('/alimentation-enfant-adolescent') ?>">
                                    <div class=lien-menu>Alimentation de l'enfant</div>
                                </a>
                            <li class="menu-item">
                                <a class="menu-link" href="<?= $this->Url->build('/blog-recettes') ?>">
                                    <div class=lien-menu>Blog & recettes</div>
                                </a>
                            <li class="menu-item">
                                <a class="menu-link" href="https://www.doctolib.fr/dieteticien/saint-cyr-sur-mer/candice-vivian-latil" target="_blank">
                                    <div class="lien-rdv">Prendre rendez-vous</div>
                                </a>
                        </ul>
                  </nav>
                 </div>
            </div>
        </div>
    </header><!-- #header end -->


    <main id="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
    <footer class="footer">
                    <div class="line"></div>
        <div class="footer-wrap pt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 offset-xl-1 col-md-8">
                        <div class="f-maincontent text-center pt-0">
                            <picture>
                                <img class="logo-footer" src="img/logo/Logo.png"
                                    alt="Candice VIVIAN-LATIL, Diététicienne-nutritionniste | Saint Cyr sur Mer | La Ciotat" title="Candice VIVIAN-LATIL, Diététicienne-nutritionniste | Saint Cyr sur Mer | La Ciotat">
                            </picture>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 ps-lg-4">
                        <div class="navigation-footer">
                            <div class="h3">Navigation</div>
                            <ul class=>
                            <li><i class="fa-solid fa-house"></i><a href="<?= $this->Url->build('/home') ?>"> Accueil</a></li>
                                        <li><i class="fa-solid fa-weight-scale"></i><a href="<?= $this->Url->build('/perte-de-poids') ?>"> Perte de poids</a></li>
                                        <li><i class="fa-solid fa-scale-balanced"></i><a href="<?= $this->Url->build('/reequilibrage-alimentaire') ?>"> Réequilibrage alimentaire</a></li>
                                        <li><i class="fa-solid fa-apple-whole"></i><a href="<?= $this->Url->build('/education-a-la-nutrition') ?>"> Education nutritionnelle</a></li>
                                        <li><i class="fa-solid fa-hands-holding-child"></i><a href="<?= $this->Url->build('/alimentation-enfant-adolescent') ?>"> Alimentation de l'enfant et de l'adolescent</a></li>
                                        <li><i class="fa-solid fa-utensils"></i><a href="<?= $this->Url->build('/blog-recettes') ?>"> Blog et recettes</a></li>
                                        <li><i class="fa-solid fa-calendar"></i><a href="https://www.doctolib.fr/dieteticien/saint-cyr-sur-mer/candice-vivian-latil" target="_blank"> Prendre rendez-vous</a></li>
                                    </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="navigation-footer">
                        <div class="h3">Informations utiles</div>
                            <ul class="d-flex flex-column info-client">
                                <li><i class="fa-solid fa-lemon"></i>Candice VIVIAN-LATIL</li>
                                <li><i class="fa-solid fa-mobile-screen"></i><a href="tel:+33786660543">07.86.66.05.43</li>
                                <li><i class="fa-solid fa-square-envelope"></i><a href="mailto:contact@candice-vivian-latil-dieteticienne.fr">contact@candice-vivian-latil-dieteticienne.fr</a></li>
                                <li><i class="fa-solid fa-thumbtack"></i>2 promenades de la Rambla - 83270 St Cyr sur Mer <br>
                                    <i>Parkings gratuits à proximité</i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 px-lg-5">
                        <div class="ft-lists">
                            <div class="h3">Newsletter</div>
                            <p>Inscrivez-vous à ma newsletter pour recevoir des conseils, des recettes et bien plus !
                            </p>
                                <?= $this->Form->create(null, ["url" => "/pages/newsletter"] )?>
                                    <input type="email" name="mail" class="form-control mt-3 p-3" id="email"
                                        placeholder="Votre E-mail" />
                                        <button type=submit class="btn-news">S’inscrire</button>
                                        <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="copyrights">
        <div class="container">

            <div class="row col-mb-30">

                <div class="copyright-text d-flex flex-wrap justify-content-xl-between justify-content-start">
                    <p>Copyrights &copy; <?php echo date("Y") ?> Candice VIVIAN-LATIL - Site developpé par <a href=https://github.com/AlexDev4 target="_blank">Alexis OLIVE</a>.</p>
                    <div class="copyright-links"><a href="#">CGU</a> / <a href="#">RGPD</a></div>
                </div>
            </div>


        </div>
    </div><!-- #copyrights end -->
    </footer>
    

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop"><i class="fa-solid fa-arrow-up"></i></div>

    <!-- JavaScripts
	============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="js/functions.js"></script>

    <!-- Font Awesome 
    ============================================= -->
    <script src="https://kit.fontawesome.com/2ace45f598.js" crossorigin="anonymous"></script>


</body>

</html>