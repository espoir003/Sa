<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Compagnie Sucrière S.A | Login</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="app/css/app.css">
    <link rel="stylesheet" href="app/css/jquery.fancybox.min.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/img/logo.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/logo.png">

</head>

<body class="body header-fixed ">

    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
                 <?php include_once("../../import/header.php"); ?>
            <!-- End Main Header -->
            <main id="main">

                <section class="breadcumb-section">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12 center z-index1">
                                <h1 class="title">User Login</h1>
                                <ul class="breadcumb-list flex-five">
                                    <li><a href="index.html">Home</a></li>
                                    <li><span>User Login</span></li>
                                </ul>
                                <img class="bcrumb-ab" src="./assets/images/page/mask-bcrumb.png" alt="">
                            </div>
                        </div>

                    </div>
                </section>

                <section class="login">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-wrap flex">
                                    <div class="image">
                                        <img src="./assets/img/sache.jpg" alt="image" style="width: 100%;">
                                        <img src="./assets/img/1696800200575.jpeg" alt="image" style="width: 100%;">
                                    </div>
                                    <div class="content">
                                        <div class="inner-header-login">
                                            <h3 class="title">Create an account to get started</h3>
                                            <div class="flex-three">
                                                <span class="sale">20% off</span>
                                                <p>get 20% off for web signup</p>
                                            </div>
                                        </div>
                                        <form action="/" id="company-registration" class="registration-form">
                                            <div class="row">
                                                <!-- Company Name -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Nom de l'entreprise</label>
                                                        <input type="text" placeholder="Entrez le nom de l'entreprise*" required>
                                                    </div>
                                                </div>

                                                <!-- Company Email -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Email de l'entreprise</label>
                                                        <input type="email" placeholder="Entrez l'email de l'entreprise*" required>
                                                    </div>
                                                </div>

                                                <!-- Company Phone -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Numéro de téléphone de l'entreprise</label>
                                                        <input type="text" placeholder="Entrez le numéro de téléphone*" required>
                                                    </div>
                                                </div>

                                                <!-- Company Address -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Adresse de l'entreprise</label>
                                                        <input type="text" placeholder="Entrez l'adresse de l'entreprise*" required>
                                                    </div>
                                                </div>

                                                <!-- Company Registration Number (RCCM) -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Numéro RCCM</label>
                                                        <input type="text" placeholder="Entrez le numéro RCCM*" required>
                                                    </div>
                                                </div>

                                                <!-- Tax Identification Number -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Numéro d'identification fiscale (NIF)</label>
                                                        <input type="text" placeholder="Entrez le NIF*" required>
                                                    </div>
                                                </div>

                                                <!-- Legal Representative's Name -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Nom du représentant légal</label>
                                                        <input type="text" placeholder="Entrez le nom du représentant*" required>
                                                    </div>
                                                </div>

                                                <!-- Legal Representative's ID Upload -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Pièce d'identité du représentant légal</label>
                                                        <input type="file" accept=".jpg,.png,.pdf" required>
                                                    </div>
                                                </div>

                                                <!-- Company Documents Upload -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Documents d'entreprise (RCCM, etc.)</label>
                                                        <input type="file" accept=".jpg,.png,.pdf" multiple required>
                                                    </div>
                                                </div>

                                                <!-- Invoice for Previous Payments -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Facture précédente (preuve de paiement)</label>
                                                        <input type="file" accept=".jpg,.png,.pdf" required>
                                                    </div>
                                                </div>

                                                <!-- Password -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Mot de passe</label>
                                                        <input type="password" placeholder="Entrez votre mot de passe*" required>
                                                    </div>
                                                </div>

                                                <!-- Confirm Password -->
                                                <div class="col-md-6">
                                                    <div class="input-wrap">
                                                        <label>Confirmer le mot de passe</label>
                                                        <input type="password" placeholder="Confirmez votre mot de passe*" required>
                                                    </div>
                                                </div>

                                                <!-- Terms and Agreement -->
                                                <div class="col-lg-12 mb-30">
                                                    <div class="checkbox">
                                                        <input id="check-policy" type="checkbox" name="check" value="check" required>
                                                        <label for="check-policy">En vous inscrivant, vous acceptez nos Conditions d'utilisation et notre Politique de confidentialité. <a href="login">Connexion</a></label>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="col-lg-12 mb-30">
                                                    <button type="submit" class="btn-submit">Inscription</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="brand-logo-widget bg-1">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="swiper brand-logo overflow-hidden">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="./assets/images/page/brand-logo.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/images/page/brand-logo.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/images/page/brand-logo.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/images/page/brand-logo.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/images/page/brand-logo.png" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/images/page/brand-logo.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>


                <section class="mb--93 bg-1">
                    <div class="tf-container">
                        <div class="callt-to-action flex-two z-index3 relative">
                            <div class="callt-to-action-content flex-three">
                                <div class="image">
                                    <img src="./assets/images/page/ready.png" alt="Image">
                                </div>
                                <div class="content">
                                    <h2 class="title-call">Ready to adventure and enjoy natural</h2>
                                    <p class="des">Lorem ipsum dolor sit amet, consectetur notted adipisicin</p>
                                </div>
                            </div>
                            <img src="./assets/images/page/vector4.png" alt="" class="shape-ab">
                            <div class="callt-to-action-button">
                                <a href="#" class="get-call">Let,s get started</a>
                            </div>
                        </div>
                    </div>

                </section>

            </main>
            <?php include_once("../../import/footer.php"); ?>

            <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>

    <!-- Modal Popup Bid -->
    <!-- <?php include_once("../../import/modal.php"); ?> -->

    <!-- Javascript -->
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/jquery.nice-select.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/swiper-bundle.min.js"></script>
    <script src="app/js/swiper.js"></script>
    <script src="app/js/plugin.js"></script>
    <script src="app/js/jquery.fancybox.js"></script>
    <script src="app/js/shortcodes.js"></script>
    <script src="app/js/main.js"></script>

</body>

</html>