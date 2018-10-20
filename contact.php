<?php include('contactform.php'); ?>
<!DOCTYPE html>
<html lang="hu" class="animated fadeIn">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel=icon href="img/favicon.ico">
    <!--Let browser know website is optimized for mobile-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aurora Lighting Hungary</title>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="white">
            <div class="container">
                <div class="nav-wrapper">
                    <img src="img/aurora_logo.png" alt="" class="brand-logo">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons grey-text text-darken-4">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="index.html" class="grey-text text-darken-4">Főoldal</a></li>
                        <li><a href="products.html" class="grey-text text-darken-4">Termékek</a></li>
                        <li><a href="references.html" class="grey-text text-darken-4">Referenciák</a></li>
                        <li><a href="aboutus.html" class="grey-text text-darken-4">Rólunk</a></li>
                        <li><a href="contact.php" class="grey-text text-darken-4">Kapcsolat</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidenav -->
        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.html" class="grey-text text-darken-4">Főoldal</a></li>
            <li><a href="products.html" class="grey-text text-darken-4">Termékek</a></li>
            <li><a href="references.html" class="grey-text text-darken-4">Referenciák</a></li>
            <li><a href="aboutus.html" class="grey-text text-darken-4">Rólunk</a></li>
            <li><a href="contact.php" class="grey-text text-darken-4">Kapcsolat</a></li>
        </ul>
    </header>

    <!-- Main -->
    <main>
        <img class="responsive-img" src="img/contact_map.jpg" alt="aurora-map">
        <div class="container">
            <div class="row">
                <div>&nbsp;</div>
                <div class="col s12 l6">
                    <div class="card-panel grey lighten-3 center hoverable">
                        <h4>Elérhetőségeink</h4>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <h5 class="info"><i class="material-icons small">phone_iphone</i> 06 30 123 4567</h5>
                        <h5 class="info"><i class="material-icons small">email</i> office@aurorahungary.hu</h5>
                        <h5 class="info"><i class="material-icons small">place</i> 1068 Budapest Lövölde tér 3.</h5>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                    </div>
                </div>
                <div class="col s12 l6">
                    <div class="card-panel grey lighten-3 center hoverable">
                        <h4>Küldjön nekünk üzenetet</h4>
                        <form class="contact-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" name="name" class="validate" value="<?= $name ?>">
                                <label for="icon_prefix">Név</label>
                                <span style="color: red;font-weight: bold;font-family: Arial, Helvetica, sans-serif"><?= $name_error ?></span>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_email" type="text" name="email" class="validate" value="<?= $email ?>">
                                <label for="icon_email">E-mail</label>
                                <span style="color: red;font-weight: bold;font-family: Arial, Helvetica, sans-serif"><?= $email_error ?></span>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="icon_prefix2" type="text" name="message" class="materialize-textarea" value="<?= $message ?>"></textarea>
                                <label for="icon_prefix2">Üzenet</label>
                                <span style="color: red;font-weight: bold;font-family: Arial, Helvetica, sans-serif"><?= $message_error ?></span>
                            </div>
                            <button type="submit" name="submit" class="btn blue waves-effect waves-light white-text">Küldés</button>
                            <span style="color: green;font-weight: bold;padding-top: 10px;font-family: Arial, Helvetica, sans-serif"><?= $success ?></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 l6 center">

                </div>
                <div class="col l4 offset-l2 s12 center">
                    <a href="https://www.facebook.com/auroralighting" target="_blank" class="white-text">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://www.youtube.com/user/auroralighting" target="_blank" class="white-text">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                    <a href="https://twitter.com/auroralighting" target="_blank" class="white-text">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="https://hu.pinterest.com/auroralighting/" target="_blank" class="white-text">
                        <i class="fab fa-pinterest fa-2x"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/aurora-lighting" target="_blank" class="white-text">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
        <div id="copyright" class="footer-copyright">
            <div class="container center">
                Aurora Hungary &copy; 2018
            </div>
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>