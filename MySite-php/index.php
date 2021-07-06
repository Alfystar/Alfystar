<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./sitePart/commonHead.php") ?>
</head>

<body> <!-- Add your content of header -->
<header>
    <nav class="navbar navbar-default active">
        <div class="container">
            <?php include("./sitePart/HeaderMount.php");
            navbarDefault();
            menu("Home");
            ?>
        </div>
    </nav>
</header>

<!-- Add your site or app content here -->
<div class="hero-full-container background-image-container white-text-container">
    <div class="container">
        <div class="grid-container-Profilo">
            <div class="grid-item">
                <div id='myProfile'></div>
            </div>
            <div class="grid-item">
                <div class="col-xs-12">
                    <h1>Ing. Emanuele Alfano</h1>
                    <ul class="text-left">
                        <li>Perito Informatico-Automatico</li>
                        <li>Ingegnere Informatico-Automatico</li>
                        <li>Studente di Automazione Industriale</li>
                    </ul>
                    <!-- Per allineare al centro è necessario sapere la dimensione esatta occupata dalle icone-->
                    <div style="display: block;margin-left: auto;margin-right: auto; width: 118px">
                        <?php include("./sitePart/iconSocialList.php") ?>
                    </div>
                    <div class="center-block" style="padding-top: 20px">
                        <a href="/Files/Personali/21-07-06EMANUELE ALFANO CV.pdf" class="btn btn-default btn-lg"
                           title="">Get Curriculum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="text-center">
                    <h2>Biografia</h2>
                    <h3>Percorso Formativo</h3>
                    <ul class="text-left blockList">
                        <li>
                            Attualmente seguo, presso l'<a href="https://web.uniroma2.it/" target="Univeristà"><b>Università
                                    degli Studi di Roma "Tor Vergata"</b></a>,
                            il corso magistrale in <b>Ingegneria dell'Automazione</b>.
                        </li>
                        <li>
                            Sempre all'<a href="https://web.uniroma2.it/" target="Univeristà"><b>Università degli Studi
                                    di Roma "Tor Vergata"</b></a>
                            ho conseguito la laurea in <b>Ingegneria Informatica ed Automatica</b> con la <b>votazione
                                di 110 e Lode</b>.<br>
                            Tra i crediti facoltativi ho inserito degli esami <i>Vulnerabilità e Sicurezza
                                Informatica</i> per la
                            grande curiosità che questi temi suscitano sempre in me.
                        </li>
                        <li>
                            Alle superiori sono stato iscritto all'<a href="http://www.itisgalilei.edu.it/it/"
                                                                      target="Superiori"><b>ITIS Galielo Galilei</b></a>,
                            indirizzo: <b>Perito Elettronico ed Automatico</b> mi sono diplomato con <b>voto di Maturita
                                di 100/100</b>.
                        </li>
                    </ul>
                    <h3>Competizioni ed Eventi</h3>
                    <p class="text-left">
                        Sin dagli anni delle superiori ho avuto attività extra scolastiche molto immersive, che mi hanno
                        portato a partecipare a molti eventi, ecco una lista <i>non esaustiva</i> degli eventi a
                        cui ho partecipato:
                        <ul class="text-left blockList">
                            <li>
                                <div class="flex-conteiner">
                    <p class="flex-child">
                        [12-14/10/2018] Espositore alla <b>Maker Faire Rome 2018</b>, con la versione <b>FINALE</b>
                        del 3D-Robot-Pac-Man.
                    </p>
                    <a class="btn btn-info btn-sm pull-right flex-child-Small" target="giornali"
                       href="https://magpi.raspberrypi.org/articles/robot-pac-man">
                        Learn More
                    </a>
                </div>
                </li>
                <li>
                    [01-03/12/2017] Espositore alla <b>Maker Faire Rome 2017</b>, della versione ulteriormente
                    migliorata del 3D-Robot-Pac-Man
                </li>
                <li>
                    [14-16/10/2016] Espositore alla <b>Maker Faire Rome 2016</b>, con il progetto di gruppo del
                    3D-Robot-Pac-Man
                </li>
                <li>
                    [16-18/10/2015] Espositore alla <b>Maker Faire Rome 2015</b> dei robot di robotica (con i quali lo
                    stesso anno vincemmo i mondiali)
                    e del mio progetto personale estivo, il <a href="#">Disco Laser</a>.
                </li>
                <li>
                    <div class="flex-conteiner">
                        <p class="flex-child">
                            [17-23/07/2015] Vincitore della <b>RoboCup-Junior sezione Soccer Light</b> in Cina.
                        </p>
                        <a class="btn btn-info btn-sm pull-right flex-child-Small" target="giornali"
                           href="https://www.italia-news.it/roma-iis-galileo-galilei-vince-i-mondiali-di-robotica-in-cina-11553.html#:~:text=robotica%20in%20Cina-,Roma.,costruiti%20e%20programmati%20dagli%20studenti.">
                            Learn More
                        </a>
                    </div>
                </li>
                <li>
                    [19-25/06/2014] Secondo posto alla <b>RoboCup-Junior sezione Soccer Light</b> in Brasile.
                </li>
                <li>
                    [12-13/4/2014] Secondo posto della <b>Space Apps Rome 2014</b> con il progetto
                    <a href="http://www.davidealoisi.it/eventi/spaceapps/" target="_blank">MOSIMOV</a>.
                </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="text-center">
                    <h2>Interviste</h2>
                    <p>
                        Intervista del 3 maggio 2016, all'epoca avevo 18 anni e 6 mesi prima d ero diventato
                        campione del mondo della categoria "Robocup Junior: Soccer" in Cina ad Hefei
                    </p>
                    <div class="containerVideo16_9">
                        <iframe class="video"
                                src="https://www.youtube.com/embed/s_NFlW5MMB4?start=665" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-container contact-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="section-container-spacer">
                    <h2 class="text-center">Contatti</h2>
                </div>
                <div class="card-container">
                    <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0 reveal">
                        <form id="fcf-form-id"
                              method="post"
                              class="reveal-content"
                              action="sitePart/contact-form-process.php">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="Email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Name" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" name="Message"
                                                  placeholder="Enter your message"></textarea>
                                    </div>
                                    <button type="submit" value="Send" class="btn btn-primary">Send message</button>
                                </div>
                                <div class="col-md-5">
                                    <ul class="list-unstyled address-container">
                                        <li><i class="fa fa-icon fa-phone" aria-hidden="true"></i>
                                            +39 349 47 83 373
                                        </li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"> </i>
                                            <a href="mailto:emanuele.alfano@alumni.uniroma2.eu?Subject=[Email-Site]"
                                               target="emailTab">
                                                emanuele.alfano@alumni.uniroma2.eu
                                            </a>
                                        </li>
                                        <li><i class="fa fa-skype" aria-hidden="true"> </i>
                                            <a href="mailto:emanuele.alfano@outlook.it?Subject=[Email-Site]"
                                               target="emailTab">
                                                emanuele.alfano@outlook.it
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-image col-xs-12"
                         style="background-image: url('/MySite-php/assets/images/img-01.jpg')">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer-container white-text-container">
    <?php
    include("./sitePart/FooterMount.php");
    footer();
    ?>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        navbarFixedTopAnimation();
    });

    document.addEventListener("DOMContentLoaded", function (event) {
        navActivePage();
        scrollRevelation('.reveal');
    });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
<script type="text/javascript" src="main.js"></script>
</body>

</html>