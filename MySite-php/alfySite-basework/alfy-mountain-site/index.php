<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./sitePart/commonHead.php")?>
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
                        <?php include("./sitePart/iconSocialList.php")?>
                    </div>
                    <div class="pull-right">
                        <a href="/Files/Personali/20-11-07EMANUELE_ALFANO_CV.pdf" class="btn btn-default btn-lg" title="">Get Curriculum</a>
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
                    <h2>About Me</h2>
                    <p class="text-justify">
                        Fin da piccolo sono stato un grande appassionato di elettronica e fai-da-te. Crescendo mi sono
                        avvicinato al mondo dell'elettronica hobbystica e digitale, con un occhio verso la
                        programmazione.
                        Grazie al percorso di studi che ho scelto di seguire, andando al tecnico industriale "Galileo
                        Galilei" ho avuto modo di coltivare le mie passioni e ho scoperto Arduino e il mondo embedded
                        dei Micro-Controllori.
                        <br><br>
                        Sono entrato nel gruppo di Robotica della mia Scuola, e questo mi ha permesso di provare subito
                        e con mano tutto quello che ci veniva spiegato in classe.
                        In seguito sono entrato in contatto con il FabLab del Quadraro, lì, oltre ad aver conosciuto
                        delle personi importanti ho avuto l'occasione di scoprire e imparare a usare macchine a
                        controllo numerico come CNC, Stampanti 3D e Tagliatrici Laser.
                        <br><br>
                        Ora sono all'università e grazie agli studi che ho fatto non affronto più il mondo come un Maker
                        appassionato, bensì come un Ingengere preparato.
                    </p>
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
                    <h2 class="text-center">Contattatemi</h2>
                    <p class="text-center">
                        Per entrare in contatto con me scrivetemi pure una email
                        o raggiungetemi su uno dei miei social
                    </p>
                </div>
                <div class="card-container">
                    <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0 reveal">
                        <!--                                action="mailto:alfystar1701@gmail.com?subject=[Email-Site]"-->
                        <!--                              enctype="text/plain"-->
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
                    <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
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