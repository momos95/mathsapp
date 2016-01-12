<!DOCTYPE html>
<html>
    <head>
        <title>Au Coeur Des Maths</title>

        <meta http-equiv="content-type"
        content="text/html; charset=ISO-8859-1">
        <link rel="icon" type="image/ico" href="../images/favicon.ico" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,600|Source+Code+Pro" rel="stylesheet" />
        <!--[if lte IE 8]><script src="html5shiv.js" type="text/javascript"></script><![endif]-->
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="../js/jquery.dropotron.min.js"></script>
        <script src="../js/skel.min.js">
        {
                prefix: '../techno_css/style',
                preloadStyleSheets: true,
                resetCSS: true,
                boxModel: 'border',
                grid: { gutters: 30 },
                breakpoints: {
                        wide: { range: '1200-', containers: 1140, grid: { gutters: 50 } },
                        narrow: { range: '481-1199', containers: 960 },
                        mobile: { range: '-480', containers: 'fluid', lockViewport: true, grid: { collapse: true } }
                }
        }
        </script>
        <script>
                $(function() {

                        $('#main-nav > ul').dropotron({
                                offsetY: -10
                        });

                });
        </script>
        <script>
                // DOM ready
                $(function() {

                // Create the dropdown base
                $("<select />").appendTo("nav");

                // Create default option "Go to..."
                $("<option />", {
                        "selected": "selected",
                        "value"   : "",
                        "text"    : "Menu"
                }).appendTo("nav select");

                // Populate dropdown with menu items
                $("nav a").each(function() {
                var el = $(this);
                $("<option />", {
                        "value"   : el.attr("href"),
                        "text"    : el.text()
                }).appendTo("nav select");
                });

                // To make dropdown actually work
                // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
                $("nav select").change(function() {
                        window.location = $(this).find("option:selected").val();
                });

                });
        </script>
    </head>
    <body>
        <div id="header_container">
            <div class="container">
                <!-- Header -->
                <div id="header" class="row">
                    <div class="4u">
                            <div class="box">
                                    <h1><a href="index.php">Maths_<span class="header_colour">App</span></a></h1>
                                    <h2>Au coeur des Maths avec MathsApp.</h2>
                        </div>
                    </div>

                    <nav id="main-nav" class="8u">
                            <ul>
                                    <li><a class="active" href="index.php">Accueil</a></li>
                               <!--	<li><a href="examples.html">Les Maths</a></li>-->
                                    <li><a href="/mathsapp/index">Connexion</a></li>
                                    <li><a href="inscription.php">Inscription</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            </ul>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- Banner -->
        <div id="banner_wrapper">
            <div class="container">
                <div id="banner">
                        <a href="#"><img src="../images/image1.jpg" alt="banner image" /></a>
                </div>
            </div>
        </div>

        <div id="site_content">
            <div class="container">

                <!-- Features -->
                <div class="row">
                    <section class="6u">
                        <h1> Bienvenue Sur MathsApp Website </h1>
                        <p>
                            MathsApp, premier produit de la start-Up <a href="http://www.technokocc.fr"><em style="color:blue;">Technokocc</em></a>, a pour objectif d'accompagner le lycéen ou le collégien pendant tout son cycle sur le côté pédagogique et plus précisément sur son programme scolaire de mathématiques selon son niveau.
                            En effet Il contient pour chaque niveau ( donc pour chaque classe ) un certain nombre de leçons de mathématiques (similaires à celles vues en classes ou en tout cas des leçons du programme) , d'exercices qui répondent tout à fait à ce qu'il faut retenir pour chaque leçons et une partie permettant de préparer un devoir , un contrôle ou un examen .
                            Donc en gros MathsApp pourrait être considèré comme étant un outil pédagogique et donc sera rangé dans la famille « Site WEB Educatif »
                        </p>
                        <p>
                            Ici ouvrez votre compte d'utilisateur et suivez les cours gratuitement puis passez les tests à la fin de chaque leçon afin d'obtenir des conseils méthodologiques.
                        </p>

                    </section>
                    <section class="6u">
                            <a href="#" class="image" ><img src="../images/image2.jpg" alt="image"/></a>
                    </section>
                    </div>
                        <div class="row">
                            <section class="4u">
                                <div class="box2">
                                    <div align="center" id="connexion">
                                        <h2>CONNEXION</h2>
                                    </div>
                                    <form class="formulaire" action="tocompte.php" method="post" id="formulaire">
                                        <p class="clearfix">
                                                <label for="pseudo">Utilisateur</label>
                                                <input type="text" name="pseudo" id="pseudo" placeholder="Nom d'utilisateur">
                                        </p>
                                        <p class="clearfix">
                                                <label for="password">Mot de passe</label>
                                                <input type="password" name="password" id="password" placeholder="Mot de passe">
                                        </p>

                                        <p class="clearfix">
                                                <input type="submit" name="submit" value="CONNECTER">
                                        </p>
                                        <p class="clearfix">
                                                <input type="button" onclick="document.location.href='http://www.technokocc.fr/mathsApp/nafio/inscription.php'" value="S'INSCRIRE" id="sinscrire">
                                        </p>
                                    </form>

                                    <p>
                                        <strong style="color:blue;text-align:center;"></strong> 
                                    </p>
                                </div>
                            </section>
                            <section class="4u">
                                <div class="box2">
                                    <div align="center">
                                        <h2>HORLOGE</h2> <br/>
                                    </div>
                                    <!--My calendar widget - HTML code - mycalendar.org -->
                                    <div align="center" style="margin:15px 0px 0px 0px">
                                        <noscript>
                                            <div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold;">
                                                <a style="font-size:12px;text-decoration:none;color:#000 ;" href="http://mycalendar.org/"> Calendar</a>
                                            </div>
                                        </noscript>
                                        <script type="text/javascript" src="http://mycalendar.org/calendar.php?group=&widget_number=3&cp3_Hex=FFB200&cp2_Hex=040244&cp1_Hex=F9F9FF&fwdt=140&lab=1">
                                        </script>
                                        <script type="text/javascript" src="http://www.supportduweb.com/page/js/flashobject.js"></script>
                                        <div id="clock_505" style="display:inline-block;">
                                            <a href="http://get.adobe.com/flashplayer/">You need to install the Flash plugin</a> - <a href="http://www.supportduweb.com/">http://www.supportduweb.com/</a>
                                        </div>
                                        <script type="text/javascript">
                                            var flashvars_505 = {};
                                            var params_505 = {
                                                    quality: "high",
                                                    wmode: "transparent",
                                                    bgcolor: "#ffffff",
                                                    allowScriptAccess: "always",
                                            };
                                            var attributes_505 = {};
                                            flashObject("http://flash.supportduweb.com/horloges/horloge04.swf", "clock_505", "150", "150", "8", false, flashvars_505, params_505, attributes_505);
                                        </script>
                                    </div>
                                </div>
                            </section>
                                
                            <section class="4u">
                                <div class="box2">
                                    <section class="12u">
                                        <iframe src="http://www.google.com/uds/modules/elements/newsshow/iframe.html?format=300x250"
                                            frameborder="0" width="300" height="250"
                                            marginwidth="0" marginheight="0">
                                        </iframe>
                                    </section>
                                </div>
                            </section>

                        </div>
                    </div>
    </div>
                            <div class="container">
                    <!-- Footer -->
                            <footer>
                                    <p><img src="../images/twitter.png" alt="twitter" />&nbsp;<a href="https://www.facebook.com/TechnoKocc" target="_blank"><img src="../images/facebook.png" alt="facebook" /></a>&nbsp;<img src="../images/rss.png" alt="rss" /></p>
                                    <p><a href="http://mathsapp.technokocc.fr">Accueil</a> |<!-- <a href="histo_maths.php">Les Maths</a> |--><a href="index.php#connexion">Connexion</a> | <a href="inscription.php">Inscription</a> | <a href="contact.php">Nous contacter</a></p>
<!--					<p>Copyright Technokocc | <a href="http://fotogrph.com/">Images</a> | <a href="http://skeljs.org/">skel.js</a> | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>-->
                            </footer>
                    </div>
    </body>
</html>
