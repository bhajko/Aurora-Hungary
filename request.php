<?php include('requestform.php'); ?>
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
        <nav class="navbar-material">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.html" class="brand-logo"><img src="img/aurora_logo.png" alt="" class="responsive-img"></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons grey-text text-darken-4">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="index.html" class="grey-text text-darken-4">Főoldal</a></li>
                        <li><a href="products.html" class="grey-text text-darken-4">Termékek</a></li>
                        <li><a href="references.html" class="grey-text text-darken-4">Referenciák</a></li>
                        <li><a href="aboutus.html" class="grey-text text-darken-4">Rólunk</a></li>
                        <li><a href="request.php" class="red-text">Ajánlatkérés</a></li>
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
            <li><a href="request.php" class="red-text text-darken-4">Ajánlatkérés</a></li>
            <li><a href="contact.php" class="grey-text text-darken-4">Kapcsolat</a></li>
        </ul>
    </header>

    <!-- Main -->
    <main>
        <img class="responsive-img" src="img/consulting.jpg" alt="consulting">

        <div class="container">
            <div class="row">
                <div>&nbsp;</div>
                <div class="col s12 m10 offset-m1 l6">
                    <div class="card-panel grey lighten-3 center hoverable">
                        <h4>Kérjen tőlünk árajánlatot</h4>
                        <div>&nbsp;</div>
                        <p>Világítástechnikai projektek, felújítások vagy tanácsadás kapcsán, forduljon hozzánk bizalommal! 
                            </p>
                        <p>Tanácsadóink célja a komplett megoldások szállítása, a tervezéstől, a lebonyolításig.</p>
                        <p>Amennyiben rendelkezik már előzetes információkkal, tervekkel vagy mennyiségi adatokkal, kérjük, ossza ezeket meg velünk!</p>
                        <p>A legfrissebb katalógusunkat az alábbi linken érheti el.</p>
                        <div>&nbsp;</div>
                        <a id="au-catalogue" href="https://issuu.com/auroralighting/docs/aus_3.0_book_low_res" target="_blank" style="color: #0b1c2a"><b>AURORA</b></a>
                        <a href="https://issuu.com/auroralighting/docs/trade_ed2_-_uk_book_140918_low_res_" target="_blank" class="orange-text"><b>ENLITE</b></a>
                        <div>&nbsp;</div>
                    </div>
                </div>
                <div class="col s12 m10 offset-m1 l6">
                    <div class="card-panel grey lighten-3 center hoverable">
                        <h4>Ajánlatkérés</h4>
                        <form class="contact-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" name="name" value="<?= $name ?>">
                                <label for="icon_prefix">Név</label>
                                <span style="color: red;font-weight: bold;font-family: Arial, Helvetica, sans-serif"><?= $name_error ?></span>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_email" type="text" name="email" value="<?= $email ?>">
                                <label for="icon_email">E-mail</label>
                                <span style="color: red;font-weight: bold;font-family: Arial, Helvetica, sans-serif"><?= $email_error ?></span>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="icon_prefix2" type="text" name="message" class="materialize-textarea" value="<?= $message ?>"></textarea>
                                <label for="icon_prefix2">Üzenet</label>
                                <span style="color: red;font-weight: bold;font-family: Arial, Helvetica, sans-serif"><?= $message_error ?></span>
                            </div>
                            <div class="file-field input-field col s12">
                                <div class="btn" style="background: #00BAF2">
                                    <span><i class="fas fa-file-upload"></i></span>
                                    <input type="file" multiple value="<?= $file ?>">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="file" placeholder="Egy vagy több fájl csatolása" value="<?= $file ?>">
                                    <span style="color: red;font-weight: bold;font-family: Arial, Helvetica, sans-serif"><?= $file_error ?></span>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn blue waves-effect waves-light white-text">Küldés</button>
                            <br>
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
                <div class="col s12 m4 center">
                    <h5>Oldaltérkép</h5>
                    <ul>
                        <li><a class="sitemap" href="index.html">FŐOLDAL</a></li>
                        <li><a href="products.html">TERMÉKEK</a></li>
                        <li><a href="references.html">REFERENCIÁK</a></li>
                        <li><a href="aboutus.html">RÓLUNK</a></li>
                        <li><a href="contact.php">KAPCSOLAT</a></li>
                    </ul>
                </div>
                <div class="col s12 m4 center">
                    <h5>Aurora Group weboldalak</h5>
                    <div>
                        <ul>
                            <li><a href="http://enlitelighting.com/gb/" target="_blank">ENLITE LIGHTING</a></li>
                            <li><a href="https://auroraclearance.com/" target="_blank">AURORA CLEARENCE</a></li>
                            <li><a href="http://auroralightfoundation.com/" target="_blank">AURORA LIGHTING FOUNDATION</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col s12 m4 center">
                    <h5>Közösségi média</h5>
                    <div>&nbsp;</div>
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